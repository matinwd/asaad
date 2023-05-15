<?php

namespace Database\Seeders;

use App\Models\Menu;
use App\Models\MenuTranslation;
use App\Repositories\MenuRepository;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @param MenuRepository $repository
     */
    public function run(MenuRepository  $repository): void
    {
        Model::unguard();
        Schema::disableForeignKeyConstraints();
        MenuTranslation::truncate();
        Menu::truncate();

        $repository->create([
            'name' => 'header',
            'en' => [
                'items' => [
                    [
                        'id' => 1,
                        'name' => 'Home',
                        'url' => '/',
                        '_open' => false,
                    ],
                    [
                        'id' => 2,
                        'name' => 'About',
                        'url' => 'javascript:;',
                        '_open' => false,
                        'children' => [
                            [
                                'id' => 3,
                                'name' => 'About Us',
                                'url' => '/about-us',
                                '_open' => false,
                            ],
                        ]
                    ],

                    [
                        'id' => 4,
                        'name' => 'Posts',
                        'url' => '/posts',
                        '_open' => false,
                    ],

                    [
                        'id' => 5,
                        'name' => 'Contact',
                        'url' => '/contact_us',
                        '_open' => false,
                    ],
                ],
            ],
            'de' => [
                'items' => [
                    [
                        'id' => 6,
                        'name' => 'Home',
                        'url' => '/',
                        '_open' => false,
                    ],
                    [
                        'id' => 7,
                        'name' => 'About',
                        'url' => 'javascript:;',
                        '_open' => false,
                        'children' => [
                            [
                                'id' => 8,
                                'name' => 'About Us',
                                'url' => '/about-us',
                                '_open' => false,
                            ],
                        ]
                    ],

                    [
                        'id' => 9,
                        'name' => 'Posts',
                        'url' => '/posts',
                        '_open' => false,
                    ],

                    [
                        'id' => 10,
                        'name' => 'Contact',
                        'url' => '/contact_us',
                        '_open' => false,
                    ],
                ],
            ],
        ]);

        $repository->create([
            'name' => 'footer',
            'en' => [
                'items' => [
                    [
                        'id' => 11,
                        'name' => 'Home',
                        'url' => '/',
                        '_open' => false,
                    ],
                    [
                        'id' => 12,
                        'name' => 'About',
                        'url' => 'javascript:;',
                        '_open' => false,
                        'children' => [
                            [
                                'id' => 11,
                                'name' => 'About Us',
                                'url' => '/about-us',
                                '_open' => false,
                            ],
                        ]
                    ],

                    [
                        'id' => 13,
                        'name' => 'Posts',
                        'url' => '/posts',
                        '_open' => false,
                    ],

                    [
                        'id' => 14,
                        'name' => 'Contact',
                        'url' => '/contact_us',
                        '_open' => false,
                    ],
                ],
            ],
            'de' => [
                'items' => [
                    [
                        'id' => 15,
                        'name' => 'Home',
                        'url' => '/',
                        '_open' => false,
                    ],
                    [
                        'id' => 16,
                        'name' => 'About',
                        'url' => 'javascript:;',
                        '_open' => false,
                        'children' => [
                            [
                                'id' => 17,
                                'name' => 'About Us',
                                'url' => '/about-us',
                                '_open' => false,
                            ],
                        ]
                    ],

                    [
                        'id' => 18,
                        'name' => 'Posts',
                        'url' => '/posts',
                        '_open' => false,
                    ],

                    [
                        'id' => 19,
                        'name' => 'Contact',
                        'url' => '/contact_us',
                        '_open' => false,
                    ],
                ],
            ],
        ]);

        Schema::enableForeignKeyConstraints();
        Model::reguard();
    }
}
