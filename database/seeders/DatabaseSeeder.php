<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Routes;
use App\Models\Vehicles;
use App\Models\Cargo;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(5)->create();
        Routes::factory(10)->create();
        Vehicles::factory(10)->create();
        Cargo::factory(10)->create();
    }
}
