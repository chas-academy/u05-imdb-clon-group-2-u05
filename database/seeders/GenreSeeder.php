<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds. Adds default genres.
     *
     * @return void
     */
    public function run()
    {
        $genres = ['Action', 'Adventure', 'Animation', 'Comedy', 'Drama', 'Crime', 'Fantasy', 'Horror', 'Mystery', 'Romance', 'Thriller'];

        foreach ($genres as $genre) {
            DB::table('genres')->insert([
                'created_at' => now(),
                'updated_at' => now(),
                'genre' => $genre,
                'thumbnail' => NULL,
            ]);
        }
    }
}
