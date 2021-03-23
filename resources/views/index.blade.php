@extends('layouts.main')

@section('content')
<div class="container mx-auto px-4 pt-16">

    <div class="carousel relative shadow-2xl">
	<div class="carousel-inner relative overflow-hidden w-full">
	  <!--Slide 1-->
		<input class="carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden="" checked="checked">
		<div class="carousel-item absolute opacity-0" style="height:50vh;">
			<div class="block h-full w-full text-white text-3xl text-center">Baby Driver
                <a href="movie">
                    <img src="{{url('/images/BabyDriver.jpg')}}" alt="Image" class="hover:opacity-75 transition ease-in-out duration 150" />
                </a>
            </div>
		</div>
		<label for="carousel-3" class="prev control-1 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
		<label for="carousel-2" class="next control-1 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>
		
		<!--Slide 2-->
		<input class="carousel-open" type="radio" id="carousel-2" name="carousel" aria-hidden="true" hidden="">
		<div class="carousel-item absolute opacity-0" style="height:50vh;">
			<div class="block h-full w-full text-white text-3xl text-center">Zack Snyder's Justice League
                <a href="movie">
                    <img src="{{url('/images/BabyDriver.jpg')}}" alt="Image" class="hover:opacity-75 transition ease-in-out duration 150" />
                </a>
            </div>
		</div>
		<label for="carousel-1" class="prev control-2 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
		<label for="carousel-3" class="next control-2 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label> 
		
		<!--Slide 3-->
		<input class="carousel-open" type="radio" id="carousel-3" name="carousel" aria-hidden="true" hidden="">
		<div class="carousel-item absolute opacity-0" style="height:50vh;">
			<div class="block h-full w-full text-white text-3xl text-center">Lupin
                <a href="movie">
                    <img src="{{url('/images/BabyDriver.jpg')}}" alt="Image" class="hover:opacity-75 transition ease-in-out duration 150" />
                </a>
            </div>
		</div>
		<label for="carousel-2" class="prev control-3 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
		<label for="carousel-1" class="next control-3 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>

		<!-- Add additional indicators for each slide-->
		<ol class="carousel-indicators">
			<li class="inline-block mr-3">
				<label for="carousel-1" class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>
			</li>
			<li class="inline-block mr-3">
				<label for="carousel-2" class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>
			</li>
			<li class="inline-block mr-3">
				<label for="carousel-3" class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>
			</li>
		</ol>
		
	</div>
</div>

    <div class="popular-MoviesTvshows">
        <h2 class="uppercase tracking-wider text-yellow-500 text-lg font-semibold text-center mt-6">Popular movies and TV-shows</h2>
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-8">
            <div class="mt-8">
                <a href="movie">
                    <img src="{{url('/images/BabyDriver.jpg')}}" alt="Image" class="hover:opacity-75 transition ease-in-out duration 150" />
                </a>
                <div class="mt-3">
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

    <div class="rating-MoviesTvshows">
        <h2 class="uppercase tracking-wider text-yellow-500 text-lg font-semibold text-center mt-6">Highest rated movies and TV-shows</h2>
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