<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // # seed default package permissions (super, admin)
        $this->call(\Naykel\Authit\Database\Seeders\RolesPermissionsSeeder::class);
        // # optionally seed user
        $this->call(\Naykel\Authit\Database\Seeders\UsersSeeder::class);
    }
}
