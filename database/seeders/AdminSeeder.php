<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
            'name' => 'Administrator',
            'email' => 'admin@localhost.com',
            'role' => 'admin',
            'password' => bcrypt('password'),
        ]);

        Admin::create([
            'name' => 'Author',
            'email' => 'author@localhost.com',
            'role' => 'author',
            'password' => bcrypt('password'),
        ]);
    }
}
