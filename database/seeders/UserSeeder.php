<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{

    public function run()
    {
        $data = [
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => '123',
        ];

        User::create($data);
    }
}
