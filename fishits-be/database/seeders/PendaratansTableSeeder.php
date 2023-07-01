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
            36 =>
            array (
                'id' => 39,
                'berat' => 3994,
                'harga' => 20000,
                'nilaiProduksi' => 79880000,
                'monthYear' => '202301',
                'fish_id' => 4,
            ),
            37 =>
            array (
                'id' => 40,
                'berat' => 0,
                'harga' => 0,
                'nilaiProduksi' => 0,
                'monthYear' => '202302',
                'fish_id' => 4,
            ),
            38 =>
            array (
                'id' => 41,
                'berat' => 10774,
                'harga' => 19000,
                'nilaiProduksi' => 204706000,
                'monthYear' => '202303',
                'fish_id' => 4,
            ),
            39 =>
            array (
                'id' => 42,
                'berat' => 18242,
                'harga' => 20000,
                'nilaiProduksi' => 364840000,
                'monthYear' => '202304',
                'fish_id' => 4,
            ),
            40 =>
            array (
                'id' => 43,
                'berat' => 3608,
                'harga' => 21000,
                'nilaiProduksi' => 75768000,
                'monthYear' => '202305',
                'fish_id' => 4,
            ),
            41 =>
            array (
                'id' => 44,
                'berat' => 10681,
                'harga' => 22000,
                'nilaiProduksi' => 234982000,
                'monthYear' => '202306',
                'fish_id' => 4,
            ),
            42 =>
            array (
                'id' => 45,
                'berat' => 4736,
                'harga' => 22000,
                'nilaiProduksi' => 104192000,
                'monthYear' => '202307',
                'fish_id' => 4,
            ),
            43 =>
            array (
                'id' => 46,
                'berat' => 5174,
                'harga' => 18000,
                'nilaiProduksi' => 93132000,
                'monthYear' => '202308',
                'fish_id' => 4,
            ),
            44 =>
            array (
                'id' => 47,
                'berat' => 8723,
                'harga' => 18000,
                'nilaiProduksi' => 157014000,
                'monthYear' => '202309',
                'fish_id' => 4,
            ),
            45 =>
            array (
                'id' => 48,
                'berat' => 6000,
                'harga' => 18000,
                'nilaiProduksi' => 108000000,
                'monthYear' => '202310',
                'fish_id' => 4,
            ),
            46 =>
            array (
                'id' => 49,
                'berat' => 30618,
                'harga' => 18000,
                'nilaiProduksi' => 551124000,
                'monthYear' => '202311',
                'fish_id' => 4,
            ),
            47 =>
            array (
                'id' => 50,
                'berat' => 18915,
                'harga' => 19000,
                'nilaiProduksi' => 359385000,
                'monthYear' => '202312',
                'fish_id' => 4,
            ),
            48 =>
            array (
                'id' => 51,
                'berat' => 438,
                'harga' => 50000,
                'nilaiProduksi' => 21900000,
                'monthYear' => '202301',
                'fish_id' => 5,
            ),
            49 =>
            array (
                'id' => 52,
                'berat' => 60,
                'harga' => 50000,
                'nilaiProduksi' => 3000000,
                'monthYear' => '202302',
                'fish_id' => 5,
            ),
            50 =>
            array (
                'id' => 53,
                'berat' => 370,
                'harga' => 55000,
                'nilaiProduksi' => 20350000,
                'monthYear' => '202303',
                'fish_id' => 5,
            ),
            51 =>
            array (
                'id' => 54,
                'berat' => 1043,
                'harga' => 55000,
                'nilaiProduksi' => 57365000,
                'monthYear' => '202304',
                'fish_id' => 5,
            ),
            52 =>
            array (
                'id' => 55,
                'berat' => 1229,
                'harga' => 55000,
                'nilaiProduksi' => 67595000,
                'monthYear' => '202305',
                'fish_id' => 5,
            ),
            53 =>
            array (
                'id' => 56,
                'berat' => 760,
                'harga' => 55000,
                'nilaiProduksi' => 41800000,
                'monthYear' => '202306',
                'fish_id' => 5,
            ),
            54 =>
            array (
                'id' => 57,
                'berat' => 0,
                'harga' => 0,
                'nilaiProduksi' => 0,
                'monthYear' => '202307',
                'fish_id' => 5,
            ),
            55 =>
            array (
                'id' => 58,
                'berat' => 50,
                'harga' => 55000,
                'nilaiProduksi' => 2750000,
                'monthYear' => '202308',
                'fish_id' => 5,
            ),
            56 =>
            array (
                'id' => 59,
                'berat' => 13,
                'harga' => 55000,
                'nilaiProduksi' => 715000,
                'monthYear' => '202309',
                'fish_id' => 5,
            ),
            57 =>
            array (
                'id' => 60,
                'berat' => 980,
                'harga' => 55000,
                'nilaiProduksi' => 53900000,
                'monthYear' => '202310',
                'fish_id' => 5,
            ),
            58 =>
            array (
                'id' => 61,
                'berat' => 3781,
                'harga' => 55000,
                'nilaiProduksi' => 207955000,
                'monthYear' => '202311',
                'fish_id' => 5,
            ),
            59 =>
            array (
                'id' => 62,
                'berat' => 1355,
                'harga' => 55000,
                'nilaiProduksi' => 74525000,
                'monthYear' => '202312',
                'fish_id' => 5,
            ),
            60 =>
            array (
                'id' => 63,
                'berat' => 1755,
                'harga' => 25000,
                'nilaiProduksi' => 43875000,
                'monthYear' => '202301',
                'fish_id' => 6,
            ),
            61 =>
            array (
                'id' => 64,
                'berat' => 1690,
                'harga' => 25000,
                'nilaiProduksi' => 42250000,
                'monthYear' => '202302',
                'fish_id' => 6,
            ),
            62 =>
            array (
                'id' => 65,
                'berat' => 5395,
                'harga' => 25000,
                'nilaiProduksi' => 134875000,
                'monthYear' => '202303',
                'fish_id' => 6,
            ),
            63 =>
            array (
                'id' => 66,
                'berat' => 5993,
                'harga' => 25000,
                'nilaiProduksi' => 149825000,
                'monthYear' => '202304',
                'fish_id' => 6,
            ),
            64 =>
            array (
                'id' => 67,
                'berat' => 7618,
                'harga' => 26000,
                'nilaiProduksi' => 198068000,
                'monthYear' => '202305',
                'fish_id' => 6,
            ),
            65 =>
            array (
                'id' => 68,
                'berat' => 5772,
                'harga' => 27000,
                'nilaiProduksi' => 155844000,
                'monthYear' => '202306',
                'fish_id' => 6,
            ),
            66 =>
            array (
                'id' => 69,
                'berat' => 637,
                'harga' => 27000,
                'nilaiProduksi' => 17199000,
                'monthYear' => '202307',
                'fish_id' => 6,
            ),
            67 =>
            array (
                'id' => 70,
                'berat' => 5252,
                'harga' => 25000,
                'nilaiProduksi' => 131300000,
                'monthYear' => '202308',
                'fish_id' => 6,
            ),
            68 =>
            array (
                'id' => 71,
                'berat' => 13832,
                'harga' => 24000,
                'nilaiProduksi' => 331968000,
                'monthYear' => '202309',
                'fish_id' => 6,
            ),
            69 =>
            array (
                'id' => 72,
                'berat' => 5876,
                'harga' => 22000,
                'nilaiProduksi' => 129272000,
                'monthYear' => '202310',
                'fish_id' => 6,
            ),
            70 =>
            array (
                'id' => 73,
                'berat' => 10452,
                'harga' => 22000,
                'nilaiProduksi' => 229944000,
                'monthYear' => '202311',
                'fish_id' => 6,
            ),
            71 =>
            array (
                'id' => 74,
                'berat' => 5876,
                'harga' => 25000,
                'nilaiProduksi' => 146900000,
                'monthYear' => '202312',
                'fish_id' => 6,
            ),
            72 =>
            array (
                'id' => 76,
                'berat' => 260,
                'harga' => 17000,
                'nilaiProduksi' => 4420000,
                'monthYear' => '202302',
                'fish_id' => 7,
            ),
            73 =>
            array (
                'id' => 77,
                'berat' => 520,
                'harga' => 16000,
                'nilaiProduksi' => 8320000,
                'monthYear' => '202303',
                'fish_id' => 7,
            ),
            74 =>
            array (
                'id' => 78,
                'berat' => 3815,
                'harga' => 17000,
                'nilaiProduksi' => 64855000,
                'monthYear' => '202304',
                'fish_id' => 7,
            ),
            75 =>
            array (
                'id' => 80,
                'berat' => 6825,
                'harga' => 17000,
                'nilaiProduksi' => 116025000,
                'monthYear' => '202305',
                'fish_id' => 7,
            ),
            76 =>
            array (
                'id' => 81,
                'berat' => 4447,
                'harga' => 18000,
                'nilaiProduksi' => 80046000,
                'monthYear' => '202306',
                'fish_id' => 7,
            ),
            77 =>
            array (
                'id' => 82,
                'berat' => 806,
                'harga' => 16000,
                'nilaiProduksi' => 12896000,
                'monthYear' => '202307',
                'fish_id' => 7,
            ),
            78 =>
            array (
                'id' => 83,
                'berat' => 338,
                'harga' => 14000,
                'nilaiProduksi' => 4732000,
                'monthYear' => '202308',
                'fish_id' => 7,
            ),
            79 =>
            array (
                'id' => 84,
                'berat' => 546,
                'harga' => 14000,
                'nilaiProduksi' => 7644000,
                'monthYear' => '202309',
                'fish_id' => 7,
            ),
            80 =>
            array (
                'id' => 85,
                'berat' => 1417,
                'harga' => 16000,
                'nilaiProduksi' => 22672000,
                'monthYear' => '202301',
                'fish_id' => 7,
            ),
            81 =>
            array (
                'id' => 86,
                'berat' => 1105,
                'harga' => 15000,
                'nilaiProduksi' => 16575000,
                'monthYear' => '202310',
                'fish_id' => 7,
            ),
            82 =>
            array (
                'id' => 87,
                'berat' => 2717,
                'harga' => 15000,
                'nilaiProduksi' => 40755000,
                'monthYear' => '202311',
                'fish_id' => 7,
            ),
            83 =>
            array (
                'id' => 88,
                'berat' => 2041,
                'harga' => 15000,
                'nilaiProduksi' => 30615000,
                'monthYear' => '202312',
                'fish_id' => 7,
            ),
            84 =>
            array (
                'id' => 89,
                'berat' => 1495,
                'harga' => 18000,
                'nilaiProduksi' => 26910000,
                'monthYear' => '202301',
                'fish_id' => 8,
            ),
            85 =>
            array (
                'id' => 90,
                'berat' => 195,
                'harga' => 18000,
                'nilaiProduksi' => 3510000,
                'monthYear' => '202302',
                'fish_id' => 8,
            ),
            86 =>
            array (
                'id' => 91,
                'berat' => 0,
                'harga' => 16000,
                'nilaiProduksi' => 0,
                'monthYear' => '202303',
                'fish_id' => 8,
            ),
            87 =>
            array (
                'id' => 92,
                'berat' => 0,
                'harga' => 17000,
                'nilaiProduksi' => 0,
                'monthYear' => '202304',
                'fish_id' => 8,
            ),
            88 =>
            array (
                'id' => 93,
                'berat' => 0,
                'harga' => 17000,
                'nilaiProduksi' => 0,
                'monthYear' => '202305',
                'fish_id' => 8,
            ),
            89 =>
            array (
                'id' => 94,
                'berat' => 0,
                'harga' => 18000,
                'nilaiProduksi' => 0,
                'monthYear' => '202306',
                'fish_id' => 8,
            ),
            90 =>
            array (
                'id' => 95,
                'berat' => 169,
                'harga' => 17000,
                'nilaiProduksi' => 2873000,
                'monthYear' => '202307',
                'fish_id' => 8,
            ),
            91 =>
            array (
                'id' => 96,
                'berat' => 442,
                'harga' => 17000,
                'nilaiProduksi' => 7514000,
                'monthYear' => '202308',
                'fish_id' => 8,
            ),
            92 =>
            array (
                'id' => 97,
                'berat' => 39,
                'harga' => 17000,
                'nilaiProduksi' => 663000,
                'monthYear' => '202309',
                'fish_id' => 8,
            ),
            93 =>
            array (
                'id' => 98,
                'berat' => 0,
                'harga' => 15000,
                'nilaiProduksi' => 0,
                'monthYear' => '202310',
                'fish_id' => 8,
            ),
            94 =>
            array (
                'id' => 99,
                'berat' => 0,
                'harga' => 15000,
                'nilaiProduksi' => 0,
                'monthYear' => '202311',
                'fish_id' => 8,
            ),
            95 =>
            array (
                'id' => 100,
                'berat' => 1053,
                'harga' => 17000,
                'nilaiProduksi' => 17901000,
                'monthYear' => '202312',
                'fish_id' => 8,
            ),
            96 =>
            array (
                'id' => 101,
                'berat' => 272,
                'harga' => 27000,
                'nilaiProduksi' => 7344000,
                'monthYear' => '202301',
                'fish_id' => 9,
            ),
            97 =>
            array (
                'id' => 102,
                'berat' => 270,
                'harga' => 27000,
                'nilaiProduksi' => 7290000,
                'monthYear' => '202302',
                'fish_id' => 9,
            ),
            98 =>
            array (
                'id' => 103,
                'berat' => 2521,
                'harga' => 27000,
                'nilaiProduksi' => 68067000,
                'monthYear' => '202303',
                'fish_id' => 9,
            ),
            99 =>
            array (
                'id' => 104,
                'berat' => 16730,
                'harga' => 27000,
                'nilaiProduksi' => 451710000,
                'monthYear' => '202304',
                'fish_id' => 9,
            ),
            100 =>
            array (
                'id' => 105,
                'berat' => 3575,
                'harga' => 28000,
                'nilaiProduksi' => 100100000,
                'monthYear' => '202305',
                'fish_id' => 9,
            ),
            101 =>
            array (
                'id' => 106,
                'berat' => 3971,
                'harga' => 29000,
                'nilaiProduksi' => 115159000,
                'monthYear' => '202306',
                'fish_id' => 9,
            ),
            102 =>
            array (
                'id' => 107,
                'berat' => 213,
                'harga' => 28000,
                'nilaiProduksi' => 5964000,
                'monthYear' => '202307',
                'fish_id' => 9,
            ),
            103 =>
            array (
                'id' => 108,
                'berat' => 606,
                'harga' => 27000,
                'nilaiProduksi' => 16362000,
                'monthYear' => '202308',
                'fish_id' => 9,
            ),
            104 =>
            array (
                'id' => 109,
                'berat' => 2032,
                'harga' => 27000,
                'nilaiProduksi' => 54864000,
                'monthYear' => '202309',
                'fish_id' => 9,
            ),
            105 =>
            array (
                'id' => 110,
                'berat' => 2143,
                'harga' => 27000,
                'nilaiProduksi' => 57861000,
                'monthYear' => '202310',
                'fish_id' => 9,
            ),
            106 =>
            array (
                'id' => 111,
                'berat' => 2035,
                'harga' => 27000,
                'nilaiProduksi' => 54945000,
                'monthYear' => '202311',
                'fish_id' => 9,
            ),
            107 =>
            array (
                'id' => 112,
                'berat' => 1195,
                'harga' => 27000,
                'nilaiProduksi' => 32265000,
                'monthYear' => '202312',
                'fish_id' => 9,
            ),
            108 =>
            array (
                'id' => 113,
                'berat' => 624,
                'harga' => 17000,
                'nilaiProduksi' => 10608000,
                'monthYear' => '202301',
                'fish_id' => 10,
            ),
            109 =>
            array (
                'id' => 114,
                'berat' => 4108,
                'harga' => 17000,
                'nilaiProduksi' => 69836000,
                'monthYear' => '202302',
                'fish_id' => 10,
            ),
            110 =>
            array (
                'id' => 115,
                'berat' => 1820,
                'harga' => 17000,
                'nilaiProduksi' => 30940000,
                'monthYear' => '202303',
                'fish_id' => 10,
            ),
            111 =>
            array (
                'id' => 116,
                'berat' => 26,
                'harga' => 17000,
                'nilaiProduksi' => 442000,
                'monthYear' => '202304',
                'fish_id' => 10,
            ),
            112 =>
            array (
                'id' => 117,
                'berat' => 494,
                'harga' => 18000,
                'nilaiProduksi' => 8892000,
                'monthYear' => '202305',
                'fish_id' => 10,
            ),
            113 =>
            array (
                'id' => 118,
                'berat' => 78,
                'harga' => 18000,
                'nilaiProduksi' => 1404000,
                'monthYear' => '202306',
                'fish_id' => 10,
            ),
            114 =>
            array (
                'id' => 119,
                'berat' => 65,
                'harga' => 16000,
                'nilaiProduksi' => 1040000,
                'monthYear' => '202307',
                'fish_id' => 10,
            ),
            115 =>
            array (
                'id' => 120,
                'berat' => 39,
                'harga' => 15000,
                'nilaiProduksi' => 585000,
                'monthYear' => '202308',
                'fish_id' => 10,
            ),
            116 =>
            array (
                'id' => 121,
                'berat' => 26,
                'harga' => 16000,
                'nilaiProduksi' => 416000,
                'monthYear' => '202309',
                'fish_id' => 10,
            ),
            117 =>
            array (
                'id' => 122,
                'berat' => 0,
                'harga' => 0,
                'nilaiProduksi' => 0,
                'monthYear' => '202310',
                'fish_id' => 10,
            ),
            118 =>
            array (
                'id' => 123,
                'berat' => 0,
                'harga' => 0,
                'nilaiProduksi' => 0,
                'monthYear' => '202311',
                'fish_id' => 10,
            ),
            119 =>
            array (
                'id' => 124,
                'berat' => 1287,
                'harga' => 16000,
                'nilaiProduksi' => 20592000,
                'monthYear' => '202312',
                'fish_id' => 10,
            ),
            120 =>
            array (
                'id' => 125,
                'berat' => 988,
                'harga' => 12000,
                'nilaiProduksi' => 11856000,
                'monthYear' => '202301',
                'fish_id' => 11,
            ),
            121 =>
            array (
                'id' => 126,
                'berat' => 13,
                'harga' => 12000,
                'nilaiProduksi' => 156000,
                'monthYear' => '202302',
                'fish_id' => 11,
            ),
            122 =>
            array (
                'id' => 127,
                'berat' => 76986,
                'harga' => 10000,
                'nilaiProduksi' => 769860000,
                'monthYear' => '202303',
                'fish_id' => 11,
            ),
            123 =>
            array (
                'id' => 128,
                'berat' => 54379,
                'harga' => 10000,
                'nilaiProduksi' => 543790000,
                'monthYear' => '202304',
                'fish_id' => 11,
            ),
            124 =>
            array (
                'id' => 129,
                'berat' => 9204,
                'harga' => 12000,
                'nilaiProduksi' => 110448000,
                'monthYear' => '202305',
                'fish_id' => 11,
            ),
            125 =>
            array (
                'id' => 130,
                'berat' => 19305,
                'harga' => 12000,
                'nilaiProduksi' => 231660000,
                'monthYear' => '202306',
                'fish_id' => 11,
            ),
            126 =>
            array (
                'id' => 131,
                'berat' => 1248,
                'harga' => 13000,
                'nilaiProduksi' => 16224000,
                'monthYear' => '202307',
                'fish_id' => 11,
            ),
            127 =>
            array (
                'id' => 132,
                'berat' => 5564,
                'harga' => 13000,
                'nilaiProduksi' => 72332000,
                'monthYear' => '202308',
                'fish_id' => 11,
            ),
            128 =>
            array (
                'id' => 133,
                'berat' => 7020,
                'harga' => 14000,
                'nilaiProduksi' => 98280000,
                'monthYear' => '202309',
                'fish_id' => 11,
            ),
            129 =>
            array (
                'id' => 134,
                'berat' => 14287,
                'harga' => 14000,
                'nilaiProduksi' => 200018000,
                'monthYear' => '202310',
                'fish_id' => 11,
            ),
            130 =>
            array (
                'id' => 135,
                'berat' => 1508,
                'harga' => 12000,
                'nilaiProduksi' => 18096000,
                'monthYear' => '202311',
                'fish_id' => 11,
            ),
            131 =>
            array (
                'id' => 136,
                'berat' => 5044,
                'harga' => 13000,
                'nilaiProduksi' => 65572000,
                'monthYear' => '202312',
                'fish_id' => 11,
            ),
            132 =>
            array (
                'id' => 137,
                'berat' => 598,
                'harga' => 23000,
                'nilaiProduksi' => 13754000,
                'monthYear' => '202301',
                'fish_id' => 12,
            ),
            133 =>
            array (
                'id' => 138,
                'berat' => 0,
                'harga' => 0,
                'nilaiProduksi' => 0,
                'monthYear' => '202302',
                'fish_id' => 12,
            ),
            134 =>
            array (
                'id' => 139,
                'berat' => 0,
                'harga' => 0,
                'nilaiProduksi' => 0,
                'monthYear' => '202303',
                'fish_id' => 12,
            ),
            135 =>
            array (
                'id' => 140,
                'berat' => 390,
                'harga' => 23000,
                'nilaiProduksi' => 8970000,
                'monthYear' => '202304',
                'fish_id' => 12,
            ),
            136 =>
            array (
                'id' => 141,
                'berat' => 0,
                'harga' => 0,
                'nilaiProduksi' => 0,
                'monthYear' => '202305',
                'fish_id' => 12,
            ),
            137 =>
            array (
                'id' => 142,
                'berat' => 0,
                'harga' => 0,
                'nilaiProduksi' => 0,
                'monthYear' => '202306',
                'fish_id' => 12,
            ),
            138 =>
            array (
                'id' => 143,
                'berat' => 0,
                'harga' => 0,
                'nilaiProduksi' => 0,
                'monthYear' => '202307',
                'fish_id' => 12,
            ),
            139 =>
            array (
                'id' => 144,
                'berat' => 0,
                'harga' => 0,
                'nilaiProduksi' => 0,
                'monthYear' => '202308',
                'fish_id' => 12,
            ),
            140 =>
            array (
                'id' => 145,
                'berat' => 42,
                'harga' => 22000,
                'nilaiProduksi' => 924000,
                'monthYear' => '202309',
                'fish_id' => 12,
            ),
            141 =>
            array (
                'id' => 146,
                'berat' => 715,
                'harga' => 23000,
                'nilaiProduksi' => 16445000,
                'monthYear' => '202310',
                'fish_id' => 12,
            ),
            142 =>
            array (
                'id' => 147,
                'berat' => 1248,
                'harga' => 22000,
                'nilaiProduksi' => 27456000,
                'monthYear' => '202311',
                'fish_id' => 12,
            ),
            143 =>
            array (
                'id' => 148,
                'berat' => 0,
                'harga' => 0,
                'nilaiProduksi' => 0,
                'monthYear' => '202312',
                'fish_id' => 12,
            ),
            144 =>
            array (
                'id' => 149,
                'berat' => 845,
                'harga' => 13000,
                'nilaiProduksi' => 10985000,
                'monthYear' => '202301',
                'fish_id' => 13,
            ),
            145 =>
            array (
                'id' => 150,
                'berat' => 191,
                'harga' => 13000,
                'nilaiProduksi' => 2483000,
                'monthYear' => '202302',
                'fish_id' => 13,
            ),
            146 =>
            array (
                'id' => 151,
                'berat' => 1355,
                'harga' => 12000,
                'nilaiProduksi' => 16260000,
                'monthYear' => '202303',
                'fish_id' => 13,
            ),
            147 =>
            array (
                'id' => 152,
                'berat' => 1354,
                'harga' => 12000,
                'nilaiProduksi' => 16248000,
                'monthYear' => '202304',
                'fish_id' => 13,
            ),
            148 =>
            array (
                'id' => 153,
                'berat' => 1587,
                'harga' => 13000,
                'nilaiProduksi' => 20631000,
                'monthYear' => '202305',
                'fish_id' => 13,
            ),
            149 =>
            array (
                'id' => 154,
                'berat' => 1875,
                'harga' => 13000,
                'nilaiProduksi' => 24375000,
                'monthYear' => '202306',
                'fish_id' => 13,
            ),
            150 =>
            array (
                'id' => 155,
                'berat' => 20,
                'harga' => 13000,
                'nilaiProduksi' => 260000,
                'monthYear' => '202307',
                'fish_id' => 13,
            ),
            151 =>
            array (
                'id' => 156,
                'berat' => 173,
                'harga' => 13000,
                'nilaiProduksi' => 2249000,
                'monthYear' => '202308',
                'fish_id' => 13,
            ),
            152 =>
            array (
                'id' => 157,
                'berat' => 1311,
                'harga' => 13000,
                'nilaiProduksi' => 17043000,
                'monthYear' => '202309',
                'fish_id' => 13,
            ),
            153 =>
            array (
                'id' => 158,
                'berat' => 1443,
                'harga' => 12000,
                'nilaiProduksi' => 17316000,
                'monthYear' => '202310',
                'fish_id' => 13,
            ),
            154 =>
            array (
                'id' => 159,
                'berat' => 770,
                'harga' => 12000,
                'nilaiProduksi' => 9240000,
                'monthYear' => '202311',
                'fish_id' => 13,
            ),
            155 =>
            array (
                'id' => 160,
                'berat' => 3054,
                'harga' => 13000,
                'nilaiProduksi' => 39702000,
                'monthYear' => '202312',
                'fish_id' => 13,
            ),
            156 =>
            array (
                'id' => 162,
                'berat' => 95,
                'harga' => 20000,
                'nilaiProduksi' => 1900000,
                'monthYear' => '202301',
                'fish_id' => 14,
            ),
            157 =>
            array (
                'id' => 163,
                'berat' => 100,
                'harga' => 20000,
                'nilaiProduksi' => 2000000,
                'monthYear' => '202302',
                'fish_id' => 14,
            ),
            158 =>
            array (
                'id' => 164,
                'berat' => 51,
                'harga' => 21000,
                'nilaiProduksi' => 1071000,
                'monthYear' => '202303',
                'fish_id' => 14,
            ),
            159 =>
            array (
                'id' => 165,
                'berat' => 40,
                'harga' => 20000,
                'nilaiProduksi' => 800000,
                'monthYear' => '202304',
                'fish_id' => 14,
            ),
            160 =>
            array (
                'id' => 166,
                'berat' => 45,
                'harga' => 20000,
                'nilaiProduksi' => 900000,
                'monthYear' => '202305',
                'fish_id' => 14,
            ),
            161 =>
            array (
                'id' => 167,
                'berat' => 32,
                'harga' => 20000,
                'nilaiProduksi' => 640000,
                'monthYear' => '202306',
                'fish_id' => 14,
            ),
            162 =>
            array (
                'id' => 168,
                'berat' => 0,
                'harga' => 0,
                'nilaiProduksi' => 0,
                'monthYear' => '202307',
                'fish_id' => 14,
            ),
            163 =>
            array (
                'id' => 169,
                'berat' => 55,
                'harga' => 19000,
                'nilaiProduksi' => 1045000,
                'monthYear' => '202308',
                'fish_id' => 14,
            ),
            164 =>
            array (
                'id' => 170,
                'berat' => 50,
                'harga' => 20000,
                'nilaiProduksi' => 1000000,
                'monthYear' => '202309',
                'fish_id' => 14,
            ),
            165 =>
            array (
                'id' => 171,
                'berat' => 80,
                'harga' => 20000,
                'nilaiProduksi' => 1600000,
                'monthYear' => '202310',
                'fish_id' => 14,
            ),
            166 =>
            array (
                'id' => 172,
                'berat' => 40,
                'harga' => 19000,
                'nilaiProduksi' => 760000,
                'monthYear' => '202311',
                'fish_id' => 14,
            ),
            167 =>
            array (
                'id' => 173,
                'berat' => 10,
                'harga' => 20000,
                'nilaiProduksi' => 200000,
                'monthYear' => '202312',
                'fish_id' => 14,
            ),
            168 =>
            array (
                'id' => 174,
                'berat' => 0,
                'harga' => 0,
                'nilaiProduksi' => 0,
                'monthYear' => '202301',
                'fish_id' => 15,
            ),
            169 =>
            array (
                'id' => 176,
                'berat' => 395,
                'harga' => 0,
                'nilaiProduksi' => 0,
                'monthYear' => '202303',
                'fish_id' => 15,
            ),
            170 =>
            array (
                'id' => 177,
                'berat' => 0,
                'harga' => 0,
                'nilaiProduksi' => 0,
                'monthYear' => '202302',
                'fish_id' => 15,
            ),
            171 =>
            array (
                'id' => 178,
                'berat' => 740,
                'harga' => 15000,
                'nilaiProduksi' => 11100000,
                'monthYear' => '202304',
                'fish_id' => 15,
            ),
            172 =>
            array (
                'id' => 179,
                'berat' => 200,
                'harga' => 15000,
                'nilaiProduksi' => 3000000,
                'monthYear' => '202305',
                'fish_id' => 15,
            ),
            173 =>
            array (
                'id' => 180,
                'berat' => 295,
                'harga' => 15000,
                'nilaiProduksi' => 4425000,
                'monthYear' => '202306',
                'fish_id' => 15,
            ),
            174 =>
            array (
                'id' => 181,
                'berat' => 0,
                'harga' => 0,
                'nilaiProduksi' => 0,
                'monthYear' => '202307',
                'fish_id' => 15,
            ),
            175 =>
            array (
                'id' => 182,
                'berat' => 70,
                'harga' => 15000,
                'nilaiProduksi' => 1050000,
                'monthYear' => '202308',
                'fish_id' => 15,
            ),
            176 =>
            array (
                'id' => 183,
                'berat' => 229,
                'harga' => 15000,
                'nilaiProduksi' => 3435000,
                'monthYear' => '202309',
                'fish_id' => 15,
            ),
            177 =>
            array (
                'id' => 184,
                'berat' => 358,
                'harga' => 15000,
                'nilaiProduksi' => 5370000,
                'monthYear' => '202310',
                'fish_id' => 15,
            ),
            178 =>
            array (
                'id' => 185,
                'berat' => 351,
                'harga' => 15000,
                'nilaiProduksi' => 5265000,
                'monthYear' => '202311',
                'fish_id' => 15,
            ),
            179 =>
            array (
                'id' => 186,
                'berat' => 150,
                'harga' => 15000,
                'nilaiProduksi' => 2250000,
                'monthYear' => '202312',
                'fish_id' => 15,
            ),
            180 =>
            array (
                'id' => 187,
                'berat' => 0,
                'harga' => 0,
                'nilaiProduksi' => 0,
                'monthYear' => '202301',
                'fish_id' => 16,
            ),
            181 =>
            array (
                'id' => 188,
                'berat' => 0,
                'harga' => 0,
                'nilaiProduksi' => 0,
                'monthYear' => '202302',
                'fish_id' => 16,
            ),
            182 =>
            array (
                'id' => 189,
                'berat' => 0,
                'harga' => 0,
                'nilaiProduksi' => 0,
                'monthYear' => '202303',
                'fish_id' => 16,
            ),
            183 =>
            array (
                'id' => 190,
                'berat' => 3359,
                'harga' => 11000,
                'nilaiProduksi' => 36949000,
                'monthYear' => '202304',
                'fish_id' => 16,
            ),
            184 =>
            array (
                'id' => 191,
                'berat' => 3913,
                'harga' => 11000,
                'nilaiProduksi' => 43043000,
                'monthYear' => '202305',
                'fish_id' => 16,
            ),
            185 =>
            array (
                'id' => 192,
                'berat' => 598,
                'harga' => 12000,
                'nilaiProduksi' => 7176000,
                'monthYear' => '202306',
                'fish_id' => 16,
            ),
            186 =>
            array (
                'id' => 193,
                'berat' => 0,
                'harga' => 0,
                'nilaiProduksi' => 0,
                'monthYear' => '202307',
                'fish_id' => 16,
            ),
            187 =>
            array (
                'id' => 194,
                'berat' => 0,
                'harga' => 0,
                'nilaiProduksi' => 0,
                'monthYear' => '202308',
                'fish_id' => 16,
            ),
            188 =>
            array (
                'id' => 195,
                'berat' => 43,
                'harga' => 11000,
                'nilaiProduksi' => 473000,
                'monthYear' => '202309',
                'fish_id' => 16,
            ),
            189 =>
            array (
                'id' => 196,
                'berat' => 242,
                'harga' => 11000,
                'nilaiProduksi' => 2662000,
                'monthYear' => '202310',
                'fish_id' => 16,
            ),
            190 =>
            array (
                'id' => 197,
                'berat' => 559,
                'harga' => 11000,
                'nilaiProduksi' => 6149000,
                'monthYear' => '202311',
                'fish_id' => 16,
            ),
            191 =>
            array (
                'id' => 198,
                'berat' => 39,
                'harga' => 12000,
                'nilaiProduksi' => 468000,
                'monthYear' => '202312',
                'fish_id' => 16,
            ),
            192 =>
            array (
                'id' => 199,
                'berat' => 0,
                'harga' => 0,
                'nilaiProduksi' => 0,
                'monthYear' => '202301',
                'fish_id' => 17,
            ),
            193 =>
            array (
                'id' => 200,
                'berat' => 0,
                'harga' => 0,
                'nilaiProduksi' => 0,
                'monthYear' => '202302',
                'fish_id' => 17,
            ),
            194 =>
            array (
                'id' => 201,
                'berat' => 0,
                'harga' => 0,
                'nilaiProduksi' => 0,
                'monthYear' => '202303',
                'fish_id' => 17,
            ),
            195 =>
            array (
                'id' => 202,
                'berat' => 0,
                'harga' => 0,
                'nilaiProduksi' => 0,
                'monthYear' => '202304',
                'fish_id' => 17,
            ),
            196 =>
            array (
                'id' => 203,
                'berat' => 0,
                'harga' => 0,
                'nilaiProduksi' => 0,
                'monthYear' => '202305',
                'fish_id' => 17,
            ),
            197 =>
            array (
                'id' => 204,
                'berat' => 0,
                'harga' => 0,
                'nilaiProduksi' => 0,
                'monthYear' => '202306',
                'fish_id' => 17,
            ),
            198 =>
            array (
                'id' => 205,
                'berat' => 0,
                'harga' => 0,
                'nilaiProduksi' => 0,
                'monthYear' => '202307',
                'fish_id' => 17,
            ),
            199 =>
            array (
                'id' => 206,
                'berat' => 0,
                'harga' => 0,
                'nilaiProduksi' => 0,
                'monthYear' => '202308',
                'fish_id' => 17,
            ),
            200 =>
            array (
                'id' => 207,
                'berat' => 130,
                'harga' => 12000,
                'nilaiProduksi' => 1560000,
                'monthYear' => '202309',
                'fish_id' => 17,
            ),
            201 =>
            array (
                'id' => 208,
                'berat' => 91,
                'harga' => 12000,
                'nilaiProduksi' => 1092000,
                'monthYear' => '202310',
                'fish_id' => 17,
            ),
            202 =>
            array (
                'id' => 209,
                'berat' => 26,
                'harga' => 11000,
                'nilaiProduksi' => 286000,
                'monthYear' => '202311',
                'fish_id' => 17,
            ),
            203 =>
            array (
                'id' => 210,
                'berat' => 26,
                'harga' => 12000,
                'nilaiProduksi' => 312000,
                'monthYear' => '202312',
                'fish_id' => 17,
            ),
            204 =>
            array (
                'id' => 211,
                'berat' => 0,
                'harga' => 0,
                'nilaiProduksi' => 0,
                'monthYear' => '202301',
                'fish_id' => 18,
            ),
            205 =>
            array (
                'id' => 212,
                'berat' => 55,
                'harga' => 17000,
                'nilaiProduksi' => 935000,
                'monthYear' => '202302',
                'fish_id' => 18,
            ),
            206 =>
            array (
                'id' => 213,
                'berat' => 50,
                'harga' => 17000,
                'nilaiProduksi' => 850000,
                'monthYear' => '202303',
                'fish_id' => 18,
            ),
            207 =>
            array (
                'id' => 214,
                'berat' => 100,
                'harga' => 16000,
                'nilaiProduksi' => 1600000,
                'monthYear' => '202304',
                'fish_id' => 18,
            ),
            208 =>
            array (
                'id' => 215,
                'berat' => 50,
                'harga' => 16000,
                'nilaiProduksi' => 800000,
                'monthYear' => '202305',
                'fish_id' => 18,
            ),
            209 =>
            array (
                'id' => 216,
                'berat' => 168,
                'harga' => 17000,
                'nilaiProduksi' => 2856000,
                'monthYear' => '202306',
                'fish_id' => 18,
            ),
            210 =>
            array (
                'id' => 217,
                'berat' => 0,
                'harga' => 0,
                'nilaiProduksi' => 0,
                'monthYear' => '202307',
                'fish_id' => 18,
            ),
            211 =>
            array (
                'id' => 218,
                'berat' => 0,
                'harga' => 0,
                'nilaiProduksi' => 0,
                'monthYear' => '202309',
                'fish_id' => 18,
            ),
            212 =>
            array (
                'id' => 219,
                'berat' => 20,
                'harga' => 17000,
                'nilaiProduksi' => 340000,
                'monthYear' => '202308',
                'fish_id' => 18,
            ),
            213 =>
            array (
                'id' => 220,
                'berat' => 20,
                'harga' => 16000,
                'nilaiProduksi' => 320000,
                'monthYear' => '202310',
                'fish_id' => 18,
            ),
            214 =>
            array (
                'id' => 221,
                'berat' => 20,
                'harga' => 16000,
                'nilaiProduksi' => 320000,
                'monthYear' => '202311',
                'fish_id' => 18,
            ),
            215 =>
            array (
                'id' => 222,
                'berat' => 0,
                'harga' => 0,
                'nilaiProduksi' => 0,
                'monthYear' => '202312',
                'fish_id' => 18,
            ),
        ));


    }
}
