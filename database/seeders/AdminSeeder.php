<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'admin@abegroup.com'],
            [
                'name' => 'Admin ABE Group',
                'password' => Hash::make('password'),
                'email_verified_at' => now(),
            ]
        );
    }
}
