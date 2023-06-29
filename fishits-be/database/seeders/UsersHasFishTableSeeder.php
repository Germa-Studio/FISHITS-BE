<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
// DB
use Illuminate\Support\Facades\DB;

class UsersHasFishTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('users_has_fish')->delete();

        DB::table('users_has_fish')->insert(array (
            0 =>
            array (
                'users_id' => 1,
                'fish_id' => 1,
                'waktu' => '20:32:34',
                'berat' => 1.5,
                'satuanBerat' => 'Kg',
                'harga' => '10000',
                'bbmTerpakai' => 1.2,
                'jarakTempuh' => 5.0,
                'pengeluaran' => 300,
                'pendapatan' => 300,
                'keuntungan' => 12,
                'tanggal' => '2023-06-29',
            ),
            1 =>
            array (
                'users_id' => 1,
                'fish_id' => 2,
                'waktu' => '20:40:01',
                'berat' => 1.5,
                'satuanBerat' => 'Kg',
                'harga' => '10000',
                'bbmTerpakai' => 1.2,
                'jarakTempuh' => 5.0,
                'pengeluaran' => 30000,
                'pendapatan' => 30000,
                'keuntungan' => 13,
                'tanggal' => '2023-06-29',
            ),
            2 =>
            array (
                'users_id' => 3,
                'fish_id' => 2,
                'waktu' => '20:49:52',
                'berat' => 1.5,
                'satuanBerat' => 'Kg',
                'harga' => '10000',
                'bbmTerpakai' => 1.2,
                'jarakTempuh' => 5.0,
                'pengeluaran' => 30000,
                'pendapatan' => 30000,
                'keuntungan' => 13,
                'tanggal' => '2023-06-29',
            ),
            3 =>
            array (
                'users_id' => 3,
                'fish_id' => 2,
                'waktu' => '20:49:53',
                'berat' => 1.5,
                'satuanBerat' => 'Kg',
                'harga' => '10000',
                'bbmTerpakai' => 1.2,
                'jarakTempuh' => 5.0,
                'pengeluaran' => 30000,
                'pendapatan' => 30000,
                'keuntungan' => 13,
                'tanggal' => '2023-06-29',
            ),
        ));


    }
}
