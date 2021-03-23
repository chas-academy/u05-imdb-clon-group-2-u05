<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie App</title>

    <link rel="stylesheet" href="/css/app.css">

    <style>
			.carousel-open:checked + .carousel-item {
				position: static;
				opacity: 100;
			}
			.carousel-item {
				-webkit-transition: opacity 0.6s ease-out;
				transition: opacity 0.6s ease-out;
			}
			#carousel-1:checked ~ .control-1,
			#carousel-2:checked ~ .control-2,
			#carousel-3:checked ~ .control-3 {
				display: block;
			}
			.carousel-indicators {
				list-style: none;
				margin: 0;
				padding: 0;
				position: absolute;
				bottom: 2%;
				left: 0;
				right: 0;
				text-align: center;
				z-index: 10;
			}
			#carousel-1:checked ~ .control-1 ~ .carousel-indicators li:nth-child(1) .carousel-bullet,
			#carousel-2:checked ~ .control-2 ~ .carousel-indicators li:nth-child(2) .carousel-bullet,
			#carousel-3:checked ~ .control-3 ~ .carousel-indicators li:nth-child(3) .carousel-bullet {
				color: #f7990c;  /*Set to match the Tailwind colour you want the active one to be */
			}
		</style>


    
</head>
<body class="font-sans bg-gray-900 text-white">
    <nav class="border-b border-gray-800">
        <div class="container mx-auto px-4 flex flex-col md:flex-row items-center justify-between px-4 py-6">
            <ul class="flex flex-col md:flex-row items-center">
                <li class="text-lg text-yellow-500 hover:text-yellow-400">
                    <a href="http://imdbclone.local">
                    <img src="{{url('/images/IMDB-logo.svg')}}" alt="Image" class="w-14 h-14 hover:opacity-75 transition ease-in-out duration 150" />
                </a>
                </li>
                <li class="md:ml-16 mt-2 md:mt-0">
                    <a href="movies" class="text-sm hover:text-gray-300">Movies</a>
                </li>
                <li class="md:ml-6 mt-2 md:mt-0">
                    <a href="tv-shows" class="text-sm hover:text-gray-300">TV shows</a>
                </li>
                <li class="md:ml-6 mt-2 md:mt-0">
                    <a href="actors" class="text-sm hover:text-gray-300">Actors</a>
                </li>
                <li class="md:ml-6 mt-2 md:mt-0">
                    <div class="flex flex-col md:flex-row items-center">
                <div class="relative mt-2 md:mt-0">
                    <input type="text" class="bg-gray-800 text-sm w-40 sm:w-40 md:w-50 lg:w-64 px-4 pl-2 py-1 focus:outline-none focus:shadow-outline" placeholder="Search">
                </div>
            </div>
                </li>
                <li class="md:ml-6 mt-4 md:mt-0">
                    <a href="watchlist">
                        <img src="{{url('/images/Watchlist.svg')}}" title="Watchlist" alt="Image" class="w-11 h-11 hover:opacity-75 transition ease-in-out duration 150" />
                    </a>
                </li>
            </ul>
            

            <div class="flex items-center">
            <div class="watchlist top-right links mt-2 md:mt-0">
                
            </div>
            </div>
            
            <div class="flex items-center">
                <div class="relative">
                    @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-500 hover:text-gray-300">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-500 hover:text-gray-300">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-500 hover:text-gray-300">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
                </div>
            </div>
            

    </nav>
    @yield('content')
    
</body>
</html>