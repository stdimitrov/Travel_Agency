<?php

namespace Database\Seeders;

use App\Models\Type;
use App\Models\WithWhat;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('types')->insert(array(
            0 =>
                array(
                    'name' => 'Ocean',
                    'code' => 'O'
                ),
            1 =>
                array(
                    'name' => 'Sea',
                    'code' => 'S'
                ),
            2 =>
                array(
                    'name' => 'Mountain',
                    'code' => 'M'
                ),
            3 =>
                array(
                    'name' => 'Park',
                    'code' => 'P'
                ),
            4 =>
                array(
                    'name' => 'City',
                    'code' => 'C'
                )
        ));
    }
}
