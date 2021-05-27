<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Watchlist;
use App\Models\Movie;
use App\Models\MovieBelongsToList;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class WatchlistController extends Controller
{
    /**
     * Display user's list.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $listId = Watchlist::where('user_id', Auth::id())->get('id')[0]->id;
    
        $movies = DB::table('movie_belongs_to_list')->join('movies', 'movie_belongs_to_list.movie_id', '=', 'movies.id')->where('watchlist_id', $listId)->select('movie_belongs_to_list.movie_id', 'movies.thumbnail', 'movies.name', 'movies.genre', 'movie_belongs_to_list.created_at')->get();
        return view('watchlist', ['movies' => $movies]);
    }

    /**
     * Add movie to watchlist
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function addMovie($id)
    {
        $listId = Watchlist::where('user_id', Auth::id())->get('id')[0]->id;
        $movieSaved = MovieBelongsToList::where('watchlist_id', $listId)->where('movie_id', $id)->exists();

        if (!$movieSaved) {
            $movie = new MovieBelongsToList;
            $movie->watchlist_id = $listId;
            $movie->movie_id = $id;
            $movie->save();
        }

        $movieData = Movie::where('id', $id)->firstOrFail();
        return view('show-movie', ['movie' => $movieData]);
    }
   
    /**
     * Remove movie from watchlist
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function removeMovie($id)
    {
        $listId = Watchlist::where('user_id', Auth::id())->get('id')[0]->id;
        MovieBelongsToList::where('movie_id', $id)->where('watchlist_id', $listId)->delete();

        return $this->show();       //Calls this class 'show' method (refresh page without js)
    }
}
