<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name'=>'Thoriq Hanif',
            'email'=>'admin@gmail.com',
            'password'=> bcrypt('123456'),
            'email_verified_at' => now()
        ])->assignRole('admin');

        User::create([
            'name'=>'Petugas 1',
            'email'=>'petugas@gmail.com',
            'password'=> bcrypt('123456'),
            'email_verified_at' => now()
        ])->assignRole('petugas');

        User::create([
            'name'=>'Peminjam 1',
            'email'=>'peminjam@gmail.com',
            'password'=> bcrypt('123456'),
            'email_verified_at' => now()
        ])->assignRole('peminjam');
    }
}
