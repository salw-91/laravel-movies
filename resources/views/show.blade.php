@extends('layouts.main')
@section('content')
    <div class="movie-info border-b border-gray-800">
        <div class="constainer mx-auto px-8 md:px-16 py-16 flex flex-col md:flex-row">
            <img src="https://www.kegel8.co.uk/media/wysiwyg/Kegel8/cms/blog/wp/wp-content/uploads/2019/Avatar.jpg"
                alt="parasite" class="w-64 md:w-96">
            <div class="md:ml-24">
                <h2 class="text-4xl font-semibold">Avatar (2009)</h2>

                <div class="mt-2">
                    <div class="flex items-center text-gray-400">
                        <span><svg class="fill-current text-yellow-500 w-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24">
                                <path
                                    d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.828 1.48 8.279-7.416-3.967-7.417 3.967 1.481-8.279-6.064-5.828 8.332-1.151z" />
                            </svg></span>
                        <span class="ml-1">80%</span>
                        <span class="mx-2"> | </span>
                        <span>Feb 20, 2020</span>
                        <span class="mx-2"> | </span>
                        <span>Action, Thriller, Comedy</span>
                    </div>
                    <div>
                        <p class="text-gray-300 mt-8 text-justify">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloremque tempora, provident rerum
                            non blanditiis aut odit temporibus, quas illum, quaerat dolorem quasi veniam veritatis qui.
                            Inventore quasi amet soluta voluptatibus necessitatibus, facere odio ducimus blanditiis autem
                            reiciendis consectetur debitis fuga reprehenderit quibusdam illo. Numquam quo eos quae
                            aspernatur. Nobis, magnam.
                        </p>
                        <div class="mt-12">
                            <h4 class="text-white font-semibold">Featured Cast</h4>
                            <div class="flex mt-4">
                                <div>
                                    <div>Bong Joon-ho</div>
                                    <div class="text-sm text-gray-400">Screenplay, Director, Story</div>
                                </div>
                                <div class="ml-8">
                                    <div>Han Jin-won</div>
                                    <div class="text-sm text-gray-400">Screenplay</div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-12">
                            <button
                                class="flex items-center bg-yellow-500 text-gray-900 rounded font-semibold px-5 py-4 hover:bg-yellow-600 transition ease-in-out duration-150">
                                <i class="fa fa-play-circle-o fa-lg"></i>
                                <span class="ml-2"> Play Trailer</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr class=" border-gray-600 text-center text-2xl">
        <div class="mb-10">
            <div class="container mx-auto px-8 md:px-16 pt-16">
                <div class="popular-movies">
                    <h2 class="uppercase tracking-wider text-lg font-semibold">Cast</h2>
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                        <div class="mt-8">
                            <a href="#">
                                <img src="https://www.gstatic.com/tv/thumb/persons/218027/218027_v9_bb.jpg" alt="parasite"
                                    class="hover:opacity-50 transition ease-in-out duration-150">
                            </a>
                            <div class="mt-2">
                                <a href="#" class="text-lg mt-2 hover:text-gray-300">Real Name</a>
                                <br>
                                <p class="text-sm text-gray-400">Real Name</p>
                            </div>
                        </div>
                        <div class="mt-8">
                            <a href="#">
                                <img src="https://www.gstatic.com/tv/thumb/persons/194024/194024_v9_bb.jpg" alt="parasite"
                                    class="hover:opacity-50 transition ease-in-out duration-150">
                            </a>
                            <div class="mt-2">
                                <a href="#" class="text-lg mt-2 hover:text-gray-300">Real Name</a>
                                <br>
                                <p class="text-sm text-gray-400">Real Name</p>
                            </div>
                        </div>
                        <div class="mt-8">
                            <a href="#">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/e/ed/Sigourney_Weaver_by_Gage_Skidmore.jpg"
                                    alt="parasite" class="hover:opacity-50 transition ease-in-out duration-150">
                            </a>
                            <div class="mt-2">
                                <a href="#" class="text-lg mt-2 hover:text-gray-300">Real Name</a>
                                <br>
                                <p class="text-sm text-gray-400">Real Name</p>
                            </div>
                        </div>
                        <div class="mt-8">
                            <a href="#">
                                <img src="https://www.gstatic.com/tv/thumb/persons/73978/73978_v9_bb.jpg" alt="parasite"
                                    class="hover:opacity-50 transition ease-in-out duration-150">
                            </a>
                            <div class="mt-2">
                                <a href="#" class="text-lg mt-2 hover:text-gray-300">Real Name</a>
                                <br>
                                <p class="text-sm text-gray-400">Real Name</p>
                            </div>
                        </div>
                        <div class="mt-8">
                            <a href="#">
                                <img src="https://www.gstatic.com/tv/thumb/persons/243460/243460_v9_bb.jpg" alt="parasite"
                                    class="hover:opacity-50 transition ease-in-out duration-150">
                            </a>
                            <div class="mt-2">
                                <a href="#" class="text-lg mt-2 hover:text-gray-300">Real Name</a>
                                <br>
                                <p class="text-sm text-gray-400">Real Name</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <hr class=" border-gray-600 text-center text-2xl">
        <div class="mb-10">

            <div class="container mx-auto px-8 md:px-16 pt-16">
                <div class="popular-movies">
                    <h2 class="uppercase tracking-wider text-lg font-semibold">Image</h2>
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                        <div class="mt-8">
                            <a href="#">
                                <img src="https://cdn.onebauer.media/one/empire-images/features/5b9eb4f4fd0c0bc844457c34/avatar-3.jpg?quality=50&width=1800&ratio=16-9&resizeStyle=aspectfill&format=jpg"
                                    alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150">
                            </a>

                        </div>
                        <div class="mt-8">
                            <a href="#">
                                <img src="https://fastly.syfy.com/sites/syfy/files/styles/1200x680/public/2018/11/mv5bmtkxotewotqwov5bml5banbnxkftztcwodk2mtuzna._v1_sx1777_cr001777999_al_.jpg?offset-y=0"
                                    alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150">
                            </a>
                           
                        </div>
                        <div class="mt-8">
                            <a href="#">
                                <img src="https://ca-times.brightspotcdn.com/dims4/default/c110b2b/2147483647/strip/true/crop/2048x1149+0+0/resize/840x471!/quality/90/?url=https%3A%2F%2Fcalifornia-times-brightspot.s3.amazonaws.com%2Fd0%2F25%2F1e5c199d24327df099f66d247bb4%2Fla-et-mn-avatar-sequels-pushed-back-a-year-jam-001"
                                    alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150">
                            </a>
                           
                        </div>
                        <div class="mt-8">
                            <a href="#">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcREImKkl0XyII7i2qzPoGQx7IeBJfJM2XfMBQ&usqp=CAU"
                                    alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150">
                            </a>
                           
                        </div>
                        <div class="mt-8">
                            <a href="#">
                                <img src="https://www.hindustantimes.com/rf/image_size_444x250/HT/p2/2020/05/13/Pictures/_67aa6b5c-94d7-11ea-9070-932bbf5d90a5.jpg"
                                    alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150">
                            </a>
                           
                        </div>
                        <div class="mt-8">
                            <a href="#">
                                <img src="data:image/jpeg;base64,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"
                                    alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150">
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>

        </div>
    @endsection
