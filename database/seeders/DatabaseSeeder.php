<?php

namespace Database\Seeders;

use App\Models\Keberatan;
use App\Models\Pengajuan;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        Keberatan::factory()->count(100)->create();
        Pengajuan::factory()->count(100)->create();
        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@mail.com',
            'password' => Hash::make('admin'),
        ]);
    }
}
