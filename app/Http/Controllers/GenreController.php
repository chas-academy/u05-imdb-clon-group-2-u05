<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    /**
     * Get all genres
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $genres = Genre::All();
        return view('show-genres', ['genres' => $genres]);
    }
}
