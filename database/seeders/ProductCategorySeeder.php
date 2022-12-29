<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_categories')->insert([
            'name' => 'Bưởi',
        ]);

        DB::table('product_categories')->insert([
            'name' => 'Cam',
        ]);

        DB::table('product_categories')->insert([
            'name' => 'Chôm chôm',
        ]);

        DB::table('product_categories')->insert([
            'name' => 'Lê',
        ]);

        DB::table('product_categories')->insert([
            'name' => 'Mít',
        ]);

        DB::table('product_categories')->insert([
            'name' => 'Táo',
        ]);

        DB::table('product_categories')->insert([
            'name' => 'Xoài',
        ]);
    }
}
