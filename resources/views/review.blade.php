<div class="py-4" id="review">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8  text-center sm:text-center md:text-left lg:text-left">
        <h1 class="text-lg font-semibold ">Review</h1>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="{{ route('add-review') }}">
                        @csrf
                        <input type="hidden" name="movie_id" value="{{ $movie->id }}" />
                        <div class="mb-4">
                            <p class="text-xl text-gray-600 font-semibold">{{ $movie->name }}</p>
                        </div>

                        <div class="mb-8">
                            <label>Rating</label>
                            <input type="radio" name="rating" value="1" required>
                            <label for="rating">1</label>

                            <input type="radio" name="rating" value="2" required>
                            <label for="rating">2</label>

                            <input type="radio" name="rating" value="3" required>
                            <label for="rating">3</label>

                            <input type="radio" name="rating" value="4" required>
                            <label for="rating">4</label>

                            <input type="radio" name="rating" value="5" required>
                            <label for="rating">5</label>
                        </div>

                        <div class="mb-8">
                            <label class="text-md text-gray-600">Write a review</label>
                                <textarea name="content-review" class="border-2 border-gray-500">
                            </textarea>
                        </div>

                        <div class="flex p-1">
                            <button role="save" class="p-3 bg-blue-800 text-white hover:bg-blue-600" required>Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>