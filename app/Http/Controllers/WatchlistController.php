<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Watchlist;
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
        $id = Watchlist::where('user_id', Auth::id())->get('id')[0]->id;
        $userBelongsToList = Watchlist::where('user_id', Auth::id())->where('id', $id)->exists();

        if ($userBelongsToList) {
            $movies = DB::table('movie_belongs_to_list')->join('movies', 'movie_belongs_to_list.movie_id', '=', 'movies.id')->where('watchlist_id', $id)->select('movie_belongs_to_list.movie_id', 'movies.thumbnail', 'movies.name', 'movies.genre', 'movie_belongs_to_list.created_at')->get();
            return view('watchlist', ['movies' => $movies]);
        }
        else {
            return response(view('errors.403'), 403);
        }
    }

    /**
     * Add movie
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function addMovie($id)
    {
        //
    }
   
    /**
     * Remove movie
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function removeMovie($id)
    {
        //
    }
}
