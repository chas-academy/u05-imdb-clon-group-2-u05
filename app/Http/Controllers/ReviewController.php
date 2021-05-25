<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($movieId)
    {
        $reviews = Review::where('movie_id', $movieId)->where('approved', '1')->join('users', 'users.id', '=', 'reviews.user_id')->select('reviews.created_at', 'title', 'review_text', 'rating', 'name', 'movie_id')->orderBy('created_at', 'DESC')->get();

        return view('reviews', ['reviews' => $reviews]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request) {
            $review = new Review;
            $review->title = substr($request->input('content-review'), 0, 90) . '...';;
            $review->review_text = $request->input('content-review');
            $review->rating = $request->input('rating');
            $review->movie_id = $request->input('movie_id');
            $review->user_id = Auth::id();

            $review->save();
        }

        return redirect()->route('movie', ['id' => $request->input('movie_id')]);
    }
}
