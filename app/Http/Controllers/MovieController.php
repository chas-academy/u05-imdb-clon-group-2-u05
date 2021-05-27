<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{
    /**
     * List movie titles
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $column = '';
        $value = '';
        $pageTitle = '';
        $query = null;

        if ($request->title) {
            $column = 'name';
            $value = $request->title;
            $pageTitle = 'Search results:';
            $query = Movie::where($column, 'like', $value.'%')->orderBy($column)->limit(50)->get();
        }
        else if ($request->genre) {
            $column = 'genre';
            $value = $request->genre;
            $pageTitle = ucfirst($request->genre);
            $query = Movie::where($column, $value)->orderBy($column)->limit(50)->get();
        }

        $movies = $query;
        return view('result', ['title' => $pageTitle, 'movies' => $movies]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show a single movie title
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $movie = Movie::where('id', $id)->firstOrFail();

        return view('show-movie', ['movie' => $movie]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
