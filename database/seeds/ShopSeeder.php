<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shops')->insert([
            [
            'id' => 1,
            'shop_name' => '東京食パン',
            'area_id' => 1,
            ],
            [
            'id' => 2,
            'shop_name' => '大阪カレー版',
            'area_id' => 2,
            ],
            [
            'id' => 3,
            'shop_name' => '福岡メロンパン',
            'area_id' => 1,
            ],
            [
            'id' => 4,
            'shop_name' => 'ちょこちょこメロンパン',
            'area_id' => 3,
            ],
        ]);
    }
}
