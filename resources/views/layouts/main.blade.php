<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie App</title>

    <link rel="stylesheet" href="/css/app.css">
</head>
<body class="font-sans bg-gray-900 text-white">
    <nav class="border-b border-gray-800">
        <div class="container mx-auto px-4 flex flex-col md:flex-row items-center justify-between px-4 py-6">
            <ul class="flex flex-col md:flex-row items-center">
                <li class="text-yellow-500">IMDB-Clone
                </li>
                <li class="md:ml-16 mt-2 md:mt-0">
                    <a href="#" class="text-sm hover:text-gray-300">Movies</a>
                </li>
                <li class="md:ml-6 mt-2 md:mt-0">
                    <a href="#" class="text-sm hover:text-gray-300">TV shows</a>
                </li>
                <li class="md:ml-6 mt-2 md:mt-0">
                    <a href="#" class="text-sm hover:text-gray-300">Actors</a>
                </li>
            </ul>
            <div class="flex flex-col md:flex-row items-center">
                <div class="relative mt-2 md:mt-0">
                    <input type="text" class="bg-gray-800 text-sm w-64 sm:w-40 md:w-50 lg:w-64 px-4 pl-2 py-1 focus:outline-none focus:shadow-outline" placeholder="Search">
                    
                </div>
            </div>
            
            <div class="watchlist top-right links mt-2 md:mt-0">
                <a href="#" class="text-sm text-gray-500 hover:text-gray-300">Watchlist</a>
            </div>

            <div class="flex items-center">
                <div class="relative">
                    @if (Route::has('login'))
                <div class="top-right links mt-2 md:mt-0">
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