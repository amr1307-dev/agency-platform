<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\AdminUser::create([
            'name' => 'Red Sea Admin',
            'email' => 'admin@redseadigitalpro.com',
            'password' => bcrypt('admin123'),
        ]);
    }
}
