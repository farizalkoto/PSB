<?php

namespace Modules\Teacher\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;

use Yajra\Datatables\Datatables;
use DB;
use Auth;

class TeacherController extends Controller
{
    public $saveImage;

    public function __construct() {
        $this->saveImage = 'upload/guru';
        date_default_timezone_set('Asia/Jakarta');
    }

    public function list()
    {
        return view('teacher::list');
    }

    public function getData()
    {
        $list = parent::listData('teachers');
        if ($list['status'] != 200) {
            $data = [];
        } else {
            $data = $list['result'];
        }

        return Datatables::of($data)
        ->addColumn('action', function ($data) {
            return '
            <a href="'.url("guru/edit", $data['id']).'" class="btn btn-sm btn-info"> Edit</a>
            <a href="'.url("guru/delete", $data['id']).'" class="btn btn-sm btn-danger"> Hapus</a>
            ';
        })->make(true);
    }

    public function create(Request $request)
    {
        $post = $request->except('_token');
        if (empty($post)) {
            return view('teacher::create');
        }

        if (isset($post['birthday'])) {
            $post['birthday'] = date('Y-m-d', strtotime($post['birthday']));
        }

        if (isset($post['url'])) {
            $ext = $post['url']->extension();
            $name = date('YmdHis');

            $upload = parent::uploadPhoto($post['url'], $this->saveImage, 300, $name.'.', $ext);

            if (isset($upload['status']) && $upload['status'] == "success") {
                $post['url'] = $upload['path'];
            } else {
                DB::rollback();
                return back()->withErrors(['Failed to upload Image'])->withInput();
            }
        }

        $create = parent::insertData($post, 'teachers');
        return parent::confirm($create, 'Data berhasil di simpan', 'guru');
    }

    public function update(Request $request, $id)
    {
        $post = $request->except('_token');
        // return $post;
        $list = parent::listData('teachers', ['id' => $id], null, 'first');
        if ($list['status'] != 200) {
            return back()->withErrors(['Data tidak ditemukan']);
        }

        if (empty($post)) {
            return view('teacher::update', ['list' => $list['result']]);
        }

        if (isset($post['url'])) {
            $ext = $post['url']->extension();
            $name = date('YmdHis');

            $upload = parent::uploadPhoto($post['url'], $this->saveImage, 300, $name.'.', $ext);

            if (isset($upload['status']) && $upload['status'] == "success") {
                $post['url'] = $upload['path'];
            } else {
                DB::rollback();
                return back()->withErrors(['Failed to upload Image'])->withInput();
            }
        }

        if (isset($post['birthday'])) {
            $post['birthday'] = date('Y-m-d', strtotime($post['birthday']));
        }

        $update = parent::updateData($post, 'teachers', ['id' => $id]);
        return parent::confirm($update, 'Data berhasil di update', 'guru');
    }

    public function delete($id)
    {
        $delete = parent::deleteData('teachers', ['id' => $id]);
        return parent::confirm($delete, 'data berhasil di hapus');
    }

}
