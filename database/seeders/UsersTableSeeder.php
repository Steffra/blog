<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Test User',
            'email' => 'testuser@test.test',
            'email_verified_at' => '2022-09-09',
            'password' =>  Hash::make('password'),
            'is_admin' => false,
        ]);

        User::create([
            'name' => 'Test Admin',
            'email' => 'testadmin@test.test',
            'email_verified_at' => '2022-09-09',
            'password' => Hash::make('password'),
            'is_admin' => true,
        ]);
    }
}
