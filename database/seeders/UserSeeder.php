<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds. Adds dummy users.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(50)->create();            //User factory, generate 50 users

        //Create admin user

        DB::table('users')->insert([
            'name' => 'Chas',
            'email' => 'chas@mail.com',
            'email_verified_at' => now(),
            'created_at' => now(),
            'updated_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            'is_admin' => '1',
        ]);
    }
}
