<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert([
            [
                'user_id' => '1',
                'name' => 'トイレットペーパー',
                'amount' => '6',
                'bought_at' => date('Y-m-d H:i:s'),
                'image_name' => '',
                'alert' => '1',
                'comment' => 'ドラッグストアで300円',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'user_id' => '1',
                'name' => 'Tシャツ',
                'amount' => '1',
                'bought_at' => date('Y-m-d H:i:s'),
                'image_name' => '1_20220125181846.jpg',
                'alert' => '0',
                'comment' => 'ユニクロで購入',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'user_id' => '2',
                'name' => 'サランラップ',
                'amount' => '1',
                'bought_at' => date('Y-m-d H:i:s'),
                'image_name' => '',
                'alert' => '1',
                'comment' => '',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ]);
    }
}
