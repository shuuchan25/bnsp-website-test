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
    public function run()
    {
        // $imagePath = '../assets/images/pp1.png'; // Ganti dengan path gambar default Anda

        User::create([
            'role_id' => '1',
            'name' => 'Admin',
            'username' => 'admin',
            'image' => 'https://cdn-icons-png.flaticon.com/512/1053/1053244.png',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123')
        ]);
    }
}