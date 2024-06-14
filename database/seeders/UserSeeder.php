<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Admin',
                'phone' => '087812632995',
                'email' => "admin@gmail.com",
                'password' => bcrypt('123456'),
            ],
            [
                'name' => 'User',
                'phone' => '-87812354678',
                'email' => "user@gmail.com",
                'password' => bcrypt('123456'),
            ],
        ];
        DB::table('users')->insert($users);

    }
}
