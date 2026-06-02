<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MigrateUsersRolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::query()->each(function (User $user) {
            $role = $user->role ?? 'user';

            if (! $user->hasRole($role)) {
                $user->assignRole($role);
            }
        });
    }
}
