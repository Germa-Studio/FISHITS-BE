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
                'name' => 'gurita premium',
                'weight' => 1.23,
                'price' => 50000,
                'created_at' => '2023-06-19 09:22:47',
                'updated_at' => '2023-06-20 15:44:32',
                'locations_id' => 3,
            ),
            1 =>
            array (
                'id' => 2,
                'name' => 'gurami',
                'weight' => 1.76,
                'price' => 40000,
                'created_at' => '2023-06-20 14:32:38',
                'updated_at' => '2023-06-20 14:32:38',
                'locations_id' => 0,
            ),
            2 =>
            array (
                'id' => 3,
                'name' => 'gurita',
                'weight' => 1.76,
                'price' => 40000,
                'created_at' => '2023-06-20 15:43:53',
                'updated_at' => '2023-06-20 15:43:53',
                'locations_id' => 1,
            ),
            3 =>
            array (
                'id' => 4,
                'name' => 'udang',
                'weight' => 0.32,
                'price' => 35000,
                'created_at' => '2023-06-20 16:00:20',
                'updated_at' => '2023-06-20 16:00:20',
                'locations_id' => 3,
            ),
        ));


    }
}
