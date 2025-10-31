<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'user_id' => 1,
            'image' => '/images/Armani+Mens+Clock.jpg',
            'condition' => '良好',
            'name' => '腕時計',
            'brand' => 'Rolax',
            'description' => 'スタイリッシュなデザインのメンズ腕時計',
            'price' => 15000,
        ];
        DB::table('items')->insert($param);

        $param = [
            'user_id' => 2,
            'image' => '/images/HDD+Hard+Disk.jpg',
            'condition' =>'目立った傷や汚れなし',
            'name' => 'HDD',
            'brand' => '西芝',
            'description' => '高速で信頼性の高いハードディスク',
            'price' => 5000,
        ];
        DB::table('items')->insert($param);

        $param = [
            'user_id' => 3,
            'image' => '/images/iLoveIMG+d.jpg',
            'condition' => 'やや傷や汚れあり',
            'name' => '玉ねぎ３束',
            'brand' => 'なし',
            'description' => '新鮮な玉ねぎ３束のセット',
            'price' => 300,
        ];
        Db::table('items')->insert($param);

        $param = [
            'user_id' => 4,
            'image' => '/images/Leather+Shoes+Product+Photo.jpg',
            'condition' => '状態が悪い',
            'name' => '革靴',
            'brand' => 'なし',
            'description' => 'クラシックなデザインの革靴',
            'price' => 4000,
        ];
        DB::table('items')->insert($param);

        $param = [
            'user_id' => 5,
            'image' => '/images/Living+Room+Laptop.jpg',
            'condition' => '良好',
            'name' => 'ノートPC',
            'brand' => 'なし',
            'description' => '高性能なノートパソコン',
            'price' => 45000,
        ];
        DB::table('items')->insert($param);

        $param = [
            'user_id' => 6,
            'image' => '/images/Music+Mic+4632231.jpg',
            'condition' => '目立った傷や汚れなし',
            'name' => 'マイク',
            'brand' => 'なし',
            'description' => '高品質のレコーディング用マイク',
            'price' => 8000,
        ];
        DB::table('items')->insert($param);

        $param = [
            'user_id' => 7,
            'image' => '/images/Purse+fashion+pocket.jpg',
            'condition' => 'やや傷や汚れあり',
            'name' => 'ショルダーバッグ',
            'brand' => 'なし',
            'description' => 'おしゃれなショルダーバッグ',
            'price' => 3500,
        ];
        DB::table('items')->insert($param);

        $param = [
            'user_id' => 8,
            'image' => '/images/Tumbler+souvenir.jpg',
            'condition' => '状態が悪い',
            'name' => 'タンブラー',
            'brand' => 'なし',
            'description' => '使いやすいタンブラー',
            'price' => 500,
        ];
        DB::table('items')->insert($param);

        $param = [
            'user_id' => 9,
            'image' => '/images/Waitress+with+Coffee+Grinder.jpg',
            'condition' => '良好',
            'name' => 'コーヒーミル',
            'brand' => 'Starbacks',
            'description' => '手動のコーヒーミル',
            'price' => 4000,
        ];
        DB::table('items')->insert($param);

        $param = [
            'user_id' => 10,
            'image' => '/images/外出メイクアップセット.jpg',
            'condition' => '目立った傷や汚れなし',
            'name' => 'メイクセット',
            'brand' => 'なし',
            'description' => '便利なメイクアップセット',
            'price' => '2500',
        ];
        DB::table('items')->insert($param);
        }
}
