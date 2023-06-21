<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
// DB
use Illuminate\Support\Facades\DB;

class RegionpicTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('regionpic')->delete();

        DB::table('regionpic')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'vania',
                'file' => '1687360401.jpg',
                'month' => 'surabaya',
                'created_at' => '2023-06-21 15:13:21',
                'updated_at' => '2023-06-21 15:13:21',
            ),
        ));


    }
}
