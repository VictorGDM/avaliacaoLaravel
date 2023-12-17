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
        $user = User::factory()->make([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
        ])->role()->associate(1);

        $user->save();
    }
}
