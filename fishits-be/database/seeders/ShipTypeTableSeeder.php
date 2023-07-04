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
                'name' => 'Kapal Ikan',
                'machine' => 'Mitsubishi Ps 135 4 Silinder',
                'bbm' => 270/70.376,
                'speed' => 22.224,
                'created_at' => '2023-06-20 16:31:02',
                'updated_at' => '2023-06-20 16:32:37',
            ),
        ));


    }
}
