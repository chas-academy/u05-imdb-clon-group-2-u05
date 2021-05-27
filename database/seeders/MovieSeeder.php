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
                'genre' => 'Crime',
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
            array(
                'name' => 'Game of Thrones',
                'description' => 'Seven noble families fight for control of the mythical land of Westeros. Friction between the houses leads to full-scale war. All while a very ancient evil awakens in the farthest north. Amidst the war, a neglected military order of misfits, the Night\'s Watch, is all that stands between the realms of men and icy horrors beyond.',
                'genre' => 'Fantasy',
                'year' => 2011,
                'thumbnail' => 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/u3bZgnGQ9T01sWNhyveQz0wH0Hl.jpg',
            ),
            array(
                'name' => 'Terminator: Dark Fate',
                'description' => 'Decades after Sarah Connor prevented Judgment Day, a lethal new Terminator is sent to eliminate the future leader of the resistance. In a fight to save mankind, battle-hardened Sarah Connor teams up with an unexpected ally and an enhanced super soldier to stop the deadliest Terminator yet.',
                'genre' => 'Action',
                'year' => 2019,
                'thumbnail' => 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/vqzNJRH4YyquRiWxCCOH0aXggHI.jpg',
            ),
            array(
                'name' => 'Fear the Walking Dead',
                'description' => 'What did the world look like as it was transforming into the horrifying apocalypse depicted in "The Walking Dead"? This spin-off set in Los Angeles, following new characters as they face the beginning of the end of the world, will answer that question.',
                'genre' => 'Adventure',
                'year' => 2015,
                'thumbnail' => 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/4UjiPdFKJGJYdxwRs2Rzg7EmWqr.jpg',
            ),
            array(
                'name' => 'Ghost Lab',
                'description' => 'After witnessing a haunting in their hospital, two doctors become dangerously obsessed with obtaining scientific proof that ghosts exist.',
                'genre' => 'Horror',
                'year' => 2021,
                'thumbnail' => 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/vdMsMYfkHJ6mLht5QCg7Hl8hnEp.jpg',
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
