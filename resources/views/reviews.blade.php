<x-app-layout>
    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8  text-center sm:text-center md:text-left lg:text-left">
        <h1 class="text-lg font-semibold ">Reviews</h1>
            @foreach ($reviews as $review)
            <div class="p-6 bg-white border-b border-gray-200">
                <img class="h-20 mr-3 w-20 rounded-full float-left" src="https://i.pravatar.cc/100?img={{ rand(0, 70) }}" alt="Avatar">
                <h3 class="strong">{!! strip_tags($review->title) !!} - {{ $review->rating }} / 5</h3>
                <p>{!! $review->review_text !!}</p>
                <small>{{ $review->name }}, {{ Carbon\Carbon::parse($review->created_at)->diffForHumans()}}</small>
            </div>
            @endforeach
        </div>
    </div>

    <div class="text-center m-5">
        <a href="{{ route('movie', $review->movie_id) }}" class="p-3 bg-blue-800 text-white hover:bg-blue-600">Back to movie</a>
    </div>
</x-app-layout>