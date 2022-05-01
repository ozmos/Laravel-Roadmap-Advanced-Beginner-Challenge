<?php

namespace Database\Seeders;

use App\Models\Client;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Project;
use App\Models\Task;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // constant values
        DB::table('roles')->insert([
            ['name' => 'admin'],
            ['name' => 'manager'],
            ['name' => 'user'],
        ]);
        DB::table('statuses')->insert([
            ['name' => 'open'],
            ['name' => 'in progress'],
            ['name' => 'complete']
        ]);

        // Users
        User::factory()
            ->count(1)
            ->create([
                'role_id' => 1
            ]);
        User::factory()
            ->count(3)
            ->create([
                'role_id' => 2
            ]);
        User::factory()
            ->count(7)
            ->create([
                'role_id' => 3
            ]);

        // Clients
        Client::factory()
            ->count(5)
            ->create();

        // Projects
        Project::factory()
            ->count(10)
            ->create();
        // Tasks
        Task::factory()
            ->count(50)
            ->create();
    }
}
