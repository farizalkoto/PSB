<?php

namespace Modules\User\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;


use Exception;

use Modules\User\Http\Requests\Create;
use Modules\User\Http\Requests\Update;
use Modules\User\Http\Requests\Delete;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function index(){
        return view('user::index');
    }
    public function list(DataTables $dtb)
    {
        $data = parent::listData('users', ['user_type'=>'admin', 'user_verified' => '1']);
        return $dtb
            ->collection($data['result'])
            ->addColumn('action' , function ($row) {
                $id = $row['user_id'];

                return '
                <div class="texbact-center">
                
                <a class="btn btn-info" href="'.url('user/detail',$id).'"><i class="fa fa-search"></i></a>
                <a class="btn btn-danger" href="'.url('user/delete',$id).'"><i class="fa fa-bitbucket"></i></a>
                
                </div>
                ';
            })
            ->rawColumns(
                [
                    'action'
                ])
            ->make(true);

    }

    public function detail (Request $request, $id)
    {
        $post = $request->except('_token');

        $list = parent::listData('users', ['user_id' => $id], null, 'first');
        if ($list['status'] != 200) {
            return back()->withErrors(['User not found']);
        }

        if (empty($post)) {
            return view('user::detail', ['detail' => $list['result']]);
        }

        if (isset($post['tanggal_lahir'])) {
            $post['tanggal_lahir'] = date('Y-m-d', strtotime($post['tanggal_lahir']));
        }
        if (isset($post['user_pass'])) {
            $post['user_pass'] = Hash::make($post['user_pass']);
        }
        
        $update = parent::updateData($post, 'users', ['user_id' => $id]);
        return parent::confirm($update, 'Update detail user berhasil');
    }

    public function create(Create $request)
    {
        $post = $request->except('_token');
        if (empty($post)) {
            return view('user::create');
        }

        $post['user_pass']     = bcrypt($post['password']);
        $post['user_verified'] = '1';

        $insert = parent::insertData($post, 'users');
        return parent::confirm($insert, 'User berhasil ditambah');
    }

    public function delete(Request $request,$id)
    {
        $delete = parent::deleteData('users', ['user_id' => $id]);
        return parent::confirm($delete,'User berhasil didelete');
    }

}
