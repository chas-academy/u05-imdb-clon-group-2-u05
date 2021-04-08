<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index() {
        $featuredMovies = DB::table('featured_movies')
        ->join('movies', 'featured_movies.movie_id', '=', 'movies.id')->get();
        return view('home', ['featuredMovies' => $featuredMovies]);
    }
}
