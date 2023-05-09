<?php

namespace Database\Seeders;

use App\Repositories\UserRepository;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @param UserRepository $repository
     */
    public function run(UserRepository $repository): void
    {
        $users = [
            [
                'first_name' => 'متین',
                'last_name' => 'نوروزی',
                'role' => 'developer',
                'email' => '100ztaa@gmail.com',
                'password' => bcrypt('dev.Ma1in1380')
            ],
            [
                'first_name' => 'مهدی',
                'last_name' => 'اسداللهی',
                'role' => 'admin',
                'email' => 'asaad@gmail.com',
                'password' => bcrypt('owWen2w1*')
            ],
            [
                'first_name' => 'کاربر',
                'last_name' => 'تست',
                'role' => 'user',
                'email' => 'test@gmail.com',
                'password' => bcrypt('11111111')
            ]
        ];

        foreach ($users as $user){
            $repository->create(array_merge($user,['last_login'  => now()]));
        }
    }
}
