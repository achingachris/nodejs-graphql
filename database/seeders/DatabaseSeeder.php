<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Admin;
use App\Models\Client;
use App\Models\Routes;
use App\Models\Transporter;
use App\Models\User;
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
        User::factory(10)->create()
            ->each(function ($user) {
                if ($user->type == 'client') {
                    $user->client()->save(Client::factory()->make());
                } elseif ($user->type == 'transporter') {
                    $user->transporter()->save(Transporter::factory()->make());
                } elseif ($user->type == 'admin') {
                    $user->admin()->save(Admin::factory()->make());
                }
            });
    }
}
