<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductUnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('units')->insert([
            'type' => 'Kg',
        ]);

        DB::table('units')->insert([
            'type' => 'Trái',
        ]);

        DB::table('units')->insert([
            'type' => 'Hộp',
        ]);

        DB::table('units')->insert([
            'type' => 'Giỏ',
        ]);
    }
}
