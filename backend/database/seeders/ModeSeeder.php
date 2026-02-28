<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Mode;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ModeSeeder extends Seeder
{
    public function run(): void
    {
        $user = User::first();  //автор - первый пользователь

        $mods = [
            [
                'title' => 'OptiFine',
                'description' => 'Мод для оптимизации графики и производительности, добавляет поддержку шейдеров.',
                'mod_file' => 'OptiFine_1.20.1.jar',
                'version' => 'java',
                'minecraft_version' => '1.20.1',
                'image' => 'mods/optifine.jpg',
                'status' => 'active',
            ],
            [
                'title' => 'Biomes O\' Plenty',
                'description' => 'Добавляет в игру множество новых биомов, растений и блоков.',
                'mod_file' => 'BiomesOPlenty-1.20.1.jar',
                'version' => 'java',
                'minecraft_version' => '1.20.1',
                'image' => 'mods/bop.png',
                'status' => 'process',
            ],
        ]

        foreach ($mods as $modData) {
            Mod::updateOrCreate(
                [
                    'user_id' => $modData['user_id'],
                    'title' => $modData['title'],
                    'description' => $modData['description'],
                    'mod_file' => $modData['mod_file'],
                    'version' => $modData['version'],
                    'minecraft_version' => $modData['minecraft_version'],
                    'image' => $modData['image'],
                    'status' => $modData['status'],
                ]
            );
        }
    }
}
