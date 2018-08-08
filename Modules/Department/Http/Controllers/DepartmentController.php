<?php

namespace Modules\Department\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;

use Modules\Department\Http\Requests\Create;
use Modules\Department\Http\Requests\Update;
use Modules\Department\Http\Requests\Delete;
use Yajra\DataTables\DataTables;

use DB;

class DepartmentController extends Controller
{
    public function index()
    {
        return view('department::index');
    }
    public function list(DataTables $dtb)
    {
        $data = parent::listData('departments');
        return $dtb
            ->collection($data['result'])
            ->addColumn('action' , function ($row) {
                $id = $row['department_id'];

                return '
                <div class="texbact-center">
                <a class="btn btn-primary" href="'.url('jurusan/update',$id).'"><i class="fa fa-pencil"></i></a>
                <a class="btn btn-danger" href="'.url('jurusan/delete',$id).'"><i class="fa fa-bitbucket"></i></a>               
                </div>
                ';
            })
            ->rawColumns(
                [
                    'action'
                ])
            ->make(true);

    }

    public function create(Create $request)
    {
        $post = $request->except('_token');
        if (empty($post)) {
            return view('department::create');
        }

        $insert = parent::insertData($post, 'departments');
        return parent::confirm($insert, 'Jurusan berhasil ditambah');

    }

    public function update(Update $request, $id)
    {
        $post = $request->except('_token', 'department_id');

        $department = parent::listData('departments', ['department_id' => $id], null, 'first');
        if ($department['status'] != 200) {
            return back()->withErrors(['Jurusan tidak ditemukan']);
        }

        if (empty($post)) {
            return view('department::update', ['data' => $department['result']]);
        }

        $update = parent::updateData($post, 'departments', ['department_id' => $id]);
        return parent::confirm($update, 'Jurusan berhasil diupdate');
    }

    public function delete(Request $request, $id)
    {
        $delete = parent::deleteData('departments', ['department_id' => $id]);
        return parent::confirm($delete, 'Jurusan berhasil didelete');
    }
}
