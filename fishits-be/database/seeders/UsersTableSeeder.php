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
                'shipType_id' => 1,
            ),
            3 =>
            array (
                'id' => 4,
                'name' => 'ji',
                'username' => 'ji',
                'email' => 'ji@gmail.com',
                'email_verified_at' => NULL,
                'role' => 'admin',
                'password' => '$2y$10$GL3LMh91W0d8XHy.LTZdVep2XX6l4j3.xsOIKgfit8snuCssRAFc2',
                'remember_token' => NULL,
                'created_at' => '2023-06-26 14:26:36',
                'updated_at' => '2023-06-26 14:26:36',
                'shipType_id' => 1,
            ),
            4 =>
            array (
                'id' => 5,
                'name' => 'ju',
                'username' => 'ju',
                'email' => 'ju@gmail.com',
                'email_verified_at' => NULL,
                'role' => 'user',
                'password' => '$2y$10$UQuVHrbQV9vxtxfLh.U1j.hahS3G8.vAO.1271X53J4hq3i9iZWSO',
                'remember_token' => NULL,
                'created_at' => '2023-06-26 14:26:58',
                'updated_at' => '2023-06-26 14:26:58',
                'shipType_id' => 1,
            ),
        ));


    }
}
