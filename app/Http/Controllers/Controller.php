<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Schema;

use App\Http\Models\Department;

use Auth;
use DB;
use Image;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    private $model = 'App\Http\Models\\';

    function listData($table, $condition=null, $join=null, $take=null) {
        $className = $this->model . studly_case(str_singular($table));
        if (!class_exists($className)) {
            return ['status' => 500, 'messages' => ['Table tidak ditemukan']];
        }

        $columns = Schema::getColumnListing($table);
        if (empty($columns)) {
            return ['status' => 500, 'messages' => ['Column table tidak ditemukan']];
        }

        $list = $className::orderBy($columns[0], 'DESC');
        if (!is_null($join)) {
            $list->with($join);
        }

        if (!is_null($condition)) {
            $list->where($condition);
        }


        if ($take == 'first') {
            $list = $list->first();
        } else {
            $list = $list->get()->toArray();
        }

        if (empty($list)) {
            return ['status' => 500, 'messages' => ['Data tidak ditemukan']];
        }

        return ['status' => 200, 'result' => $list];
    }

    function insertData($post, $table) {
        DB::beginTransaction();

        if (Auth::check()) {
            if (Auth::check()->user_type == 'student') {
            $post['user_id'] = Auth::user()->user_id;
            }
        }

    	$columns = Schema::getColumnListing($table);
    	if (empty($columns)) {
            DB::rollback();
    		return ['status' => 500, 'messages' => ['Column table tidak ditemukan']];
    	}

    	foreach ($columns as $key => $col) {
    		if ($key > 0) {
                if (isset($post[$col])) {
                    $data[$col] = $post[$col];
                }
    		}
        }

    	$className = $this->model . studly_case(str_singular($table));
		if (!class_exists($className)) {
            DB::rollback();
			return ['status' => 500];
        }

		$insert = $className::create($data);
        if (!$insert) {
            DB::rollback();
            return ['status' => 500, 'messages' => ['Table tidak ditemukan']];
        }

        DB::commit();
        return ['status' => 200, 'result' => $insert];
    }

    function insertUpdateData($post, $table, $condition) {
        DB::beginTransaction();

        if (Auth::user()->user_type == 'student') {
            if (isset(Auth::user()->user_id)) {
                $post['user_id'] = Auth::user()->user_id;
            }
        }

        $columns = Schema::getColumnListing($table);
        if (empty($columns)) {
            DB::rollback();
            return ['status' => 500, 'messages' => ['Column table tidak ditemukan']];
        }

        foreach ($columns as $key => $col) {
            if ($key > 0) {
                if (isset($post[$col])) {
                    $data[$col] = $post[$col];
                }
            }
        }

        $className = $this->model . studly_case(str_singular($table));
        if (!class_exists($className)) {
            DB::rollback();
            return ['status' => 500];
        }

        $insert = $className::updateOrCreate($condition, $data);
        if (!$insert) {
            DB::rollback();
            return ['status' => 500, 'messages' => ['Table tidak ditemukan']];
        }
        
        DB::commit();
        return ['status' => 200, 'result' => $insert];
    }

    function updateData($post, $table, $condition)
    {
        DB::beginTransaction();

        $className = $this->model . studly_case(str_singular($table));
        if (!class_exists($className)) {
            DB::rollback();
            return ['status' => 500, 'messages' => ['Table tidak ditemukan']];
        }

        $update = $className::where($condition)->update($post);
        if (!$update) {
            DB::rollback();
            return ['status' => 500, 'messages' => ['Data gagal diupdate']];
        }

        DB::commit();
        return ['status' => 200];
    }

    function deleteData($table, $condition) {
        $className = $this->model . studly_case(str_singular($table));
        if (!class_exists($className)) {
            return ['status' => 500, 'messages' => ['Table tidak ditemukan']];
        }

        $delete = $className::where($condition)->delete();
        if (!$delete) {
            return ['status' => 500, 'messages' => ['Data gagal didelete']];
        }

        return ['status' => 200];
    }

    function confirm($save, $messagesSuccess, $next=null) {
        if ($save['status'] == 200) {
            DB::commit();
            if (is_null($next)) {
                return back()->with('success', [$messagesSuccess]);
            }
            else {
                return redirect($next)->with('success', [$messagesSuccess]);
            }
        } elseif ($save['status'] == 500) {
            DB::rollBack();
            return back()->witherrors($save['messages'])->withInput();
        } else {
            DB::rollBack();
            $e = ['e' => 'Terjadi kesalahan. Silakan coba lagi.'];
            return back()->witherrors($e)->withInput();
        }
    }

    public function uploadPhoto($foto, $path, $resize=1000, $name=null, $ext) {
        // set picture name
        if($name != null)
            $pictName = $name.$ext;
        else
            $pictName = mt_rand(0, 1000).''.time().''.$ext;

        // path
        $upload = $path.'/'.$pictName;

        $img    = Image::make($foto);

        $width  = $img->width();
        $height = $img->height();


        if($width > 1000){
            $img->resize(1000, null, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });
        }

        $img->resize($resize, null, function ($constraint) {
            $constraint->aspectRatio();
        });

        if ($img->save($upload)) {
            $result = [
                'status' => 'success',
                'path'  => $upload
            ];
        } else {
            $result = [
                'status' => 'fail'
            ];
        }

        return $result;
    }

    public function selection()
    {
        DB::beginTransaction();
        $list = $this->listData('departments', null, ['registryOption1', 'registryOption2']);
        if ($list['status'] != 200) {
            return ['status' => 500, 'messages' => ['Data tidak valid']];
        }
        foreach ($list['result'] as $key => $value) {
            if (!empty($value['registry_option1'])) {
                $total = $value['department_max'];
                foreach ($value['registry_option1'] as $row => $pilihan1) {
                    if ($row >= $total) {
                        if ($pilihan1['registry_status'] == 'registry_option1') {
                            $update = $this->updateData(['registry_status' => 'registry_option2'], 'registries', ['registry_id' => $pilihan1['registry_id']]);
                            if ($update['status'] != 200) {
                                DB::rollback();
                                return ['status' => 500, 'messages' => ['Data gagal diupdate']];
                            }
                        }
                    }
                }
                
            }

            if (!empty($value['registry_option2'])) {
                $total2 = $value['department_max'];
                foreach ($value['registry_option2'] as $col => $pilihan2) {
                    if ($col >= $total2) {
                        if ($pilihan2['registry_status'] == 'registry_option2') {
                            $update2 = $this->updateData(['registry_status' => 'not_pass'], 'registries', ['registry_id' => $pilihan2['registry_id']]);
                            if ($update2['status'] != 200) {
                                DB::rollback();
                                return ['status' => 500, 'messages' => ['Data gagal diupdate']];
                            }
                        }
                    }
                }
                
            }
        }

        DB::commit();
        return ['status' => 200];
    }

}
