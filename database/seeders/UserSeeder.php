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
            'info@southwinesacademy.com' => 'Usuario1!',
            'pilar.perez@southwinesacademy.com' => 'Usuario1!',
            'ana.hergueta@southwinesacademy.com' => 'Usuario1!',
            'estrella123@gmail.com' => 'Usuario1!', 
        ];

        foreach ($admins as $admin => $password) {
            DB::table('users')->insert([
                'name' => explode('@', $admin)[0],
                'email' => $admin,
                'password' => bcrypt($password), 
                'is_admin' => true,
                'email_verified_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
