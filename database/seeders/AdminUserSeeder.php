<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $email = env('USER_EMAIL', 'tayouza@admin');
        $hasUser = User::query()->where('email', $email)->count();
        if($hasUser == 0){
            User::query()->create([
                'name'     => 'Tayouza',
                'email'    => $email,
                'password' => Hash::make(env('USER_PASSWORD', '123456'))
            ]);
        }

    }
}
