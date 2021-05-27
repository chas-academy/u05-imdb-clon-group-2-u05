<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Movie;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds. Adds dummy reviews.
     *
     * @return void
     */
    public function run()
    {
        $reviews = array(
            array(
                'text' => 'The visuals were stunning, the dialogue was on point, and the costume design was ridiculously charming and edgy. This film and these characters were made for this cast.',
                'rating' => 5,
            ),
            array(
                'text' => 'Fans will be pleased to learn this second installment is every bit as good, if not better, as its predecessor.',
                'rating' => 5,
            ),
            array(
                'text' => 'Ridiculous, but entertaining',
                'rating' => 4,
            ),
            array(
                'text' => 'What it does right, it does wonderfully.',
                'rating' => 3,
            ),
            array(
                'text' => 'The film owes something to the cheerful tradition of Ealing comedy. But the heart of the matter is never made a joke.',
                'rating' => 4,
            ),
            array(
                'text' => 'Regardless of its flaws, the film is a testament to art\'s power to freely express.',
                'rating' => 5,
            ),
            array(
                'text' => 'Really good, recommends! :D',
                'rating' => 5,
            ),
            array(
                'text' => 'One of my favourites :D',
                'rating' => 5,
            ),
            array(
                'text' => 'The special is better when it gets out of the cast\'s way and shows us what drew us to them, and them to each other.',
                'rating' => 4,
            ),
        );

        for ($i = 0; $i < 50; $i++) {
           $item = rand(0, count($reviews) - 1);

            DB::table('reviews')->insert([
                'created_at' => now(),
                'updated_at' => now(),
                'title' => substr($reviews[$item]['text'], 0, 80) . '...',
                'review_text' => $reviews[$item]['text'],
                'rating' => $reviews[$item]['rating'],
                'movie_id' => rand(1, Movie::all()->count()),
                'user_id' => rand(1, 50),
                'approved' => 1,
            ]);
        }
    }
}
