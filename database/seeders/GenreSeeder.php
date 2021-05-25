<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $genres = ['Action', 'Adventure', 'Animation', 'Comedy', 'Drama', 'Crime', 'Thriller', 'Fantasy', 'Horror', 'Mystery', 'Romance', 'Thriller'];

        foreach ($genres as $genre) {
            DB::table('genres')->insert([
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
                'genre' => $genre,
                'thumbnail' => NULL,
            ]);
        }
    }
}
