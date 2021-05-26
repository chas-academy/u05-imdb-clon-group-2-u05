<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class WatchlistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::all();

        foreach ($users as $user) {                 //Add empty watchlists for all users
            DB::table('watchlists')->insert([
                'created_at' => now(),
                'updated_at' => now(),
                'user_id' => $user->id,
            ]);
        }
    }
}
