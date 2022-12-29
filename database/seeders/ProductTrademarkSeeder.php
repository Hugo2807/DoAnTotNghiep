<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductTrademarkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('trademarks')->insert([
            'name' => 'Việt Nam',
        ]);

        DB::table('trademarks')->insert([
            'name' => 'Nam Phi',
        ]);
        
        DB::table('trademarks')->insert([
            'name' => 'New Zealand',
        ]);

        DB::table('trademarks')->insert([
            'name' => 'Úc',
        ]);

        DB::table('trademarks')->insert([
            'name' => 'Thái Lan',
        ]);

        DB::table('trademarks')->insert([
            'name' => 'Hàn Quốc',
        ]);
    }
}
