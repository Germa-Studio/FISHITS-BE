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
                'name' => 'Dorang 1',
                'latitude' => 6.656116667,
                'longitude' => 113.8387333,
                's' => 39.367,
                'e' => 50.324,
                'created_at' => '2023-06-20 15:35:03',
                'updated_at' => '2023-06-20 15:38:00',
            ),
            1 =>
            array (
                'id' => 2,
                'name' => 'Ikan Merah',
                'latitude' => 6.697433333,
                'longitude' => 113.6780,
                's' => 41.846,
                'e' => 40.68,
                'created_at' => '2023-06-20 15:35:41',
                'updated_at' => '2023-06-20 15:35:41',
            ),
            2 =>
            array (
                'id' => 3,
                'name' => 'MD 1',
                'latitude' => 6.520616667,
                'longitude' => 113.7680,
                's' => 31.237,
                'e' => 46.081,
                'created_at' => '2023-06-20 15:36:06',
                'updated_at' => '2023-06-20 15:36:06',
            ),
            3 =>
            array (
                'id' => 4,
                'name' => 'MD 2',
                'latitude' => 6.518750,
                'longitude' => 113.7810833,
                's' => 31.125,
                'e' => 46.865,
                'created_at' => '2023-06-20 15:36:27',
                'updated_at' => '2023-06-20 15:36:27',
            ),
            4 =>
            array (
                'id' => 5,
                'name' => 'Tos Pote',
                'latitude' => 6.670616667,
                'longitude' => 113.7592,
                's' => 40.237,
                'e' => 45.552,
                'created_at' => '2023-06-20 15:36:27',
                'updated_at' => '2023-06-20 15:36:27',
            ),
            5 =>
            array (
                'id' => 6,
                'name' => 'Zam 1',
                'latitude' => 6.695233333,
                'longitude' => 113.9754833,
                's' => 41.714,
                'e' => 58.529,
                'created_at' => '2023-06-20 15:36:27',
                'updated_at' => '2023-06-20 15:36:27',
            ),
            6 =>
            array (
                'id' => 7,
                'name' => 'Tompas 1',
                'latitude' => 6.610833333,
                'longitude' => 113.8947333,
                's' => 36.650,
                'e' => 53.684,
                'created_at' => '2023-06-20 15:36:27',
                'updated_at' => '2023-06-20 15:36:27',
            ),
            7 =>
            array (
                'id' => 8,
                'name' => 'Tos 2',
                'latitude' => 6.658350,
                'longitude' => 113.7708667,
                's' => 39.501,
                'e' => 46.252,
                'created_at' => '2023-06-20 15:36:27',
                'updated_at' => '2023-06-20 15:36:27',
            ),
            8 =>
            array (
                'id' => 9,
                'name' => 'TLI',
                'latitude' => 6.694350,
                'longitude' => 113.97535,
                's' => 41.661,
                'e' => 58.521,
                'created_at' => '2023-06-20 15:36:27',
                'updated_at' => '2023-06-20 15:36:27',
            ),
            9 =>
            array (
                'id' => 10,
                'name' => 'TAAA 5',
                'latitude' => 6.593900,
                'longitude' => 113.9062,
                's' => 35.634,
                'e' => 54.371,
                'created_at' => '2023-06-20 15:36:27',
                'updated_at' => '2023-06-20 15:36:27',
            ),
            10 =>
            array (
                'id' => 11,
                'name' => 'SMBR 1',
                'latitude' => 6.608100,
                'longitude' => 113.85015,
                's' => 36.486,
                'e' => 51.009,
                'created_at' => '2023-06-20 15:36:27',
                'updated_at' => '2023-06-20 15:36:27',
            ),
            11 =>
            array (
                'id' => 12,
                'name' => 'SMBR 3',
                'latitude' => 6.569750,
                'longitude' => 113.84155,
                's' => 34.185,
                'e' => 50.493,
                'created_at' => '2023-06-20 15:36:27',
                'updated_at' => '2023-06-20 15:36:27',
            ),
            12 =>
            array (
                'id' => 13,
                'name' => 'TADEZ 4',
                'latitude' => 6.384633,
                'longitude' => 113.8952167,
                's' => 23.078,
                'e' => 53.713,
                'created_at' => '2023-06-20 15:36:27',
                'updated_at' => '2023-06-20 15:36:27',
            ),
            13 =>
            array (
                'id' => 14,
                'name' => 'TADEZ 5',
                'latitude' => 6.521033,
                'longitude' => 113.87125,
                's' => 31.262,
                'e' => 52.275,
                'created_at' => '2023-06-20 15:36:27',
                'updated_at' => '2023-06-20 15:36:27',
            ),
            14 =>
            array (
                'id' => 15,
                'name' => 'KETENG',
                'latitude' => 6.588833,
                'longitude' => 113.6960667,
                's' => 35.330,
                'e' => 41.764,
                'created_at' => '2023-06-20 15:36:27',
                'updated_at' => '2023-06-20 15:36:27',
            ),
        ));


    }
}
