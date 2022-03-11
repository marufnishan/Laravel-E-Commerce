<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            [
                'name' =>  'Admin',
                'email' => 'admin@gmail.com',
                'phone' => '01718863771',
                'password' => Hash::make('12345678'),
                'utype' => 'ADM',
            ],
            [
                'name' =>  'User',
                'email' => 'user@gmail.com',
                'phone' => '01708582044',
                'password' => Hash::make('12345678'),
                'utype' => 'USR',
            ],
            [
                'name' =>  'Seller',
                'email' => 'seller@gmail.com',
                'phone' => '01708582040',
                'password' => Hash::make('12345678'),
                'utype' => 'VNDR',
            ]
        ]);
    }
}
