<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use App\Models\Movie;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $movies = array(
            array(
                'name' => 'Baby Driver',
                'description' => 'After being coerced into working for a crime boss, a young getaway driver finds himself taking part in a heist doomed to fail.',
                'genre' => 'Action',
                'year' => 2017,
                'thumbnail' => 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/rmnQ9jKW72bHu8uKlMjPIb2VLMI.jpg',
            ),
            array(
                'name' => 'Wonder Woman 1984',
                'description' => 'A botched store robbery places Wonder Woman in a global battle against a powerful and mysterious ancient force that puts her powers in jeopardy.',
                'genre' => 'Adventure',
                'year' => 2020,
                'thumbnail' => 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/dpk1PziaJApH5knT6FRZojSFAsc.jpg',
            ),
            array(
                'name' => 'Outside the Wire',
                'description' => 'In the near future, a drone pilot is sent into a deadly militarized zone and must work with an android officer to locate a doomsday device.',
                'genre' => 'Thriller',
                'year' => 2021,
                'thumbnail' => 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/6XYLiMxHAaCsoyrVo38LBWMw2p8.jpg',
            ),
            array(
                'name' => 'Hacker',
                'description' => '13-year-old Benjamin discovers that his mother didn’t die in an accident as he was led to believe. The trail leads to high-ranking officials in the Danish Secret Service. "Trust no one!", he is told.',
                'genre' => 'Action',
                'year' => 2019,
                'thumbnail' => 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/1V4cJerVN1WkWFFztB5UKWll9x7.jpg',
            ),
            array(
                'name' => 'The Walking Dead',
                'description' => 'Sheriff\'s deputy Rick Grimes awakens from a coma to find a post-apocalyptic world dominated by flesh-eating zombies. He sets out to find his family and encounters many other survivors along the way.',
                'genre' => 'Action',
                'year' => 2010,
                'thumbnail' => 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/rqeYMLryjcawh2JeRpCVUDXYM5b.jpg',
            ),
            array(
                'name' => 'Code 8',
                'description' => 'In Lincoln City, some inhabitants have extraordinary abilities. Most live below the poverty line, under the close surveillance of a heavily militarized police force. Connor, a construction worker with powers, involves with a criminal gang to help his ailing mother. (Based on the short film “Code 8,” 2016.)',
                'genre' => 'Drama',
                'year' => 2019,
                'thumbnail' => 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/izGX7npHEopDQvngYcxMJEfcFbj.jpg',
            ),
            array(
                'name' => 'Eternals',
                'description' => 'The Eternals are a team of ancient aliens who have been living on Earth in secret for thousands of years. When an unexpected tragedy forces them out of the shadows, they are forced to reunite against mankind’s most ancient enemy, the Deviants.',
                'genre' => 'Adventure',
                'year' => 2021,
                'thumbnail' => 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/6AdXwFTRTAzggD2QUTt5B7JFGKL.jpg',
            ),
            array(
                'name' => 'Mare of Easttown',
                'description' => 'A detective in a small Pennsylvania town investigates a local murder while trying to keep her life from falling apart.',
                'genre' => 'Drama',
                'year' => 2021,
                'thumbnail' => 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/78aK4Msbr22A5PGa6PZV0pAvdwf.jpg',
            ),
            array(
                'name' => 'Raya and the Last Dragon',
                'description' => 'Long ago, in the fantasy world of Kumandra, humans and dragons lived together in harmony. But when an evil force threatened the land, the dragons sacrificed themselves to save humanity. Now, 500 years later, that same evil has returned and it’s up to a lone warrior, Raya, to track down the legendary last dragon to restore the fractured land and its divided people.',
                'genre' => 'Animation',
                'year' => 2021,
                'thumbnail' => 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/lPsD10PP4rgUGiGR4CCXA6iY0QQ.jpg',
            ),
        );

        //Insert all movies 

        foreach ($movies as $movie) {
            DB::table('movies')->insert([
                'created_at' => now(),
                'updated_at' => now(),
                'name' => $movie['name'],
                'description' => $movie['description'],
                'genre' => $movie['genre'],
                'year' => $movie['year'],
                'rating' => rand(3, 10),
                'thumbnail' => $movie['thumbnail'],
            ]);
        }

        //Popular movies
        $popularMovies = Movie::take(10)->get('id');

        foreach ($popularMovies as $movie) {
            DB::table('popular_movies')->insert([
                'created_at' => now(),
                'updated_at' => now(),
                'movie_id' => $movie->id,
            ]);
        }

        //Featured movies
        $featuredMovies = Movie::take(10)->orderBy('created_at', 'ASC')->get('id');

        foreach ($featuredMovies as $movie) {
            DB::table('featured_movies')->insert([
                'created_at' => now(),
                'updated_at' => now(),
                'movie_id' => $movie->id,
            ]);
        }
    }
}
