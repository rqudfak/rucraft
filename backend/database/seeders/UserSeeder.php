<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $users = [
            [
                'name' => 's0la1n',
                'login' => 's0la1n',
                'email' => '',
                'password' => Hash::make('123456'),
                'role' => 'admin',
                'is_banned' => false,
            ],
            [
                'name' => 'mikamikisser',
                'login' => 'mikamikisser',
                'email' => '',
                'password' => Hash::make('123456'),
                'role' => 'admin',
                'is_banned' => false,
            ],
            [
                'name' => 'memesori',
                'login' => 'memesori',
                'email' => 'nastya.davydova.2006@mail.ru',
                'password' => Hash::make('123456'),
                'role' => 'admin',
                'is_banned' => false,
            ],
            [
                'name' => 'zushon',
                'login' => 'zushon',
                'email' => '',
                'password' => Hash::make('123456'),
                'role' => 'admin',
                'is_banned' => false,
            ],
            [
                'name' => 'levlafan1',
                'login' => 'levlafan1',
                'email' => '',
                'password' => Hash::make('123456'),
                'role' => 'admin',
                'is_banned' => false,
            ],
        ]

        foreach ($users as $userData) {
            User::updateOrCreate(
                [
                    'name' => $userData['name'],
                    'login' => $userData['login'],
                    'email' => $userData['email'],
                    'password' => $userData['password'],
                    'role' => $userData['role'],
                    'is_banned' => $userData['is_banned'],
                ]
            );
        }
    }
}
