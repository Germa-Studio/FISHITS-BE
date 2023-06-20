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



    }
}
