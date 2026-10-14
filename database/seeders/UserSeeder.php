<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $users = [
            [
                'name' => 'علی رضایی',
                'email' => 'admin@example.com',
            ],
            [
                'name' => 'سارا محمدی',
                'email' => 'editor@example.com',
            ],
            [
                'name' => 'رضا کریمی',
                'email' => 'author@example.com',
            ],
        ];

        foreach ($users as $data) {
            User::firstOrCreate(
                ['email' => $data['email']],
                [
                    'name' => $data['name'],
                    'password' => Hash::make('12345678'),
                    'email_verified_at' => now(),
                ]
            );
        }
    }
}
