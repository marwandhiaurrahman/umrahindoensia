<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            "name" => "Admin Super",
            "email" => "marwan@gmail.com",
            // "username" => "adminit",
            // "phone" => "089529909036",
            'password' => bcrypt('qweqwe'),
            // 'user_id' => 2,
            // 'email_verified_at' => now()
        ]);
        $user->assignRole('Admin Super');
    }
}
