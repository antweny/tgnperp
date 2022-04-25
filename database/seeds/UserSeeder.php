<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $userData = [
            'name' => 'User',
            'email' => 'it@tgnp.or.tz',
            'email_verified_at' => now(),
            'password' => Hash::make('EDMS@dm1n@1994'),
        ];

        $user = User::updateOrCreate($userData);

        $user->assignRole('superAdmin');

    }
}
