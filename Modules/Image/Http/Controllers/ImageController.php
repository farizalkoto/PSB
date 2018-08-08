<?php

namespace Modules\Image\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;

use Yajra\Datatables\Datatables;
use DB;
use Auth;

class ImageController extends Controller
{
    public $saveImage;

    public function __construct() {
        $this->saveImage = 'upload/image';
        date_default_timezone_set('Asia/Jakarta');
    }

    public function list()
    {
        return view('image::list');
    }

    public function getData()
    {
        $list = parent::listData('images');
        if ($list['status'] != 200) {
            $data = [];
        } else {
            $data = $list['result'];
        }

        return Datatables::of($data)
        ->addColumn('action', function ($data) {
            return '
            <a href="'.url("galeri/delete", $data['id']).'" class="btn btn-sm btn-danger"> Hapus</a>
            <a href="'.url("galeri/edit", $data['id']).'" class="btn btn-sm btn-info"> Edit</a>
            ';
        })->addColumn('url' , function ($data) {
            return '
                <img src="' . url($data['url']) . '" height="100px">
            ';
        })->rawColumns(['action', 'url'])
        ->make(true);
    }

    public function create(Request $request)
    {
        $post = $request->except('_token');
        if (empty($post)) {
            return view('image::create');
        }

        $ext = $post['url']->extension();
        $name = date('YmdHis');

        $upload = parent::uploadPhoto($post['url'], $this->saveImage, 300, $name.'.', $ext);

        if (isset($upload['status']) && $upload['status'] == "success") {
            $imageUn['url'] = $upload['path'];
            $imageUn['name'] = $post['name'];
        } else {
            DB::rollback();
            return back()->withErrors(['Failed to upload Image'])->withInput();
        }

        $create = parent::insertData($imageUn, 'images');
        return parent::confirm($create, 'Data berhasil di simpan', 'galeri');
    }

    public function delete($id)
    {
        $delete = parent::deleteData('images', ['id' => $id]);
        return parent::confirm($delete, 'data berhasil di hapus');
    }
}
