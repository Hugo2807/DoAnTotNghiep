<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MenuNoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $today = Carbon::now();

        DB::table('menunotes')->insert([
            'name' => 'Home',
            'parent_id' => '0',
            'slug' => 'home',
            'created_at' => $today,
            'updated_at' => $today,
            'menu_id' => '1',
        ]);
        DB::table('menunotes')->insert([
            'name' => 'Shop',
            'parent_id' => '0',
            'slug' => 'shop',
            'created_at' => $today,
            'updated_at' => $today,
            'menu_id' => '1',
        ]);
        DB::table('menunotes')->insert([
            'name' => 'About',
            'parent_id' => '0',
            'slug' => 'about',
            'created_at' => $today,
            'updated_at' => $today,
            'menu_id' => '1',
        ]);
        DB::table('menunotes')->insert([
            'name' => 'Blog',
            'parent_id' => '0',
            'slug' => 'blog.blogIndex',
            'created_at' => $today,
            'updated_at' => $today,
            'menu_id' => '1',
        ]);
        DB::table('menunotes')->insert([
            'name' => 'Contact',
            'parent_id' => '0',
            'slug' => 'contact',
            'created_at' => $today,
            'updated_at' => $today,
            'menu_id' => '1',
        ]);
        DB::table('menunotes')->insert([
            'name' => 'Wishlist',
            'parent_id' => '2',
            'slug' => 'wishlist',
            'created_at' => $today,
            'updated_at' => $today,
            'menu_id' => '1',
        ]);
        DB::table('menunotes')->insert([
            'name' => 'Single product',
            'parent_id' => '2',
            'slug' => 'single-product',
            'created_at' => $today,
            'updated_at' => $today,
            'menu_id' => '1',
        ]);
        DB::table('menunotes')->insert([
            'name' => 'Cart',
            'parent_id' => '2',
            'slug' => 'cart',
            'created_at' => $today,
            'updated_at' => $today,
            'menu_id' => '1',
        ]);
        DB::table('menunotes')->insert([
            'name' => 'Checkout',
            'parent_id' => '2',
            'slug' => 'checkout',
            'created_at' => $today,
            'updated_at' => $today,
            'menu_id' => '1',
        ]);
    }
}
