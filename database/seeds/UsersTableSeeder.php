<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'             => 1,
                'name'           => 'Admin',
                'email'          => 'admin@admin.com',
                'password'       => '$2y$10$VTKuN1FowWv1fyd2xdTkzOTw5ZYDFeooBV.j6/P99tJLfY4DYtEU6',
                'remember_token' => null,
            ],
        ];

        User::insert($users);
    }
}
