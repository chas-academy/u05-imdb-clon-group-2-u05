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
                <form method="POST" action="{{ route('find') }}">
                    @csrf
                    <input type="text" class="bg-gray-800 text-sm w-40 sm:w-40 md:w-50 lg:w-64 px-4 pl-2 py-1 focus:outline-none focus:shadow-outline" placeholder="Search" name="title">
                </form>
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
                <div class="top-right links">
                    @auth
                        <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-300 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-500 hover:text-gray-300">Login</a>
                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-500 hover:text-gray-300">Register</a>
                    @endauth
                </div>
                </div>
            </div>
            

    </nav>
