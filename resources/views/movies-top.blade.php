<div class="rating-MoviesTvshows">
        <h2 class="uppercase tracking-wider text-yellow-500 text-lg font-semibold mt-6">Highest rated</h2>
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-8">
		@foreach ($topMovies as $movie)
            <div class="mt-8">
                <a href="{{ route('movie', $movie->id) }}">
                    <img src="{{ $movie->thumbnail }}" alt="{{ $movie->name }}" class="hover:opacity-75 transition ease-in-out duration 150" />
                </a>
                <div class="mt-3">
                    <a href="{{ route('movie', $movie->id) }}" class="text-lg mt-2 hover:text-gray:300">{{ $movie->name }}</a>
                    <div class="flex items-center text-gray-400 text-sm mt-1">
                        <span>
                            <a href="{{ route('movie', $movie->id) }}"></a>
                        <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24"><g data-name="Layer 2"><path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" data-name="star"/></g></svg> 
                        </span>
                        <span class="ml-1">{{ $movie->rating }}</span>
                        <span class="mx-2">|</span>
                        <span>{{ $movie->year }}</span>
                    </div>
                    <div class="text-gray-400 text-sm">
					{{ $movie->genre }}
                    </div>
                </div>
            </div>    
		@endforeach                              
        </div> 
     