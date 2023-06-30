<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
// DB
use Illuminate\Support\Facades\DB;

class PendaratansTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('pendaratans')->delete();

        DB::table('pendaratans')->insert(array (
            0 =>
            array (
                'id' => 2,
                'berat' => 505,
                'harga' => 18000,
                'nilaiProduksi' => 9090000,
                'monthYear' => '202301',
                'fish_id' => 1,
            ),
            1 =>
            array (
                'id' => 3,
                'berat' => 715,
                'harga' => 19000,
                'nilaiProduksi' => 13585000,
                'monthYear' => '202302',
                'fish_id' => 1,
            ),
            2 =>
            array (
                'id' => 4,
                'berat' => 1401,
                'harga' => 19000,
                'nilaiProduksi' => 26619000,
                'monthYear' => '202303',
                'fish_id' => 1,
            ),
            3 =>
            array (
                'id' => 5,
                'berat' => 1565,
                'harga' => 18000,
                'nilaiProduksi' => 28170000,
                'monthYear' => '202304',
                'fish_id' => 1,
            ),
            4 =>
            array (
                'id' => 6,
                'berat' => 692,
                'harga' => 19000,
                'nilaiProduksi' => 13148000,
                'monthYear' => '202305',
                'fish_id' => 1,
            ),
            5 =>
            array (
                'id' => 7,
                'berat' => 665,
                'harga' => 19000,
                'nilaiProduksi' => 12635000,
                'monthYear' => '202306',
                'fish_id' => 1,
            ),
            6 =>
            array (
                'id' => 8,
                'berat' => 120,
                'harga' => 19000,
                'nilaiProduksi' => 2280000,
                'monthYear' => '202307',
                'fish_id' => 1,
            ),
            7 =>
            array (
                'id' => 9,
                'berat' => 802,
                'harga' => 19000,
                'nilaiProduksi' => 15238000,
                'monthYear' => '202308',
                'fish_id' => 1,
            ),
            8 =>
            array (
                'id' => 10,
                'berat' => 1065,
                'harga' => 19000,
                'nilaiProduksi' => 20235000,
                'monthYear' => '202309',
                'fish_id' => 1,
            ),
            9 =>
            array (
                'id' => 11,
                'berat' => 706,
                'harga' => 19000,
                'nilaiProduksi' => 13414000,
                'monthYear' => '202310',
                'fish_id' => 1,
            ),
            10 =>
            array (
                'id' => 13,
                'berat' => 747,
                'harga' => 19000,
                'nilaiProduksi' => 14193000,
                'monthYear' => '202311',
                'fish_id' => 1,
            ),
            11 =>
            array (
                'id' => 14,
                'berat' => 1266,
                'harga' => 19000,
                'nilaiProduksi' => 24054000,
                'monthYear' => '202312',
                'fish_id' => 1,
            ),
            12 =>
            array (
                'id' => 15,
                'berat' => 24713,
                'harga' => 19000,
                'nilaiProduksi' => 469547000,
                'monthYear' => '202301',
                'fish_id' => 2,
            ),
            13 =>
            array (
                'id' => 16,
                'berat' => 38038,
                'harga' => 19000,
                'nilaiProduksi' => 722722000,
                'monthYear' => '202302',
                'fish_id' => 2,
            ),
            14 =>
            array (
                'id' => 17,
                'berat' => 27482,
                'harga' => 19000,
                'nilaiProduksi' => 522158000,
                'monthYear' => '202303',
                'fish_id' => 2,
            ),
            15 =>
            array (
                'id' => 18,
                'berat' => 17875,
                'harga' => 19000,
                'nilaiProduksi' => 339625000,
                'monthYear' => '202304',
                'fish_id' => 2,
            ),
            16 =>
            array (
                'id' => 19,
                'berat' => 3653,
                'harga' => 21000,
                'nilaiProduksi' => 76713000,
                'monthYear' => '202305',
                'fish_id' => 2,
            ),
            17 =>
            array (
                'id' => 20,
                'berat' => 4212,
                'harga' => 21000,
                'nilaiProduksi' => 88452000,
                'monthYear' => '202306',
                'fish_id' => 2,
            ),
            18 =>
            array (
                'id' => 21,
                'berat' => 51922,
                'harga' => 24000,
                'nilaiProduksi' => 1246128000,
                'monthYear' => '202307',
                'fish_id' => 2,
            ),
            19 =>
            array (
                'id' => 22,
                'berat' => 638586,
                'harga' => 16000,
                'nilaiProduksi' => 10217376000,
                'monthYear' => '202308',
                'fish_id' => 2,
            ),
            20 =>
            array (
                'id' => 23,
                'berat' => 1007149,
                'harga' => 12000,
                'nilaiProduksi' => 12085788000,
                'monthYear' => '202309',
                'fish_id' => 2,
            ),
            21 =>
            array (
                'id' => 24,
                'berat' => 379624,
                'harga' => 13000,
                'nilaiProduksi' => 4935112000,
                'monthYear' => '202310',
                'fish_id' => 2,
            ),
            22 =>
            array (
                'id' => 25,
                'berat' => 116831,
                'harga' => 14000,
                'nilaiProduksi' => 1635634000,
                'monthYear' => '202311',
                'fish_id' => 2,
            ),
            23 =>
            array (
                'id' => 26,
                'berat' => 105664,
                'harga' => 18000,
                'nilaiProduksi' => 1901952000,
                'monthYear' => '202312',
                'fish_id' => 2,
            ),
            24 =>
            array (
                'id' => 27,
                'berat' => 1339,
                'harga' => 5000,
                'nilaiProduksi' => 6695000,
                'monthYear' => '202301',
                'fish_id' => 3,
            ),
            25 =>
            array (
                'id' => 28,
                'berat' => 4043,
                'harga' => 5000,
                'nilaiProduksi' => 20215000,
                'monthYear' => '202302',
                'fish_id' => 3,
            ),
            26 =>
            array (
                'id' => 29,
                'berat' => 20787,
                'harga' => 4000,
                'nilaiProduksi' => 83148000,
                'monthYear' => '202303',
                'fish_id' => 3,
            ),
            27 =>
            array (
                'id' => 30,
                'berat' => 54106,
                'harga' => 4000,
                'nilaiProduksi' => 216424000,
                'monthYear' => '202304',
                'fish_id' => 3,
            ),
            28 =>
            array (
                'id' => 31,
                'berat' => 29627,
                'harga' => 6000,
                'nilaiProduksi' => 177762000,
                'monthYear' => '202305',
                'fish_id' => 3,
            ),
            29 =>
            array (
                'id' => 32,
                'berat' => 11778,
                'harga' => 7000,
                'nilaiProduksi' => 82446000,
                'monthYear' => '202306',
                'fish_id' => 3,
            ),
            30 =>
            array (
                'id' => 33,
                'berat' => 1755,
                'harga' => 7000,
                'nilaiProduksi' => 12285000,
                'monthYear' => '202307',
                'fish_id' => 3,
            ),
            31 =>
            array (
                'id' => 34,
                'berat' => 8749,
                'harga' => 6000,
                'nilaiProduksi' => 52494000,
                'monthYear' => '202308',
                'fish_id' => 3,
            ),
            32 =>
            array (
                'id' => 35,
                'berat' => 1157,
                'harga' => 6000,
                'nilaiProduksi' => 6942000,
                'monthYear' => '202309',
                'fish_id' => 3,
            ),
            33 =>
            array (
                'id' => 36,
                'berat' => 12740,
                'harga' => 6000,
                'nilaiProduksi' => 76440000,
                'monthYear' => '202310',
                'fish_id' => 3,
            ),
            34 =>
            array (
                'id' => 37,
                'berat' => 15119,
                'harga' => 5000,
                'nilaiProduksi' => 75595000,
                'monthYear' => '202311',
                'fish_id' => 3,
            ),
            35 =>
            array (
                'id' => 38,
                'berat' => 11778,
                'harga' => 6000,
                'nilaiProduksi' => 70668000,
                'monthYear' => '202312',
                'fish_id' => 3,
            ),
        ));


    }
}
