<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admins = [
            'info@southwinesacademy.com',
            'pilar.perez@southwinesacademy.com',
            'ana.hergueta@southwinesacademy.com',
            'estrella123@gmail.com',
        ];

        foreach ($admins as $admin) {
            DB::table('users')->insert([
                'name' => explode('@', $admin)[0],
                'email' => $admin,
                'password' => Hash::make('password'), // Cambiar la contraseña según sea necesario
                'is_admin' => true,
                'email_verified_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
