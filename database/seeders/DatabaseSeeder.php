<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'admin1',
                'email' => 'admin1@admin.com',
                'password' => Hash::make('password123'),
            ],
            [
                'name' => 'admin2',
                'email' => 'admin2@admin.com',
                'password' => Hash::make('password123'),
            ],
            [
                'name' => 'admin3',
                'email' => 'admin3@admin.com',
                'password' => Hash::make('password123'),
            ],
        ]);
    }
}
