<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
// DB
use Illuminate\Support\Facades\DB;

class FishTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('fish')->delete();

        DB::table('fish')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'Manyung',
                // 'weight' => 1.23,
                // 'price' => 50000,
                // 'created_at' => '2023-06-19 09:22:47',
                // 'updated_at' => '2023-06-20 15:44:32',
                // 'locations_id' => 3,
            ),
            1 =>
            array (
                'id' => 2,
                'name' => 'Layang',
                // 'weight' => 1.76,
                // 'price' => 40000,
                // 'created_at' => '2023-06-20 14:32:38',
                // 'updated_at' => '2023-06-20 14:32:38',
                // 'locations_id' => 1,
            ),
            2 =>
            array (
                'id' => 3,
                'name' => 'Tembang',
                // 'weight' => 1.76,
                // 'price' => 40000,
                // 'created_at' => '2023-06-20 15:43:53',
                // 'updated_at' => '2023-06-20 15:43:53',
                // 'locations_id' => 1,
            ),
            3 =>
            array (
                'id' => 4,
                'name' => 'Tongkol',
                // 'weight' => 0.32,
                // 'price' => 35000,
                // 'created_at' => '2023-06-20 16:00:20',
                // 'updated_at' => '2023-06-20 16:00:20',
                // 'locations_id' => 3,
            ),
            4 =>
            array (
                'id' => 5,
                'name' => 'Tengiri',
            ),
            5 =>
            array (
                'id' => 6,
                'name' => 'Kembung',
            ),
            6 =>
            array (
                'id' => 7,
                'name' => 'Bentong',
            ),
            7 =>
            array (
                'id' => 8,
                'name' => 'Sunglir',
            ),
            8 =>
            array (
                'id' => 9,
                'name' => 'Layur',
            ),
            9 =>
            array (
                'id' => 10,
                'name' => 'Selar Kuning',
            ),
            10 =>
            array (
                'id' => 11,
                'name' => 'Semar',
            ),
            11 =>
            array (
                'id' => 12,
                'name' => 'Kuwe',
            ),
            12 =>
            array (
                'id' => 13,
                'name' => 'Tatengkek',
            ),
            13 =>
            array (
                'id' => 14,
                'name' => 'Alu-Alu',
            ),
            14 =>
            array (
                'id' => 15,
                'name' => 'Remang',
            ),
            15 =>
            array (
                'id' => 16,
                'name' => 'Lemadang',
            ),
            16 =>
            array (
                'id' => 17,
                'name' => 'Talang-talang',
            ),
            17 =>
            array (
                'id' => 18,
                'name' => 'Golok-Golok',
            ),
            18 =>
            array (
                'id' => 19,
                'name' => 'nomei',
            ),
        ));


    }
}
