<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
// DB
use Illuminate\Support\Facades\DB;

class LocationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('locations')->delete();

        DB::table('locations')->insert(array (
            0 =>
            array (
                'id' => 1,
                'latitude' => 1.7890000000000001,
                'longitude' => 1.7890000000000001,
                's' => 1.7890000000000001,
                'e' => 1.7890000000000001,
                'created_at' => '2023-06-20 15:35:03',
                'updated_at' => '2023-06-20 15:38:00',
            ),
            1 =>
            array (
                'id' => 2,
                'latitude' => 3.11,
                'longitude' => 4.11,
                's' => 5.11,
                'e' => 6.11,
                'created_at' => '2023-06-20 15:35:41',
                'updated_at' => '2023-06-20 15:35:41',
            ),
            2 =>
            array (
                'id' => 3,
                'latitude' => 5.321,
                'longitude' => 6.321,
                's' => 7.321,
                'e' => 8.321,
                'created_at' => '2023-06-20 15:36:06',
                'updated_at' => '2023-06-20 15:36:06',
            ),
            3 =>
            array (
                'id' => 4,
                'latitude' => 11.213,
                'longitude' => 11.213,
                's' => 11.213,
                'e' => 11.213,
                'created_at' => '2023-06-20 15:36:27',
                'updated_at' => '2023-06-20 15:36:27',
            ),
        ));


    }
}
