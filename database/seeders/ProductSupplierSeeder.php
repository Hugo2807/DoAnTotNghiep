<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('suppliers')->insert([
            'name' => 'Chợ Bình Tân',
        ]);

        DB::table('suppliers')->insert([
            'name' => 'Chợ Đầm',
        ]);

        DB::table('suppliers')->insert([
            'name' => 'Chợ Phước Hải',
        ]);

        DB::table('suppliers')->insert([
            'name' => 'Chợ Vĩnh Hải',
        ]);

        DB::table('suppliers')->insert([
            'name' => 'Chợ Xóm Mới',
        ]);
    }
}
