<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AdminUser;

class AdminUsersSeeder extends Seeder
{
    public function run()
    {
        AdminUser::create([
            'name' => 'Admin2',
            'email' => 'admin2@example.com',
            'phone' => '54545454',
            'access_level' => 'superadmin',
            'password' => bcrypt('admin2password'),
        ]);
        // Add more admin users as needed
    }
}
