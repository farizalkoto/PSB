<?php

use Illuminate\Database\Seeder;

class SettinsTableSeeder extends Seeder
{
    public function run()
    {
        \DB::statement('SET FOREIGN_KEY_CHECKS=0');

        \DB::table('settings')->truncate();

        $dataSetting = [
            [
				'key'        => 'pendaftaran',
				'value'      => '2018-07-10',
				'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
				'key'        => 'tutup',
				'value'      => '2018-08-10',
				'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s'),
            ],
        ];

        foreach ($dataSetting as $key=>$val) {
            $dataSetting[$key]['id'] = $key+1;
        }

        \DB::table('settings')->delete();
        
        \DB::table('settings')->insert($dataSetting);
    }
}
