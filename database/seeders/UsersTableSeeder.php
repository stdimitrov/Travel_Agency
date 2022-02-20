<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->insert(array(
            0 =>
                array(
                    //'id' => '',
                    'name' => 'admin',
                    'email' => 'admin@admin.com',
                    'role' => '1',
                    'password' => Hash::make('12345678'),
                    //'created_at' => rememberToken(),
                    //'updated_at' => timestamps()
                ),
            1 =>
                array(
                    //'id' => '',
                    'name' => 'error',
                    'email' => 'error@error.com',
                    'role' => '0',
                    'password' => Hash::make('12345678')
                ),
            2 =>
                array(
                    //'id' => '',
                    'name' => 'stanimir',
                    'email' => 'skdimitrov@gmail.com',
                    'role' => '0',
                    'password' => Hash::make('12345678')
                ),
            3 =>
                array(
                    //'id' => '',
                    'name' => 'zaebi',
                    'email' => 'zaebi@zaebi.com',
                    'role' => '0',
                    'password' => Hash::make('12345678')
                ),
            4 =>
                array(
                    //'id' => '',
                    'name' => 'tralala',
                    'email' => 'tra@tra.com',
                    'role' => '0',
                    'password' => Hash::make('12345678')
                ),
            5 =>
                array(
                    //'id' => '',
                    'name' => 'Laravel',
                    'email' => 'laravel@laravel.com',
                    'role' => '0',
                    'password' => Hash::make('12345678')
                ),
            6 =>
                array(
                    //'id' => '',
                    'name' => 'Gandi',
                    'email' => 'Gandi@Gandi.com',
                    'role' => '0',
                    'password' => Hash::make('12345678')
                ),
            6 =>
                array(
                    //'id' => '',
                    'name' => 'Err',
                    'email' => 'Err@err.com',
                    'role' => '0',
                    'password' => Hash::make('12345678')
                ),
            6 =>
                array(
                    //'id' => '',
                    'name' => 'Odin',
                    'email' => 'Odin@odin.com',
                    'role' => '0',
                    'password' => Hash::make('12345678')
                )
        ));
    }
}
