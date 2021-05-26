<x-app-layout>
<div class="movie-info border-b border-gray-800">
<div class="container mx-auto px-4 py-16 flex flex-col md:flex-row">
                    <img src="{{ $movie->thumbnail }}" alt="Image" class="w-64 md:w-96 hover:opacity-75 transition ease-in-out duration 150" style="width: 24rem">
                <div class="md:ml-24">
                    <h2 class="text-4xl font-semibold text-yellow-500">{{ $movie->name }}</h2>
                    <div class="flex flex-wrap items-center text-gray-400 text-sm mt-1">
                        <span>
                        <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24"><g data-name="Layer 2"><path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" data-name="star"/></g></svg> 
                        </span>
                        <span class="ml-1">{{ $movie->rating }}</span>
                        <span class="mx-2">|</span>
                        <span>{{ $movie->year }}</span>
                        <span class="mx-2">|</span>
                        <span>{{ $movie->genre }}</span>
                    </div>

                    <p class="text-gray-300 mt-8">
                        {{ $movie->description }}
                    </p>

                    <div class="mt-12">
                        <h4 class="text-white font-semibold">Featured Cast</h4>
                        <div class="flex mt-4">
                            <div>
                                <div>Edgar Wright</div>
                                <div class="text-sm text-gray-400">Director and Writer</div>
                            </div>
                            <div class="ml-8">
                                <div>Ansel Elgort, Jon Bernthal, Jon Hamm</div>
                                <div class="text-sm text-gray-400">Screenplay</div>
                            </div>
                        </div>
                    </div>
                    <form method="POST" action="{{ route('watchlist-add', $movie->id) }}">
                        @csrf
                        <button role="save" type="submit" class="p-3 mt-5 bg-blue-800 text-white hover:bg-blue-600">Save to watchlist</button>
                    </form>
                </div>
</div>

</div>

<div class="text-center m-5">
    <a href="{{ route('reviews', $movie->id) }}" class="p-3 bg-blue-800 text-white hover:bg-blue-600">Read user reviews</a>
</div>

@auth
    @include('review')
@endauth

<div class="movie-cast border-b border-gray-800">
    <div class="container mx-auto px-4 py-16">
        <h2 class="text-4xl font-semibold">Cast</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
            <div class="mt-8">
                <a href="#">
                    <img src="{{ $movie->thumbnail }}" alt="Image" class="hover:opacity-75 transition ease-in-out duration 150" />
                </a>
                <div class="mt-2">
                    <a href="#" class="text-lg mt-2 hover:text-gray:300">Baby</a>
                    <div class="flex items-center text-gray-400 text-sm mt-1">
                        <span>Ansel Elgort</span>
                    </div>
                </div>
            </div>
                        
            <div class="mt-8">
                <a href="#">
                    <img src="{{ $movie->thumbnail }}" alt="Image" class="hover:opacity-75 transition ease-in-out duration 150" />
                </a>
                <div class="mt-2">
                    <a href="#" class="text-lg mt-2 hover:text-gray:300">Griff</a>
                    <div class="flex items-center text-gray-400 text-sm mt-1">
                        <span>	Jon Bernthal</span>
                    </div>
                </div>
            </div>    
                    
            <div class="mt-8">
                <a href="#">
                    <img src="{{ $movie->thumbnail }}" alt="Image" class="hover:opacity-75 transition ease-in-out duration 150" />
                </a>
                <div class="mt-2">
                    <a href="#" class="text-lg mt-2 hover:text-gray:300">Buddy</a>
                    <div class="flex items-center text-gray-400 text-sm mt-1">
                        <span>Jon Hamm</span>
                    </div>
                </div>
            </div>    

                        <div class="mt-8">
                <a href="#">
                    <img src="{{ $movie->thumbnail }}" alt="Image" class="hover:opacity-75 transition ease-in-out duration 150" />
                </a>
                <div class="mt-2">
                    <a href="#" class="text-lg mt-2 hover:text-gray:300">Darling</a>
                    <div class="flex items-center text-gray-400 text-sm mt-1">
                        <span>Eiza González</span>
                    </div>
                </div>
            </div>   

                        <div class="mt-8">
                <a href="#">
                    <img src="{{ $movie->thumbnail }}" alt="Image" class="hover:opacity-75 transition ease-in-out duration 150" />
                </a>
                <div class="mt-2">
                    <a href="#" class="text-lg mt-2 hover:text-gray:300">Barista</a>
                    <div class="flex items-center text-gray-400 text-sm mt-1">
                        <span>Micah Howard</span>
                    </div>
                </div>
            </div>   
            </div> 
    </div>
</div>

<div class="movie-cast border-b border-gray-800">
    <div class="container mx-auto px-4 py-16">
        <h2 class="text-4xl font-semibold">Images</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-8">
            <div class="mt-8">
                <a href="#">
                    <img src="{{ $movie->thumbnail }}" alt="Image" class="hover:opacity-75 transition ease-in-out duration 150" />
                </a>
            </div>
                        
            <div class="mt-8">
                <a href="#">
                    <img src="{{ $movie->thumbnail }}" alt="Image" class="hover:opacity-75 transition ease-in-out duration 150" />
                </a>
            </div>    
                    
            <div class="mt-8">
                <a href="#">
                    <img src="{{ $movie->thumbnail }}" alt="Image" class="hover:opacity-75 transition ease-in-out duration 150" />
                </a>
            </div>    

                        <div class="mt-8">
                <a href="#">
                    <img src="{{ $movie->thumbnail }}" alt="Image" class="hover:opacity-75 transition ease-in-out duration 150" />
                </a>
            </div>   

                        <div class="mt-8">
                <a href="#">
                    <img src="{{ $movie->thumbnail }}" alt="Image" class="hover:opacity-75 transition ease-in-out duration 150" />
                </a>
            </div>   

                        <div class="mt-8">
                <a href="#">
                    <img src="{{ $movie->thumbnail }}" alt="Image" class="hover:opacity-75 transition ease-in-out duration 150" />
                </a>
            </div>   
            </div> 
    </div>
</div>
</x-app-layout>