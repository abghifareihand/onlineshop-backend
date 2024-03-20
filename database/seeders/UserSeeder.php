<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        User::factory()->create([
            'name' => 'Bang Admin',
            'email' => 'admin@gmail.com',
            'phone' => '087777711022',
            'roles' => 'ADMIN',
            'password' => Hash::make('admin123'),
        ]);

        User::factory(150)->create();
    }
}
