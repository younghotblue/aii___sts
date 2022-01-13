<?php

use Illuminate\Database\Seeder;

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
            [
                'name' => 'Black Photo',
                'description' => 'コットン素材を使用したクルーネックのカットソー。',
                'image' => 'images/IMG_3680.JPG',
                'price' => '4500'
            ],
            [
                'name' => 'White Photo',
                'description' => 'コットン素材を使用したクルーネックのカットソー。',
                'image' => 'images/IMG_3681.JPG',
                'price' => '4500'
            ],
            [
                'name' => 'White Photo 2',
                'description' => 'コットン素材を使用したクルーネックのカットソー。',
                'image' => 'images/IMG_3680.JPG',
                'price' => '6800'
            ],
            [
                'name' => 'Black Photo Plain',
                'description' => 'コットン素材を使用したクルーネックのカットソー。シンプルなデザインで、様々なスタイリングに合わせやすいアイテム。',
                'image' => 'images/IMG_3681.JPG',
                'price' => '4500'
            ],
            [
                'name' => 'Black Photo 2',
                'description' => 'コットン素材を使用したクルーネックのカットソー。',
                'image' => 'images/IMG_3680.JPG',
                'price' => '4500'
            ],
            [
                'name' => 'Navy Photo',
                'description' => 'コットン素材を使用したクルーネックのカットソー。',
                'image' => 'images/IMG_3681.JPG',
                'price' => '4500'
            ],
        ]);
    }
}
