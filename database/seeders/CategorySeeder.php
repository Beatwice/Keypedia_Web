<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'category_name' => 'Key Keyboard - 87%',
            'category_image' => 'images/87.jpg'
        ]);
        
        DB::table('categories')->insert([
            'category_name' => 'Key Keyboard - 60%',
            'category_image' => 'images/60.jpg' 
        ]);

        DB::table('categories')->insert([
            'category_name' => 'Key Keyboard - Wireless',
            'category_image' => 'images/wireless.jpg'
        ]);

        DB::table('categories')->insert([
            'category_name' => 'Key Keyboard - RGB',
            'category_image' => 'images/rgb.jpg'
        ]);
        
    }
}
