<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        \DB::statement('SET FOREIGN_KEY_CHECKS=0');

        \DB::table('users')->truncate();

        $dataUser = [
            [
                'user_name'      => 'admin',
                'user_pass'      => Hash::make('123456'),
                'user_type'      => 'admin',
                'user_verified'  => '1',
                'remember_token' => null,
                'created_at'     => date('Y-m-d H:i:s'),
                'updated_at'     => date('Y-m-d H:i:s'),
            ],
            [
                'user_name'      => 'user',
                'user_pass'      => Hash::make('123456'),
                'user_type'      => 'student',
                'user_verified'  => '1',
                'remember_token' => null,
                'created_at'     => date('Y-m-d H:i:s'),
                'updated_at'     => date('Y-m-d H:i:s'),
            ],
        ];

        foreach ($dataUser as $key=>$val) {
            $dataUser[$key]['user_id'] = $key+1;
        }

        \DB::table('users')->delete();
        
        \DB::table('users')->insert($dataUser);
    }
}
