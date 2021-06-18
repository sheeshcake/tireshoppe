<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Admin;

use Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
            "f_name" => "Admin",
            "l_name" => "Admin",
            "email" => "pylonglobal@gmail.com",
            "address" => "Iligan City",
            "password" => Hash::make("admin")
        ]);
    }
}
