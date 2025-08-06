<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::updateOrCreate(
            [
                'email' => 'admin@arsip.go.id',
            ],
            [
                'name' => 'Super Admin',
                'email' => 'admin@arsip.go.id',
                'password' => Hash::make('password'),
                'role' => 'superadmin',
            ]
        );

        User::updateOrCreate(
            [
                'email' => 'pengolahan@arsip.go.id',
            ],
            [
                'name' => 'Direktorat Pengolahan',
                'email' => 'pengolahan@arsip.go.id',
                'password' => Hash::make('password'),
                'role' => 'arsiparis',
            ]
        );

        User::updateOrCreate(
            [
                'email' => 'pelayanan@arsip.go.id',
            ],
            [
                'name' => 'Direktorat Pelayanan',
                'email' => 'pelayanan@arsip.go.id',
                'password' => Hash::make('password'),
                'role' => 'superadmin',
            ]
        );
    }
}
