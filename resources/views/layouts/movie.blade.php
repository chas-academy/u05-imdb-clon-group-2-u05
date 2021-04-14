@extends('layouts.main')

@section('content') 
<div class="movie-info border-b border-gray-800">
<div class="container mx-auto px-4 py-16 flex flex-col md:flex-row">
                    <img src="{{url('/images/BabyDriver.jpg')}}" alt="Image" class="w-64 md:w-96 hover:opacity-75 transition ease-in-out duration 150" style="width: 24rem">
                <div class="md:ml-24">
                    <h2 class="text-4xl font-semibold">Baby Driver (2017)</h2>
                    <div class="flex flex-wrap items-center text-gray-400 text-sm mt-1">
                        <span>
                            <a href="#"></a>
                        <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24"><g data-name="Layer 2"><path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" data-name="star"/></g></svg> 
                        </span>
                        <span class="ml-1">7,6</span>
                        <span class="mx-2">|</span>
                        <span> July 26, 2017</span>
                        <span class="mx-2">|</span>
                        <span>Action, Crime, Drama</span>
                        <span class="mx-2">|</span>
                        <span>1h 53min</span>
                    </div>



                    <p class="text-gray-300 mt-8">
                        After being coerced into working for a crime boss, a young getaway driver finds himself taking part in a heist doomed to fail.
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
                </div>
</div>

</div>

<div class="movie-cast border-b border-gray-800">
    <div class="container mx-auto px-4 py-16">
        <h2 class="text-4xl font-semibold">Cast</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
            <div class="mt-8">
                <a href="#">
                    <img src="#" alt="Image" class="hover:opacity-75 transition ease-in-out duration 150" />
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
                    <img src="#" alt="Image" class="hover:opacity-75 transition ease-in-out duration 150" />
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
                    <img src="#" alt="Image" class="hover:opacity-75 transition ease-in-out duration 150" />
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
                    <img src="#" alt="Image" class="hover:opacity-75 transition ease-in-out duration 150" />
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
                    <img src="#" alt="Image" class="hover:opacity-75 transition ease-in-out duration 150" />
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
                    <img src="#" alt="Image" class="hover:opacity-75 transition ease-in-out duration 150" />
                </a>
            </div>
                        
            <div class="mt-8">
                <a href="#">
                    <img src="#" alt="Image" class="hover:opacity-75 transition ease-in-out duration 150" />
                </a>
            </div>    
                    
            <div class="mt-8">
                <a href="#">
                    <img src="#" alt="Image" class="hover:opacity-75 transition ease-in-out duration 150" />
                </a>
            </div>    

                        <div class="mt-8">
                <a href="#">
                    <img src="#" alt="Image" class="hover:opacity-75 transition ease-in-out duration 150" />
                </a>
            </div>   

                        <div class="mt-8">
                <a href="#">
                    <img src="#" alt="Image" class="hover:opacity-75 transition ease-in-out duration 150" />
                </a>
            </div>   

                        <div class="mt-8">
                <a href="#">
                    <img src="#" alt="Image" class="hover:opacity-75 transition ease-in-out duration 150" />
                </a>
            </div>   
            </div> 
    </div>
</div>
@endsection