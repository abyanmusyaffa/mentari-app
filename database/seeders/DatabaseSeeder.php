<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Barang;
use App\Models\Satuan;
use App\Models\Kategori;
use App\Models\Pelanggan;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Kategori::factory()->count(3)->create();
        Satuan::factory()->count(3)->create();
        Barang::factory()->count(20)->create();
        Pelanggan::factory()->count(10)->create();

        DB::table('users')->insert([
            'username' => 'mon',
            'name' => 'Abyan Aufa Alif Musyaffa',
            'role' => 'admin',
            'password' => Hash::make('123')
        ]);
    }
}
