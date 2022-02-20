<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TripsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('trips')->insert(array(
            0 =>
                array(
                    //'id' => '',
                    'name' => 'admin',
                    'title' => 'admin',
                    'description' => 'admin'
                ),
            1 =>
                array(
                    //'id' => '',
                    'name' => 'test',
                    'title' => 'test',
                    'description' => 'test'
                ),
            2 =>
                array(
                    //'id' => '',
                    'name' => 'user',
                    'title' => 'user',
                    'description' => 'user'
                ),
            3 =>
                array(
                    //'id' => '',
                    'name' => 'error',
                    'title' => 'error',
                    'description' => 'error'
                ),
            4 =>
                array(
                    //'id' => '',
                    'name' => 'indigo',
                    'title' => 'indigo',
                    'description' => 'indigo'
                ),
            5 =>
                array(
                    //'id' => '',
                    'name' => 'salt',
                    'title' => 'salt',
                    'description' => 'salt'
                ),
            6 =>
                array(
                    //'id' => '',
                    'name' => 'piper',
                    'title' => 'piper',
                    'description' => 'piper'
                )

        ));

    }
}
