<x-app-layout>
    <div class="py-12 max-w-7xl mx-auto sm:px-6 lg:px-8">
        <h1>Categories</h1>

        <div class="grid grid-flow-rows md:grid-cols-3 sm:grid-cols-1 auto-rows-max gap-4">
        @foreach ($genres as $genre)
            <a href="{{ route('genre', $genre->genre) }}" aria-label="Read more">
                <div class="p-4 bg-white">
                    <h3>{{ $genre->genre }}</h3>
                </div>
            </a>
        @endforeach
        </div>
    </div>
</x-app-layout>
