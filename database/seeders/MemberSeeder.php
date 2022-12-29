<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('members')->insert([
            'hoten' => 'Trần Văn A',
            'gioitinh' => '1',
            'ngaysinh' => '2001-07-28',
            'sdt' => '0704460748',
            'diachi' => '65 Võ Trứ',
            'image_path' => '/storage/imguser/imgdefault.png',
            'image_name' => 'imgdefault.png',
            'email' => 'a.tv@gmail.com',
            'password' => Hash::make('123'),
        ]);

        DB::table('members')->insert([
            'hoten' => 'Nguyễn Thị B',
            'gioitinh' => '0',
            'ngaysinh' => '2001-03-08',
            'sdt' => '0708470644',
            'diachi' => '05 Nguyễn Hữu Huân',
            'image_path' => '/storage/imguser/imgdefault.png',
            'image_name' => 'imgdefault.png',
            'email' => 'b.nt@gmail.com',
            'password' => Hash::make('123'),
        ]);
    }
}
