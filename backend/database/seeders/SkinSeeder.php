<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Skin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SkinSeeder extends Seeder
{
    public function run(): void
    {
        $user = User::first();  //автор - первый пользователь

        $skins = [
            [
                'title' => 'Бобер пират',
                'skin_image' => 'skins/Бобер_пират/Превью.png',
                'skin_file' => 'skins/Бобер_пират/бобер_пират1.png',
                'skin_texture_file' => 'skins/Бобер_пират/бобер_пират2.png',
                'model' => 'Steve',
                'category' => 'Смешные',
                'description' => 'Скин Бобёр пират для Майнкрафт, мальчик в новом формате 64x64 и модели Steve',
                'status' => 'active',
            ],
            [
                'title' => 'Великий каменьщик',
                'skin_image' => 'skins/Великий_каменьщик/Превью.png',
                'skin_file' => 'skins/Великий_каменьщик/великий_каменьщик1.png',
                'skin_texture_file' => 'skins/Великий_каменьщик/великий_каменьщик2.png',
                'model' => 'Steve',
                'category' => 'Смешные',
                'description' => 'Скин великий каменьщик 0.2 для Майнкрафт, мальчик в новом формате 64x64 и модели Steve',
                'status' => 'active',
            ],
            [
                'title' => 'Король',
                'skin_image' => 'skins/Король/Превью.png',
                'skin_file' => 'skins/Король/король1.png',
                'skin_texture_file' => 'skins/Король/король2.png',
                'model' => 'Steve',
                'category' => 'Для мальчиков',
                'description' => 'Скин Король для Майнкрафт, мальчик в новом формате 64x64 и модели Steve',
                'status' => 'active',
            ],
            [
                'title' => 'Рыцарь',
                'skin_image' => 'skins/Рыцарь/Превью.png',
                'skin_file' => 'skins/Рыцарь/рыцарь1.png',
                'skin_texture_file' => 'skins/Рыцарь/рыцарь2.png',
                'model' => 'Steve',
                'category' => 'Для мальчиков',
                'description' => 'Скин Рыцарь для Майнкрафт, мальчик в новом формате 64x64 и модели Steve',
                'status' => 'active',
            ],
            [
                'title' => 'Телевизор',
                'skin_image' => 'skins/Телевизор/Превью.png',
                'skin_file' => 'skins/Телевизор/телевизор1.png',
                'skin_texture_file' => 'skins/Телевизор/телевизор2.png',
                'model' => 'Steve',
                'category' => 'Смешные',
                'description' => 'Скин телевизор для Майнкрафт, мальчик в новом формате 64x64 и модели Steve',
                'status' => 'active',
            ],
            [
                'title' => 'Бабушка',
                'skin_image' => 'skins/Бабушка/Превью.png',
                'skin_file' => 'skins/Бабушка/бабушка1.png',
                'skin_texture_file' => 'skins/Бабушка/бабушка2.png',
                'model' => 'Alex',
                'category' => 'Для девочек',
                'description' => 'Скин бабушка для Майнкрафт, девочка в новом формате 64x64 и модели Alex',
                'status' => 'active',
            ],
            [
                'title' => 'Беззубик',
                'skin_image' => 'skins/Беззубик/Превью.png',
                'skin_file' => 'skins/Беззубик/беззубик1.png',
                'skin_texture_file' => 'skins/Беззубик/беззубик2.png',
                'model' => 'Steve',
                'category' => 'Для мальчиков',
                'description' => 'Скин беззубик для Майнкрафт, мальчик в новом формате 64x64 и модели Steve',
                'status' => 'active',
            ],
            [
                'title' => 'Бизнесмен стив',
                'skin_image' => 'skins/Бизнесмен_стив/Превью.png',
                'skin_file' => 'skins/Бизнесмен_стив/бизнесмен_стив1.png',
                'skin_texture_file' => 'skins/Бизнесмен_стив/бизнесмен_стив2.png',
                'model' => 'Steve',
                'category' => 'Смешные',
                'description' => 'Скин телевизор для Майнкрафт, мальчик в новом формате 64x64 и модели Steve',
                'status' => 'active',
            ],
            [
                'title' => 'Без фона',
                'skin_image' => 'Превью.png',
                'skin_file' => 'skins/Без_фона/без_фона1.png',
                'skin_texture_file' => 'skins/Без_фона/без_фона2.png',
                'model' => 'Steve',
                'category' => 'Смешные',
                'description' => 'Скин Без фона для Майнкрафт, мальчик в новом формате 64x64 и модели Steve',
                'status' => 'active',
            ],
            [
                'title' => 'Гастер',
                'skin_image' => 'skins/Гастер/Превью.png',
                'skin_file' => 'skins/Гастер/гастер1.png',
                'skin_texture_file' => 'skins/Гастер/гастер2.png',
                'model' => 'Steve',
                'category' => 'Для мальчиков',
                'description' => 'Скин гастер для Майнкрафт, мальчик в новом формате 64x64 и модели Steve',
                'status' => 'active',
            ],
            [
                'title' => 'Зеленый гастер',
                'skin_image' => 'skins/Зеленый_гастер/Превью.png',
                'skin_file' => 'skins/Зеленый_гастер/зеленый_гастер1.png',
                'skin_texture_file' => 'skins/Зеленый_гастер/зеленый_гастер2.png',
                'model' => 'Steve',
                'category' => 'Для мальчиков',
                'description' => 'Скин зеленый гастер для Майнкрафт, мальчик в новом формате 64x64 и модели Steve',
                'status' => 'active',
            ],
            [
                'title' => 'Капибара',
                'skin_image' => 'skins/Капибара/Превью.png',
                'skin_file' => 'skins/Капибара/капибара1.png',
                'skin_texture_file' => 'skins/Капибара/капибара2.png',
                'model' => 'Steve',
                'category' => 'Смешные',
                'description' => 'Скин капибара для Майнкрафт, мальчик в новом формате 64x64 и модели Steve',
                'status' => 'active',
            ],
            [
                'title' => 'Крипер',
                'skin_image' => 'skins/Крипер/Превью.png',
                'skin_file' => 'skins/Крипер/крипер1.png',
                'skin_texture_file' => 'skins/Крипер/крипер2.png',
                'model' => 'Steve',
                'category' => 'Смешные',
                'description' => 'Скин крипер для Майнкрафт, мальчик в новом формате 64x64 и модели Steve',
                'status' => 'active',
            ],
            [
                'title' => 'Кулкид',
                'skin_image' => 'skins/Кулкид/Превью.png',
                'skin_file' => 'skins/Кулкид/кулкид1.png',
                'skin_texture_file' => 'skins/Кулкид/кулкид2.png',
                'model' => 'Steve',
                'category' => 'Смешные',
                'description' => 'Скин кулкид для Майнкрафт, мальчик в новом формате 64x64 и модели Steve',
                'status' => 'active',
            ],
            [
                'title' => 'Научный сотрудник',
                'skin_image' => 'skins/Научный_сотрудник/Превью.png',
                'skin_file' => 'skins/Научный_сотрудник/научный_сотрудник1.png',
                'skin_texture_file' => 'skins/Научный_сотрудник/научный_сотрудник2.png',
                'model' => 'Steve',
                'category' => 'Для мальчиков',
                'description' => 'Скин научный сотрудник для Майнкрафт, мальчик в новом формате 64x64 и модели Steve',
                'status' => 'active',
            ],
            [
                'title' => 'Повар',
                'skin_image' => 'skins/Повар/Превью.png',
                'skin_file' => 'skins/Повар/повар1.png',
                'skin_texture_file' => 'skins/Повар/повар2.png',
                'model' => 'Steve',
                'category' => 'Для мальчиков',
                'description' => 'Скин  повар для Майнкрафт, мальчик в новом формате 64x64 и модели Steve',
                'status' => 'active',
            ],
            [
                'title' => 'Рыцарь энда',
                'skin_image' => 'skins/Рыцарь_энда/Превью.png',
                'skin_file' => 'skins/Рыцарь_энда/рыцарь_энда1.png',
                'skin_texture_file' => 'skins/Рыцарь_энда/рыцарь_энда2.png',
                'model' => 'Steve',
                'category' => 'Для мальчиков',
                'description' => 'Скин  рыцарь энда для Майнкрафт, мальчик в новом формате 64x64 и модели Steve',
                'status' => 'active',
            ],
            [
                'title' => 'Стив 67',
                'skin_image' => 'skins/Стив_67/Превью.png',
                'skin_file' => 'skins/Стив_67/стив_671.png',
                'skin_texture_file' => 'skins/Стив_67/стив_672.png',
                'model' => 'Steve',
                'category' => 'Для мальчиков',
                'description' => 'Скин  стив 67 для Майнкрафт, мальчик в новом формате 64x64 и модели Steve',
                'status' => 'active',
            ],
            [
                'title' => 'Ученая',
                'skin_image' => 'skins/Ученая/Превью.png',
                'skin_file' => 'skins/Ученая/ученая1.png',
                'skin_texture_file' => 'skins/Ученая/ученая2.png',
                'model' => 'Alex',
                'category' => 'Для девочек',
                'description' => 'Скин  ученая для Майнкрафт, девочка в новом формате 64x64 и модели Alex',
                'status' => 'active',
            ],
            [
                'title' => 'Эндермен',
                'skin_image' => 'skins/Эндермен/Превью.png',
                'skin_file' => 'skins/Эндермен/эндермен1.png',
                'skin_texture_file' => 'skins/Эндермен/эндермен2.png',
                'model' => 'Steve',
                'category' => 'Смешные',
                'description' => 'Скин  эндермен для Майнкрафт, мальчик в новом формате 64x64 и модели Steve',
                'status' => 'active',
            ],
        ];

        foreach ($skins as $skinData) {
            Skin::updateOrCreate(
                [
                    'user_id' => $user->id,
                    'title' => $skinData['title'],
                ],
                array_merge($skinData, [
                    'user_id' => $user->id,
                ])
            );
        }
    }
}
