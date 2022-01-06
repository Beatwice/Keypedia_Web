<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            'category_id' => 1,
            'keyboard_name' => 'Keyboard A',
            'keyboard_price' => 20,
            'description' => 'Ini keyboard..',
            'keyboard_image' => 'keyboard-images/dNpgwdzn2Db9CVAIgNKKPgesAPPt7tJwZx7Yv7U5.jpg'
        ]);
        DB::table('products')->insert([
            'category_id' => 1,
            'keyboard_name' => 'Keyboard B',
            'keyboard_price' => 21,
            'description' => 'Ini keyboard..',
            'keyboard_image' => 'keyboard-images/dNpgwdzn2Db9CVAIgNKKPgesAPPt7tJwZx7Yv7U5.jpg'
        ]);
        DB::table('products')->insert([
            'category_id' => 1,
            'keyboard_name' => 'Keyboard C',
            'keyboard_price' => 22,
            'description' => 'Ini keyboard..',
            'keyboard_image' => 'keyboard-images/dNpgwdzn2Db9CVAIgNKKPgesAPPt7tJwZx7Yv7U5.jpg'
        ]);
        DB::table('products')->insert([
            'category_id' => 1,
            'keyboard_name' => 'Keyboard D',
            'keyboard_price' => 23,
            'description' => 'Ini keyboard..',
            'keyboard_image' => 'keyboard-images/dNpgwdzn2Db9CVAIgNKKPgesAPPt7tJwZx7Yv7U5.jpg'
        ]);
        DB::table('products')->insert([
            'category_id' => 1,
            'keyboard_name' => 'Keyboard E',
            'keyboard_price' => 24,
            'description' => 'Ini keyboard..',
            'keyboard_image' => 'keyboard-images/dNpgwdzn2Db9CVAIgNKKPgesAPPt7tJwZx7Yv7U5.jpg'
        ]);
        DB::table('products')->insert([
            'category_id' => 1,
            'keyboard_name' => 'Keyboard F',
            'keyboard_price' => 25,
            'description' => 'Ini keyboard..',
            'keyboard_image' => 'keyboard-images/dNpgwdzn2Db9CVAIgNKKPgesAPPt7tJwZx7Yv7U5.jpg'
        ]);
        DB::table('products')->insert([
            'category_id' => 1,
            'keyboard_name' => 'Keyboard G',
            'keyboard_price' => 26,
            'description' => 'Ini keyboard..',
            'keyboard_image' => 'keyboard-images/dNpgwdzn2Db9CVAIgNKKPgesAPPt7tJwZx7Yv7U5.jpg'
        ]);
        DB::table('products')->insert([
            'category_id' => 1,
            'keyboard_name' => 'Keyboard H',
            'keyboard_price' => 27,
            'description' => 'Ini keyboard..',
            'keyboard_image' => 'keyboard-images/dNpgwdzn2Db9CVAIgNKKPgesAPPt7tJwZx7Yv7U5.jpg'
        ]);
        DB::table('products')->insert([
            'category_id' => 1,
            'keyboard_name' => 'Keyboard I',
            'keyboard_price' => 28,
            'description' => 'Ini keyboard..',
            'keyboard_image' => 'keyboard-images/dNpgwdzn2Db9CVAIgNKKPgesAPPt7tJwZx7Yv7U5.jpg'
        ]);
        DB::table('products')->insert([
            'category_id' => 1,
            'keyboard_name' => 'Keyboard J',
            'keyboard_price' => 29,
            'description' => 'Ini keyboard..',
            'keyboard_image' => 'keyboard-images/dNpgwdzn2Db9CVAIgNKKPgesAPPt7tJwZx7Yv7U5.jpg'
        ]);
        DB::table('products')->insert([
            'category_id' => 2,
            'keyboard_name' => 'Keyboard AA',
            'keyboard_price' => 200,
            'description' => 'Ini keyboard..',
            'keyboard_image' => 'keyboard-images/dNpgwdzn2Db9CVAIgNKKPgesAPPt7tJwZx7Yv7U5.jpg'
        ]);
        DB::table('products')->insert([
            'category_id' => 2,
            'keyboard_name' => 'Keyboard BB',
            'keyboard_price' => 29,
            'description' => 'Ini keyboard..',
            'keyboard_image' => 'keyboard-images/dNpgwdzn2Db9CVAIgNKKPgesAPPt7tJwZx7Yv7U5.jpg'
        ]);
        DB::table('products')->insert([
            'category_id' => 3,
            'keyboard_name' => 'Keyboard BBBB',
            'keyboard_price' => 20,
            'description' => 'Ini keyboard..',
            'keyboard_image' => 'keyboard-images/dNpgwdzn2Db9CVAIgNKKPgesAPPt7tJwZx7Yv7U5.jpg'
        ]);
        DB::table('products')->insert([
            'category_id' => 3,
            'keyboard_name' => 'Keyboard BBB',
            'keyboard_price' => 10,
            'description' => 'Ini keyboard..',
            'keyboard_image' => 'keyboard-images/dNpgwdzn2Db9CVAIgNKKPgesAPPt7tJwZx7Yv7U5.jpg'
        ]);
        DB::table('products')->insert([
            'category_id' => 4,
            'keyboard_name' => 'Keyboard 41',
            'keyboard_price' => 35,
            'description' => 'Ini keyboard..',
            'keyboard_image' => 'keyboard-images/dNpgwdzn2Db9CVAIgNKKPgesAPPt7tJwZx7Yv7U5.jpg'
        ]);
        DB::table('products')->insert([
            'category_id' => 4,
            'keyboard_name' => 'Keyboard 4',
            'keyboard_price' => 30,
            'description' => 'Ini keyboard..',
            'keyboard_image' => 'keyboard-images'
        ]);
    }
}
