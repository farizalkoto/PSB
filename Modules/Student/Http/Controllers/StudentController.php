<?php

namespace Modules\Student\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Schema;

use App\Http\Models\UserPersonal;
use App\Http\Models\User;

use Auth;
use DB;
use Session;

class StudentController extends Controller
{
    public $saveImage;

    public function __construct() {
        $this->saveImage = 'upload/siswa';
        date_default_timezone_set('Asia/Jakarta');
    }

    public function list()
    {
        $list = parent::listData('registries', ['registry_verified' => '1'], ['user.studentPersonal.studentScores', 'option1', 'option2']);
        if ($list['status'] == 200) {
            $daftar = $list['result'];
        } else {
            $daftar = [];
        }

        return view('student.list', ['list' => $daftar]);
    }

    public function batal()
    {
        $id = Auth::user()->user_id;
        $delete = parent::deleteData('users', ['user_id' => $id]);
        if ($delete['status'] == 200) {
            parent::selection();
            Auth::logout();
        }
        
        return parent::confirm($delete, 'Data anda sudah dihapus');
    }

    public function create(Create $request)
    {
        $post = $request->except('_token');
        DB::beginTransaction();

        $insertPersonal = $this->insertData($post, 'student_personals');
        if (!$insertPersonal) {
            DB::rollback();
            return back()->withErrors(['Insert Failed'])->withInput();
        }

        DB::commit();
        return back()->with(['success' => ['Data has  been created']]);
    }

    function insertData($data, $table)
    {
        return parent::insert($data, $table);
    }

    public function home()
    {
        $id = Auth::user()->user_id;
        // return $id;

        $department = parent::listData('departments');
        if ($department['status'] == 200) {
            $dep = $department['result'];
        } else {
            $dep = [];
        }

        $list =  parent::listData('users', ['user_id' => $id], ['registry.option1', 'registry.option2', 'studentPersonal.studentAddresses', 'studentPersonal.studentParents', 'studentPersonal.studentPhysics', 'studentPersonal.studentSchools', 'studentPersonal.studentScores', 'studentPersonal.studentUploads'], 'first');
        // return $list;
        // return $list['result']['studentPersonal']['studentParents'][0]['student_parent_name'];

        return view('student.index', ['list' => $list, 'department' => $dep, 'id' => $id]);

    }

    public function save(Request $request, $ids)
    {
        $post = $request->except('_token');
        // return $post;
        $post['student_personal_birthday'] = date('Y-m-d', strtotime($post['student_personal_birthday']));

        $personal = parent::insertUpdateData($post, 'student_personals', ['user_id' => $ids]);
        if ($personal['status'] != 200) {
            DB::rollback();
            return back()->withErrors(['Data tidak valid'])->withInput();
        }

        $id = $personal['result']['student_personal_id'];

        $address = parent::insertUpdateData($post, 'student_addresses', ['student_personal_id' => $id]);
        if ($address['status'] != 200) {
            DB::rollback();
            return back()->withErrors(['Data tidak valid'])->withInput();
        }

        $fisik = parent::insertUpdateData($post, 'student_physics', ['student_personal_id' => $id]);
        if ($fisik['status'] != 200) {
            DB::rollback();
            return back()->withErrors(['Data tidak valid'])->withInput();
        }

        $sekolah = parent::insertUpdateData($post, 'student_schools', ['student_personal_id' => $id]);
        if ($sekolah['status'] != 200) {
            DB::rollback();
            return back()->withErrors(['Data tidak valid'])->withInput();
        }

        $ayah = [
            'student_parent_name'       => $post['a_student_parent_name'],
            'student_parent_birthplace' => $post['a_student_parent_birthplace'],
            'student_parent_birthday'   => $post['a_student_parent_birthday'],
            'student_parent_job'        => $post['a_student_parent_job'],
            'student_parent_education'  => $post['a_student_parent_education'],
            'student_parent_income'     => $post['a_student_parent_income'],
            'student_parent_phone'      => $post['a_student_parent_phone'],
            'student_parent_type'       => 'father'
        ];

        $ins_ayah = parent::insertUpdateData($ayah, 'student_parents', ['student_personal_id' => $id, 'student_parent_type' => 'father']);
        if ($ins_ayah['status'] != 200) {
            DB::rollback();
            return back()->withErrors(['Data tidak valid'])->withInput();
        }

        $ibu = [
            'student_parent_name'       => $post['i_student_parent_name'],
            'student_parent_birthplace' => $post['i_student_parent_birthplace'],
            'student_parent_birthday'   => $post['i_student_parent_birthday'],
            'student_parent_job'        => $post['i_student_parent_job'],
            'student_parent_education'  => $post['i_student_parent_education'],
            'student_parent_income'     => $post['i_student_parent_income'],
            'student_parent_phone'      => $post['i_student_parent_phone'],
            'student_parent_type'       => 'mother'
        ];

        $ins_ibu = parent::insertUpdateData($ibu, 'student_parents', ['student_personal_id' => $id, 'student_parent_type' => 'mother']);
        if ($ins_ibu['status'] != 200) {
            DB::rollback();
            return back()->withErrors(['Data tidak valid'])->withInput();
        }

        $wali = [
            'student_parent_name'       => $post['w_student_parent_name'],
            'student_parent_birthplace' => $post['w_student_parent_birthplace'],
            'student_parent_birthday'   => $post['w_student_parent_birthday'],
            'student_parent_job'        => $post['w_student_parent_job'],
            'student_parent_education'  => $post['w_student_parent_education'],
            'student_parent_income'     => $post['w_student_parent_income'],
            'student_parent_phone'      => $post['w_student_parent_phone'],
            'student_parent_type'       => 'alternate'
        ];

        $ins_wali = parent::insertUpdateData($wali, 'student_parents', ['student_personal_id' => $id, 'student_parent_type' => 'alternate']);
        if ($ins_wali['status'] != 200) {
            DB::rollback();
            return back()->withErrors(['Data tidak valid'])->withInput();
        }

        $post['student_score_indonesia'] = ($post['student_rapor_indonesia'] + $post['student_uas_indonesia'] + $post['student_uan_indonesia']) / 3;
        $post['student_score_mtk']       = ($post['student_rapor_mtk'] + $post['student_uas_mtk'] + $post['student_uan_mtk']) / 3;
        $post['student_score_ipa']       = ($post['student_rapor_ipa'] + $post['student_uas_ipa'] + $post['student_uan_ipa']) / 3;
        $post['student_score_inggris']   = ($post['student_rapor_inggris'] + $post['student_uas_inggris'] + $post['student_uan_inggris']) / 3;

        $nilai = parent::insertUpdateData($post, 'student_scores', ['student_personal_id' => $id]);
        if ($nilai['status'] != 200) {
            DB::rollback();
            return back()->withErrors(['Data tidak valid'])->withInput();
        }

        $post['registry_score_total'] = $post['student_score_indonesia'] + $post['student_score_mtk'] + $post['student_score_ipa'] + $post['student_score_inggris'] / 4;
        $post['registry_status']      = 'registry_option1';
        $post['registry_date']        = date('Y-m-d H:i:s');

        $regis = parent::insertUpdateData($post, 'registries', ['user_id' => $ids]);
        if ($regis['status'] != 200) {
            DB::rollback();
            return back()->withErrors(['Data tidak valid'])->withInput();
        }

        if (isset($post['un_student_upload_url'])) {
            $ext = $post['un_student_upload_url']->extension();
            $name = date('YmdHis');

            $upload = parent::uploadPhoto($post['un_student_upload_url'], $this->saveImage, 300, $name.'.', $ext);

            if (isset($upload['status']) && $upload['status'] == "success") {
                $imageUn['student_upload_url'] = $upload['path'];
                $imageUn['student_upload_name'] = 'uan';
                $saveUn = parent::insertUpdateData($imageUn, 'student_uploads', ['student_personal_id' => $id, 'student_upload_name' => 'uan']);
                if ($saveUn['status'] != 200) {
                    DB::rollback();
                    return back()->withErrors(['Data tidak valid'])->withInput();
                }
            }
            else {
                DB::rollback();
                return back()->withErrors(['Failed to upload Image'])->withInput();
            }
        }

        if (isset($post['r_student_upload_url'])) {
            $ext = $post['r_student_upload_url']->extension();
            $name = date('YmdHis');

            $upload = parent::uploadPhoto($post['r_student_upload_url'], $this->saveImage, 300, $name.'.', $ext);

            if (isset($upload['status']) && $upload['status'] == "success") {
                $imageR['student_upload_url'] = $upload['path'];
                $imageR['student_upload_name'] = 'rapor';
                $saveR = parent::insertUpdateData($imageR, 'student_uploads', ['student_personal_id' => $id, 'student_upload_name' => 'rapor']);
                if ($saveR['status'] != 200) {
                    DB::rollback();
                    return back()->withErrors(['Data tidak valid'])->withInput();
                }
            }
            else {
                DB::rollback();
                return back()->withErrors(['Failed to upload Image'])->withInput();
            }
        }

        if (isset($post['uas_student_upload_url'])) {
            $ext = $post['uas_student_upload_url']->extension();
            $name = date('YmdHis');

            $upload = parent::uploadPhoto($post['uas_student_upload_url'], $this->saveImage, 300, $name.'.', $ext);

            if (isset($upload['status']) && $upload['status'] == "success") {
                $imageUs['student_upload_url'] = $upload['path'];
                $imageUs['student_upload_name'] = 'uas';
                $saveUs = parent::insertUpdateData($imageUs, 'student_uploads', ['student_personal_id' => $id, 'student_upload_name' => 'uas']);
                if ($saveUs['status'] != 200) {
                    DB::rollback();
                    return back()->withErrors(['Data tidak valid'])->withInput();
                }
            }
            else {
                DB::rollback();
                return back()->withErrors(['Failed to upload Image'])->withInput();
            }
        }

        DB::commit();
        return back()->with(['success' => ['Data siswa berhasil disimpan']]);
    }

    public function daftar($status=null)
    {
        if (is_null($status)) {
            $list = parent::listData('registries', null, ['user.studentPersonal.studentScores',]);
        } elseif ($status == 'unverified') {
            $list = parent::listData('registries', ['registry_verified' => '0'], ['user.studentPersonal.studentScores',]);
        } elseif ($status == 'verified') {
            $list = parent::listData('registries', ['registry_verified' => '1'], ['user.studentPersonal.studentScores',]);
        } else {
            return back()->withErrors(['Data tidak valid']);
        }

        if ($list['status'] == 200) {
            $daftar = $list['result'];
        } else {
            $daftar = [];
        }

        // return $daftar;
        return view('student::index', ['list' => $daftar]);
    }

    public function change($id)
    {
        $check = parent::listData('registries', ['registry_id' => $id], null, 'first');
        if ($check['status'] != 200) {
            DB::rollback();
            return back()->withErrors(['Data tidak valid'])->withInput();
        }

        $update = parent::updateData(['registry_verified' => '1'], 'registries', ['registry_id' => $id]);
        if ($update['status'] != 200) {
            DB::rollback();
            return back()->withErrors(['Data tidak valid'])->withInput();
        }

        $changeStatus = parent::selection();
        if ($changeStatus['status'] != 200) {
            DB::rollback();
            return back()->withErrors(['Data tidak valid'])->withInput();
        }

        DB::commit();
        return back()->with(['success' => ['Siswa berhasil di verifikasi']]);
    }

    public function detail($id)
    {
        // return $id;
        $department = parent::listData('departments');
        if ($department['status'] == 200) {
            $dep = $department['result'];
        } else {
            $dep = [];
        }

        $list =  parent::listData('users', ['user_id' => $id], ['registry.option1', 'registry.option2', 'studentPersonal.studentAddresses', 'studentPersonal.studentParents', 'studentPersonal.studentPhysics', 'studentPersonal.studentSchools', 'studentPersonal.studentScores', 'studentPersonal.studentUploads'], 'first');
        // return $list;
        // return $list['result']['studentPersonal']['studentParents'][0]['student_parent_name'];

        return view('student::detail', ['list' => $list, 'department' => $dep, 'id' => $id]);
    }

    public function delete(Request $request,$id)
    {
        $delete = parent::deleteData('users', ['user_id' => $id]);
        return parent::confirm($delete, 'Siswa berhasil dihapus');
    }
}
