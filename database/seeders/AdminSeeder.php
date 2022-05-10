<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin;

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
            'nama'     => 'admin',
            'email'    => 'admin@localhost.com',
            'role'    => 'admin',
            'password' => bcrypt('1234'),
        ]);

        Admin::create([
            'nama'     => 'resepsionis',
            'email'    => 'resepsionis@localhost.com',
            'role'    => 'resepsionis',
            'password' => bcrypt('1234'),
        ]);

        Admin::create([
            'nama'     => 'Fadhil',
            'email'    => 'Fadhil@gmail.com',
            'role'    => 'admin',
            'password' => bcrypt('1234'),
        ]);

        // Admin::create([
        //     'nama'     => 'Operator',
        //     'email'    => 'operator@localhost.com',
        //     'role'    => 'admin',
        //     'password' => bcrypt('1234'),
        // ]);
    }
}