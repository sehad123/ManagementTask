<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'id' => 1,
            'name' => 'Setya Hadi',
            'email' => 'sehad@gmail.com',
            'password' => bcrypt('sehad123'),
            'email_verified_at' => time()
        ]);
        User::factory()->create([
            'id' => 2,
            'name' => 'Hadi',
            'email' => 'hadi@gmail.com',
            'password' => bcrypt('hadi123'),
            'email_verified_at' => time()
        ]);

        // Project::factory()
        //     ->count(30)
        //     ->hasTasks(30)
        //     ->create();
    }
}