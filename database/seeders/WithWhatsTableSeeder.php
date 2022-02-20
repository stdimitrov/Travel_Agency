<?php

namespace Database\Seeders;

use App\Models\WithWhat;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class WithWhatsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('with_whats')->insert(array(
            0 =>
                array(
                    'name' => 'Airplane',
                    'code' => 'A'
                ),
            1 =>
                array(
                    'name' => 'Bus',
                    'code' => 'B'
                ),
            2 =>
                array(
                    'name' => 'Cruise',
                    'code' => 'C'
                ),
            3 =>
                array(
                    'name' => 'Without',
                    'code' => 'W'
                )
        ));
    }
}
