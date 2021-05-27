<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Movie;

class HomeController extends Controller
{
    /**
     * Fetch featured, popular and top movies for home page
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $featuredMovies = DB::table('featured_movies')
        ->join('movies', 'featured_movies.movie_id', '=', 'movies.id')->limit(5)->get();

        $popularMovies = DB::table('popular_movies')
        ->join('movies', 'popular_movies.movie_id', '=', 'movies.id')->limit(5)->get();

        $topMovies = Movie::orderBy('rating', 'desc')->limit(5)->get();

        return view('home', ['featuredMovies' => $featuredMovies, 'popularMovies' => $popularMovies, 'topMovies' => $topMovies]);
    }
}
