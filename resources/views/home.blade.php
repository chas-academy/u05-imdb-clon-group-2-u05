<x-app-layout>
    <div class="container mx-auto px-4 pt-7">

    <div class="new-MoviesTVshows">
        <h2 class="uppercase tracking-wider text-yellow-500 text-lg font-semibold text-center">Featured</h2>
    
        <div id="image-slider" class="splide">
	<div class="splide__track">
		<ul class="splide__list">
        @foreach ($featuredMovies as $movie) 
			<li class="splide__slide">
				<a href="{{ route('movie', $movie->id) }}">
                    <img src="{{ $movie->thumbnail }}" alt="{{ $movie->name }}" />
                </a>
			</li>
        @endforeach
		</ul>
	    </div>
        </div>
    </div>

    @include('movies-popular')
    @include('movies-top')
    </div>


</x-app-layout>
