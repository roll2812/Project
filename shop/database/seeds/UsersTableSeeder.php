<?php

use App\User;
use Illuminate\Database\Seeder;
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
        User::insert([
            ['name' => 'Admin',
                'email' => 'roll@gmail.com',
                'password' => Hash::make('123456')],
            ['name' => 'Staff',
                'email' => 'staff@gmail.com',
                'password' => Hash::make('123456')]
        ]);
    }
}
