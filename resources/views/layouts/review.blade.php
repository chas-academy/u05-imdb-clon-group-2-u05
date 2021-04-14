<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js" integrity="sha256-XF29CBwU1MWLaGEnsELogU6Y6rcc5nCkhhx89nFMIDQ=" crossorigin="anonymous"></script>
<script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
	
@extends('layouts.main')
@section('content') 
  
<div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8  text-center sm:text-center md:text-left lg:text-left">
        <h1 class="text-lg font-semibold ">Review</h1>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="action.php">
                        <div class="mb-4">
                            <p class="text-xl text-gray-600 font-semibold">Baby Driver</p>
                        </div>

<!--                       <div class="mb-4">
                            <label class="text-md text-gray-600">Rate Movie...</label></br>
                            <input type="num" class="text-gray-600 border-2 border-gray-300 p-1 w-32" name="userRating" id="userRating"></input>
                        </div> --> 

                        <div class="mb-8">
                            <label class="text-md text-gray-600">Write a review</label>
                            <textarea name="content" class="border-2 border-gray-500">
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

    <script>
        CKEDITOR.replace( 'content' );
    </script>

@endsection









