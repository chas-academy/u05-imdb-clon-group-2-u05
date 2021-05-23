<x-app-layout>
<div class="flex flex-col">
  <div class="my-2 overflow-x-auto sm:-mx-5 lg:mx-12">
    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
      <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
		  <h1 class="text-lg font-semibold">Watchlist</h1>
        <table class="min-w-full divide-y divide-gray-300">
          <thead class="bg-gray-50">
            <tr>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Title
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Genre
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Date Added
              </th>
              <th scope="col" class="relative px-6 py-3">
                <span class="sr-only">Review</span>
              </th>
			        <th scope="col" class="relative px-6 py-3">
                <span class="sr-only">Delete</span>
              </th>
            </tr>
          </thead>
          
		  <tbody class="bg-white divide-y divide-gray-200">
      @foreach ($movies as $movie)
            <tr>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="flex items-center">
                  <div class="flex-shrink-0 h-10 w-10">
                    <img class="h-10 w-10 rounded-full" src="{{ $movie->thumbnail }}" alt="{{ $movie->name }}">
                  </div>
                  <div class="ml-4">
                    <div class="text-sm font-medium text-gray-900">
                    {{ $movie->name }}
                    </div>
                  </div>
                </div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="text-sm text-gray-900">{{ $movie->genre }}</div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                <span class="px-2 inline-flex text-xs leading-5 text-gray-900">
                {{ \Carbon\Carbon::parse($movie->created_at)->format('Y-m-d') }}
                </span>
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                <a href="{{ route('movie', $movie->movie_id) }}/#review" class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-gray-500 hover:text-gray-900">Review</a>
              </td>
			        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                <form method="POST" action="{{ route('watchlist-remove', $movie->movie_id) }}">
                  @csrf
                  <button type="submit" class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-gray-500 hover:text-gray-900">Delete</button>
                </form>
              </td>
            </tr>
          @endforeach
          @if ($movies->count() === 0) 
          <tr>
            <td colspan="5" class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium">Your list is empty right now, let's discover some movies. 😀</td>
          </tr>
          @endif
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
</x-app-layout>