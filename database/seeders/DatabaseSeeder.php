<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\City;
use App\Models\Country;


// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         // Create 10 countries
        Country::factory(10)->create();

        // Create 50 cities
        City::factory(50)->create();


        User::factory()->create([
            'name' => 'smail  Ista',
            'email' => 'ista@admin.com',
            'role' => 'admin',
        ]);
        User::factory()->create([
            'name' => 'youssef admin',
            'email' => 'youssef@admin.com',
            'role' => 'admin',
        ]);
        User::factory()->create([
            'name' => 'test user',
            'email' => 'test@user.com',
            'role' => 'user',
        ]);
        User::factory(10)->create();
    }
}
