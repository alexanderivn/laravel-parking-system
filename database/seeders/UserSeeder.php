<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $admin = User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin'),
        ]);
        $admin->assignRole('Admin');

        $operator = User::factory()->create([
            'name' => 'Operator',
            'email' => 'operator@operator.com',
            'password' => bcrypt('operator'),
        ]);
        $operator->assignRole('Operator');
    }
}
