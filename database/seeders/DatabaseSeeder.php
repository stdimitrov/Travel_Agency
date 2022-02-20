<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\WithWhat;
use App\Models\Type;
use App\Models\Country;
use App\Models\Trips;

use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call(UsersTableSeeder::class);
        $this->call(WithWhatsTableSeeder::class);
        $this->call(TypesTableSeeder::class);
        $this->call(CountriesTableSeeder::class);
        $this->call(TripsTableSeeder::class);


    }
}
