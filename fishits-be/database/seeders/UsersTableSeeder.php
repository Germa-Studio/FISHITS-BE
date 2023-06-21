<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
// DB
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('users')->delete();

        DB::table('users')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'arima kana',
                'username' => 'arima_kana',
                'email' => 'arimakana@naver.com',
                'email_verified_at' => NULL,
                'role' => 'admin',
                'password' => '$2y$10$mGh2bxdfH80aFRL0r43ieu0LTYojGIqiU9hzwGMDsqz1ul47P5O6W',
                'remember_token' => NULL,
                'created_at' => '2023-06-19 01:23:43',
                'updated_at' => '2023-06-19 02:35:46',
                'shipType_id' => 1,
            ),
            1 =>
            array (
                'id' => 2,
                'name' => 'ruby hoshino',
                'username' => 'ruby_ruby',
                'email' => 'hoshinoruby@naver.com',
                'email_verified_at' => NULL,
                'role' => 'user',
                'password' => '$2y$10$dBFJjelc3mU5ZCLPODVcD.O79RKFwV2W6Ykqz1Ou40KzViYMRfmAC',
                'remember_token' => NULL,
                'created_at' => '2023-06-19 02:42:43',
                'updated_at' => '2023-06-19 02:42:43',
                'shipType_id' => 1,
            ),
            2 =>
            array (
                'id' => 3,
                'name' => 'jung yerin',
                'username' => 'yerin',
                'email' => 'yerin_un@naver.com',
                'email_verified_at' => NULL,
                'role' => 'user',
                'password' => '$2y$10$0Q6addfCLKOjH8WpiwkmN.lucbxsS3RF9bOuWtw2kjRpVSwI893Xa',
                'remember_token' => NULL,
                'created_at' => '2023-06-20 16:13:40',
                'updated_at' => '2023-06-20 16:13:40',
                'shipType_id' => NULL,
            ),
        ));


    }
}
