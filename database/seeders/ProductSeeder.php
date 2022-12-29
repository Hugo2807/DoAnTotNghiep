<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'Bưởi da xanh',
            'image_path' => '/storage/products/buoidaxanh.jpg',
            'image_name' => 'buoidaxanh.jpg',
            'amount' => '100',
            'price' => '45000',
            'description' => 'Ngon',
            'status' => '1',
            'id_unit' => '1',
            'id_trademark' => '1',
            'id_cate' => '1',
            'id_suppli' => '1',
        ]);

        DB::table('products')->insert([
            'name' => 'Bưởi năm roi',
            'image_path' => '/storage/products/buoinamroi.jpg',
            'image_name' => 'buoinamroi.jpg',
            'amount' => '0',
            'price' => '40000',
            'description' => 'Ngon',
            'status' => '0',
            'id_unit' => '1',
            'id_trademark' => '1',
            'id_cate' => '1',
            'id_suppli' => '2',
        ]);

        DB::table('products')->insert([
            'name' => 'Cam Sành',
            'image_path' => '/storage/products/camsanh.jpg',
            'image_name' => 'camsanh.jpg',
            'amount' => '50',
            'price' => '25000',
            'description' => 'Ngon',
            'status' => '1',
            'id_unit' => '1',
            'id_trademark' => '1',
            'id_cate' => '2',
            'id_suppli' => '3',
        ]);

        DB::table('products')->insert([
            'name' => 'Cam Xoàn',
            'image_path' => '/storage/products/camxoan.jpg',
            'image_name' => 'camxoan.jpg',
            'amount' => '50',
            'price' => '35000',
            'description' => 'Ngon',
            'status' => '1',
            'id_unit' => '1',
            'id_trademark' => '1',
            'id_cate' => '2',
            'id_suppli' => '4',
        ]);

        DB::table('products')->insert([
            'name' => 'Chôm chôm Thái',
            'image_path' => '/storage/products/chomchomthai.jpg',
            'image_name' => 'chomchomthai.jpg',
            'amount' => '0',
            'price' => '30000',
            'description' => 'Ngon',
            'status' => '0',
            'id_unit' => '1',
            'id_trademark' => '1',
            'id_cate' => '3',
            'id_suppli' => '5',
        ]);

        DB::table('products')->insert([
            'name' => 'Chôm chôm nhãn',
            'image_path' => '/storage/products/chomchomnhan.jpg',
            'image_name' => 'chomchomnhan.jpg',
            'amount' => '50',
            'price' => '30000',
            'description' => 'Ngon',
            'status' => '1',
            'id_unit' => '1',
            'id_trademark' => '1',
            'id_cate' => '3',
            'id_suppli' => '1',
        ]);

        DB::table('products')->insert([
            'name' => 'Lê đường',
            'image_path' => '/storage/products/leduong.jpg',
            'image_name' => 'leduong.jpg',
            'amount' => '0',
            'price' => '30000',
            'description' => 'Ngon',
            'status' => '0',
            'id_unit' => '1',
            'id_trademark' => '1',
            'id_cate' => '4',
            'id_suppli' => '2',
        ]);

        DB::table('products')->insert([
            'name' => 'Lê Nam Phi',
            'image_path' => '/storage/products/lenamphi.jpg',
            'image_name' => 'lenamphi.jpg',
            'amount' => '50',
            'price' => '30000',
            'description' => 'Ngon',
            'status' => '1',
            'id_unit' => '1',
            'id_trademark' => '2',
            'id_cate' => '4',
            'id_suppli' => '3',
        ]);

        DB::table('products')->insert([
            'name' => 'Mít Thái',
            'image_path' => '/storage/products/mitthai.jpg',
            'image_name' => 'mitthai.jpg',
            'amount' => '20',
            'price' => '30000',
            'description' => 'Ngon',
            'status' => '1',
            'id_unit' => '3',
            'id_trademark' => '5',
            'id_cate' => '5',
            'id_suppli' => '4',
        ]);

        DB::table('products')->insert([
            'name' => 'Táo Hàn Quốc',
            'image_path' => '/storage/products/taohq.jpg',
            'image_name' => 'taohq.jpg',
            'amount' => '50',
            'price' => '90000',
            'description' => 'Ngon',
            'status' => '1',
            'id_unit' => '1',
            'id_trademark' => '6',
            'id_cate' => '6',
            'id_suppli' => '5',
        ]);

        DB::table('products')->insert([
            'name' => 'Táo New Zealand',
            'image_path' => '/storage/products/taonz.jpg',
            'image_name' => 'taonz.jpg',
            'amount' => '0',
            'price' => '100000',
            'description' => 'Ngon',
            'status' => '0',
            'id_unit' => '1',
            'id_trademark' => '3',
            'id_cate' => '6',
            'id_suppli' => '1',
        ]);

        DB::table('products')->insert([
            'name' => 'Xoài cát hoài lộc',
            'image_path' => '/storage/products/xoaichl.jpg',
            'image_name' => 'xoaichl.jpg',
            'amount' => '30',
            'price' => '45000',
            'description' => 'Ngon',
            'status' => '1',
            'id_unit' => '1',
            'id_trademark' => '1',
            'id_cate' => '6',
            'id_suppli' => '2',
        ]);

        DB::table('products')->insert([
            'name' => 'Xoài Úc',
            'image_path' => '/storage/products/xoaiuc.jpg',
            'image_name' => 'xoaiuc.jpg',
            'amount' => '50',
            'price' => '25000',
            'description' => 'Ngon',
            'status' => '1',
            'id_unit' => '1',
            'id_trademark' => '4',
            'id_cate' => '7',
            'id_suppli' => '3',
        ]);
    }
}
