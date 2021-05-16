<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class RouteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('routes')->insert([
            [
            'id' => 1,
            'name' => '山手線',
            'sort_no' => 1,
            ],
            [
            'id' => 2,
            'name' => '埼京線',
            'sort_no' => 2,
            ],
            [
            'id' => 3,
            'name' => '京浜東北線',
            'sort_no' => 3,
            ],
            [
            'id' => 4,
            'name' => '湘南新宿ライン',
            'sort_no' => 4,
            ],
        ]);
    }
}
