<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($title = null, $genre = null)
    {
        $column = '';
        $value = '';
        $pageTitle = '';
        $query = null;

        if (!empty($title)) {
            $column = 'name';
            $value = $title;
            $pageTitle = 'Search results';
            $query = Movie::where($column, 'like', $value.'%')->orderBy($column)->limit(50)->get();
        }
        else if (!empty($genre)) {
            $column = 'genre';
            $value = $genre;
            $pageTitle = $genre;
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
     * Display the specified resource.
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
