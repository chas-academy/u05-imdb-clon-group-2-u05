@extends('layouts.main')

@section('content')

<div class="container mx-auto px-4 pt-7">

    <div class="new-MoviesTVshows">
        <h2 class="uppercase tracking-wider text-yellow-500 text-lg font-semibold text-center">Featured</h2>
    
    <!--Slider--> 
    <div class="carousel relative shadow-2xl">
	<div class="carousel-inner relative overflow-hidden w-full">

		<input class="carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden="" checked="checked">
		<div class="carousel-item absolute opacity-0" style="height:70vh;">
			<div class="block h-full w-full text-white text-lg text-center font-semibold">Baby Driver
                <a href="movie">
                    <img src="{{url('/images/BabyDriver.jpg')}}" alt="Image" class="hover:opacity-75 transition ease-in-out duration 150" />
                </a>
            </div>
		</div>
		<label for="carousel-3" class="prev control-1 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
		<label for="carousel-2" class="next control-1 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>
		
		<input class="carousel-open" type="radio" id="carousel-2" name="carousel" aria-hidden="true" hidden="">
		<div class="carousel-item absolute opacity-0" style="height:70vh;">
			<div class="block h-full w-full text-white text-lg font-semibold text-center">Zack Snyder's Justice League
                <a href="movie">
                    <img src="{{url('/images/JusticeLeague.jpg')}}" alt="Image" class="hover:opacity-75 transition ease-in-out duration 150" />
                </a>
            </div>
		</div>
		<label for="carousel-1" class="prev control-2 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
		<label for="carousel-3" class="next control-2 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label> 
		
		<input class="carousel-open" type="radio" id="carousel-3" name="carousel" aria-hidden="true" hidden="">
		<div class="carousel-item absolute opacity-0" style="height:70vh;">
			<div class="block h-full w-full text-white text-lg font-semibold text-center">Lupin
                <a href="movie">
                    <img src="{{url('/images/Lupin.jpg')}}" alt="Image" class="hover:opacity-75 transition ease-in-out duration 150" />
                </a>
            </div>
		</div>
		<label for="carousel-2" class="prev control-3 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
		<label for="carousel-1" class="next control-3 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>

		<ol class="carousel-indicators">
			<li class="inline-block mr-3">
				<label for="carousel-1" class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-yellow-700">•</label>
			</li>
			<li class="inline-block mr-3">
				<label for="carousel-2" class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-yellow-700">•</label>
			</li>
			<li class="inline-block mr-3">
				<label for="carousel-3" class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-yellow-700">•</label>
			</li>
		</ol>
		
	</div>
</div>
</div>

    <div class="popular-MoviesTvshows">
        <h2 class="uppercase tracking-wider text-yellow-500 text-lg font-semibold mt-8">Popular</h2>
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-8">
            <div class="mt-8">
                <a href="movie">
                    <img src="{{url('/images/Avengers.jpg')}}" alt="Image" class="hover:opacity-75 transition ease-in-out duration 150" />
                </a>
                <div class="mt-3">
                    <a href="movie" class="text-lg mt-2 hover:text-gray:300">Avengers: Endgame</a>
                    <div class="flex items-center text-gray-400 text-sm mt-1">
                        <span>
                            <a href="#"></a>
                        <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24"><g data-name="Layer 2"><path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" data-name="star"/></g></svg> 
                        </span>
                        <span class="ml-1">8,4</span>
                        <span class="mx-2">|</span>
                        <span> April 24, 2019</span>
                    </div>
                    <div class="text-gray-400 text-sm">
                        Action, Adventure, Drama 
                    </div>
                </div>
            </div>
                        
            <div class="mt-8">
                <a href="movie">
                    <img src="{{url('/images/BehindHerEyes.jpg')}}" alt="Image" class="hover:opacity-75 transition ease-in-out duration 150" />
                </a>
                <div class="mt-2">
                    <a href="movie" class="text-lg mt-2 hover:text-gray:300">Behind Her Eyes</a>
                    <div class="flex items-center text-gray-400 text-sm mt-1">
                        <span>
                            <a href="#"></a>
                        <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24"><g data-name="Layer 2"><path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" data-name="star"/></g></svg> 
                        </span>
                        <span class="ml-1">7,2</span>
                        <span class="mx-2">|</span>
                        <span> Februari 17, 2021</span>
                    </div>
                    <div class="text-gray-400 text-sm">
                        Drama, Mystery, Thriller 
                    </div>
                </div>
            </div>    
                    
            <div class="mt-8">
                <a href="movie">
                    <img src="{{url('/images/Coming2America.jpg')}}" alt="Image" class="hover:opacity-75 transition ease-in-out duration 150" />
                </a>
                <div class="mt-2">
                    <a href="movie" class="text-lg mt-2 hover:text-gray:300">Coming 2 America</a>
                    <div class="flex items-center text-gray-400 text-sm mt-1">
                        <span>
                            <a href="#"></a>
                        <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24"><g data-name="Layer 2"><path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" data-name="star"/></g></svg> 
                        </span>
                        <span class="ml-1">5,4</span>
                        <span class="mx-2">|</span>
                        <span>  March 5, 2021</span>
                    </div>
                    <div class="text-gray-400 text-sm">
                        Comedy 
                    </div>
                </div>
            </div>  

            <div class="mt-8">
                <a href="movie">
                    <img src="{{url('/images/Soul.jpg')}}" alt="Image" class="hover:opacity-75 transition ease-in-out duration 150" />
                </a>
                <div class="mt-2">
                    <a href="movie" class="text-lg mt-2 hover:text-gray:300">Soul</a>
                    <div class="flex items-center text-gray-400 text-sm mt-1">
                        <span>
                            <a href="#"></a>
                        <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24"><g data-name="Layer 2"><path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" data-name="star"/></g></svg> 
                        </span>
                        <span class="ml-1">8,1</span>
                        <span class="mx-2">|</span>
                        <span> December 25, 2020</span>
                    </div>
                    <div class="text-gray-400 text-sm">
                        Animation, Adventure, Comedy
                    </div>
                </div>
            </div>

            <div class="mt-8">
                <a href="movie">
                    <img src="{{url('/images/Tenet.jpg')}}" alt="Image" class="hover:opacity-75 transition ease-in-out duration 150" />
                </a>
                <div class="mt-2">
                    <a href="movie" class="text-lg mt-2 hover:text-gray:300">Tenet</a>
                    <div class="flex items-center text-gray-400 text-sm mt-1">
                        <span>
                            <a href="#"></a>
                        <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24"><g data-name="Layer 2"><path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" data-name="star"/></g></svg> 
                        </span>
                        <span class="ml-1">7,5</span>
                        <span class="mx-2">|</span>
                        <span> August 26, 2020</span>
                    </div>
                    <div class="text-gray-400 text-sm">
                        Action, Crime, Drama 
                    </div>
                </div>
            </div>                                      
            </div> 
</div>

    <div class="rating-MoviesTvshows">
        <h2 class="uppercase tracking-wider text-yellow-500 text-lg font-semibold mt-6">Highest rated</h2>
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-8">
            <div class="mt-8">
                <a href="movie">
                    <img src="{{url('/images/BabyDriver.jpg')}}" alt="Image" class="hover:opacity-75 transition ease-in-out duration 150" />
                </a>
                <div class="mt-2">
                    <a href="movie" class="text-lg mt-2 hover:text-gray:300">Baby Driver</a>
                    <div class="flex items-center text-gray-400 text-sm mt-1">
                        <span>
                            <a href="#"></a>
                        <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24"><g data-name="Layer 2"><path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" data-name="star"/></g></svg> 
                        </span>
                        <span class="ml-1">7,6</span>
                        <span class="mx-2">|</span>
                        <span> July 26, 2017</span>
                    </div>
                    <div class="text-gray-400 text-sm">
                        Action, Crime, Drama 
                    </div>
                </div>
            </div>
                                   
            <div class="mt-8">
                <a href="movie">
                    <img src="{{url('/images/BabyDriver.jpg')}}" alt="Image" class="hover:opacity-75 transition ease-in-out duration 150" />
                </a>
                <div class="mt-2">
                    <a href="movie" class="text-lg mt-2 hover:text-gray:300">Baby Driver</a>
                    <div class="flex items-center text-gray-400 text-sm mt-1">
                        <span>
                            <a href="#"></a>
                        <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24"><g data-name="Layer 2"><path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" data-name="star"/></g></svg> 
                        </span>
                        <span class="ml-1">7,6</span>
                        <span class="mx-2">|</span>
                        <span> July 26, 2017</span>
                    </div>
                    <div class="text-gray-400 text-sm">
                        Action, Crime, Drama 
                    </div>
                </div>
            </div>    
          
            <div class="mt-8">
                <a href="movie">
                    <img src="{{url('/images/BabyDriver.jpg')}}" alt="Image" class="hover:opacity-75 transition ease-in-out duration 150" />
                </a>
                <div class="mt-2">
                    <a href="movie" class="text-lg mt-2 hover:text-gray:300">Baby Driver</a>
                    <div class="flex items-center text-gray-400 text-sm mt-1">
                        <span>
                            <a href="#"></a>
                        <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24"><g data-name="Layer 2"><path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" data-name="star"/></g></svg> 
                        </span>
                        <span class="ml-1">7,6</span>
                        <span class="mx-2">|</span>
                        <span> July 26, 2017</span>
                    </div>
                    <div class="text-gray-400 text-sm">
                        Action, Crime, Drama 
                    </div>
                </div>
            </div>     
        
            <div class="mt-8">
                <a href="movie">
                    <img src="{{url('/images/BabyDriver.jpg')}}" alt="Image" class="hover:opacity-75 transition ease-in-out duration 150" />
                </a>
                <div class="mt-2">
                    <a href="movie" class="text-lg mt-2 hover:text-gray:300">Baby Driver</a>
                    <div class="flex items-center text-gray-400 text-sm mt-1">
                        <span>
                            <a href="#"></a>
                        <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24"><g data-name="Layer 2"><path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" data-name="star"/></g></svg> 
                        </span>
                        <span class="ml-1">7,6</span>
                        <span class="mx-2">|</span>
                        <span> July 26, 2017</span>
                    </div>
                    <div class="text-gray-400 text-sm">
                        Action, Crime, Drama 
                    </div>
                </div>
            </div>     
      
            <div class="mt-8">
                <a href="movie">
                    <img src="{{url('/images/BabyDriver.jpg')}}" alt="Image" class="hover:opacity-75 transition ease-in-out duration 150" />
                </a>
                <div class="mt-2">
                    <a href="movie" class="text-lg mt-2 hover:text-gray:300">Baby Driver</a>
                    <div class="flex items-center text-gray-400 text-sm mt-1">
                        <span>
                            <a href="#"></a>
                        <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24"><g data-name="Layer 2"><path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z" data-name="star"/></g></svg> 
                        </span>
                        <span class="ml-1">7,6</span>
                        <span class="mx-2">|</span>
                        <span> July 26, 2017</span>
                    </div>
                    <div class="text-gray-400 text-sm">
                        Action, Crime, Drama 
                    </div>
                </div>
            </div>     
        </div> 
    </div>

    @endsection

