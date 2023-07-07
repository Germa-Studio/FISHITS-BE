<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
// DB
use Illuminate\Support\Facades\DB;

class BubblesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('bubbles')->delete();

        DB::table('bubbles')->insert(array (
            0 =>
            array (
                'id' => 2,
                'longitude' => '114',
                'latitude' => '6',
            ),
            1 =>
            array (
                'id' => 3,
                'longitude' => '114',
                'latitude' => '6',
            ),
            2 =>
            array (
                'id' => 4,
                'longitude' => '114',
                'latitude' => '6',
            ),
            3 =>
            array (
                'id' => 5,
                'longitude' => '114',
                'latitude' => '6',
            ),
            4 =>
            array (
                'id' => 6,
                'longitude' => '114',
                'latitude' => '7',
            ),
        ));


    }
}
