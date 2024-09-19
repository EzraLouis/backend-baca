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
        // Membuat 10 user acak
        User::factory(10)->create();

        // Membuat user spesifik dengan nama dan email tertentu
        User::create([
            'name' => 'Ezra Louis',
            'username' => 'ezralouis',
            'email' => 'ezralo22@gmail.com',
            'password' => bcrypt('12345'),
            'remember_token' => bin2hex(random_bytes(30)),
            'avatar' => 'https://i.ibb.co/6pD5S6Z/ezra-louis.png',
            'role' => 'admin',
        ]);
    }
}
