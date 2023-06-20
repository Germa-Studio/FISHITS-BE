<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
// DB
use Illuminate\Support\Facades\DB;

class ShipTypeTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('shipType')->delete();

        DB::table('shipType')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'ferry',
                'machine' => 'limited',
                'bbm' => 1.52,
                'speed' => 90.0,
                'created_at' => '2023-06-20 16:31:02',
                'updated_at' => '2023-06-20 16:32:37',
            ),
        ));


    }
}
