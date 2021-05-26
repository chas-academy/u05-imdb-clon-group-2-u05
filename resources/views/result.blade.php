<x-app-layout>
    <div class="py-12 max-w-7xl mx-auto sm:px-6 lg:px-8">
        <h1>{{ $title }}</h1>

        <div class="grid grid-flow-rows md:grid-cols-3 sm:grid-cols-1 auto-rows-max gap-4">
        @foreach ($movies as $movie)
            <a href="{{ route('movie', $movie->id) }}" aria-label="Read more">
                <div class="p-4 bg-white sm:rounded-lg">
                    <h3 class="text-yellow-500 text-center font-bold">{{ $movie->name }}</h3>
                </div>
            </a>
        @endforeach
        </div>
    </div>
</x-app-layout>