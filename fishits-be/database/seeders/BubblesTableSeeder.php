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
                'id' => 11,
                'longitude' => 113.50015,
                'latitude' => -6.37755,
                'name' => 'Bubble 1',
                'month' => 'July',
                'year' => 2023,
            ),
            1 =>
            array (
                'id' => 12,
                'longitude' => 113.64608,
                'latitude' => -6.36612,
                'name' => 'Bubble 2',
                'month' => 'July',
                'year' => 2023,
            ),
            2 =>
            array (
                'id' => 13,
                'longitude' => 113.79117,
                'latitude' => -6.36824,
                'name' => 'Bubble 3',
                'month' => 'July',
                'year' => 2023,
            ),
            3 =>
            array (
                'id' => 14,
                'longitude' => 113.93393,
                'latitude' => -6.40145,
                'name' => 'Bubble 4',
                'month' => 'July',
                'year' => 2023,
            ),
            4 =>
            array (
                'id' => 16,
                'longitude' => 113.72319,
                'latitude' => -6.50362,
                'name' => 'Bubble 5',
                'month' => 'July',
                'year' => 2023,
            ),
        ));


    }
}
