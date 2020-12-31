@extends('layouts.main')
@section('content')
    <div class="movie-info border-b border-gray-800">
        <div class="constainer mx-auto px-8 md:px-16 py-16 flex flex-col md:flex-row">
            <img src="{{ 'https://image.tmdb.org/t/p/w500/' . $movie['backdrop_path'] }}" alt="parasite"
                class="w-auto md:w-auto ">
            <div class="md:ml-24">
                <h2 class="text-4xl font-semibold">{{ $movie['original_title'] }}</h2>

                <div class="mt-2">
                    <div class="flex items-center text-gray-400">
                        <span><i class="fas fa-star fill-current text-yellow-500 w-4"></i></span>
                        <span class="ml-1">{{ $movie['vote_average'] * 10 . '%' }}</span>
                        <span class="mx-2"> | </span>
                        <span>{{ $movie['release_date'] }}</span>
                        <span class="mx-2"> | </span>
                        <span>
                            @foreach ($movie['genres'] as $genre)
                                {{ $genre['name'] }}
                                @if (!$loop->last), @endif
                            @endforeach
                        </span>
                    </div>
                    <div>
                        <p class="text-gray-300 mt-8 text-justify">
                            {{ $movie['overview'] }}
                        </p>
                        <div class="mt-12">
                            <h4 class="text-white font-semibold">Featured Cast</h4>
                            <div class="flex mt-4">
                                @foreach ($movie['credits']['crew'] as $crew)
                                    @if ($loop->index < 3)
                                        <div class="mr-8">
                                            <div>{{ $crew['name'] }}</div>
                                            <div class="text-sm text-gray-400">{{ $crew['job'] }}</div>
                                        </div>
                                    @endif
                                @endforeach

                            </div>
                        </div>
                        <div x-data="{ isOpen: false }">
                            @if (!empty($movie['videos']['results']))
                                <div class="mt-12">
                                    <button @click="isOpen = true"
                                        class="flex inline-flex items-center bg-yellow-500 text-gray-900 rounded font-semibold px-5 py-4 hover:bg-orange-600 transition ease-in-out duration-150">
                                        <i class="fa fa-play-circle-o fa-lg"></i>
                                        <span class="ml-2">Play Trailer</span>
                                    </button>

                                </div>

                                <template x-if="isOpen">
                                    <div style="background-color: rgba(0, 0, 0, .5);"
                                        class="fixed top-0 left-0 w-full h-full flex items-center shadow-lg overflow-y-auto">
                                        <div class="container mx-auto lg:px-32 rounded-lg overflow-y-auto">
                                            <div class="bg-gray-900 rounded">
                                                <div class="flex justify-end pr-4 pt-2">
                                                    <button @click="isOpen = false" @keydown.escape.window="isOpen = false"
                                                        @click.away="isOpen = false"
                                                        class="text-3xl leading-none hover:text-gray-300">&times;
                                                    </button>
                                                </div>
                                                <div class="modal-body px-8 py-8">
                                                    <div class="responsive-container overflow-hidden relative"
                                                        style="padding-top: 56.25%">
                                                        <iframe
                                                            class="responsive-iframe absolute top-0 left-0 w-full h-full"
                                                            src="https://www.youtube.com/embed/{{ $movie['videos']['results'][0]['key'] }}"
                                                            style="border:0;" allow="autoplay; encrypted-media"
                                                            allowfullscreen></iframe>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </template>

                            @endif

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

                        @foreach ($movie['credits']['cast'] as $cast)
                            @if ($loop->index < 5)
                                <div class="mt-8">
                                    @if ($cast['profile_path'])
                                        <a href="#">
                                            <img src="{{ 'https://image.tmdb.org/t/p/w500/' . $cast['profile_path'] }}"
                                                alt="parasite" class="hover:opacity-50 transition ease-in-out duration-150">
                                        </a>
                                    @endif

                                    <div class="mt-2">
                                        <a href="#"
                                            class="text-lg mt-2 hover:text-gray-300">{{ $cast['original_name'] }}</a>
                                        <br>
                                        <p class="text-sm text-gray-400">{{ $cast['character'] }}</p>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
        <hr class=" border-gray-600 text-center text-2xl">
        <div class="mb-10" x-data="{isOpen: false, image: ''}">

            <div class="container mx-auto px-8 md:px-16 pt-16">
                <div class="popular-movies">
                    <h2 class="uppercase tracking-wider text-lg font-semibold">Image</h2>
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                        @foreach ($movie['images']['backdrops'] as $image)
                            @if ($loop->index < 9)
                                <div class="mt-8">
                                    <a @click.prevent="
                                            isOpen = true
                                            image='{{ 'https://image.tmdb.org/t/p/original/' . $image['file_path'] }}'
                                        " href="#">
                                        <img src="{{ 'https://image.tmdb.org/t/p/w500/' . $image['file_path'] }}"
                                            alt="image1" class="hover:opacity-75 transition ease-in-out duration-150">
                                    </a>
                                </div>
                            @endif
                        @endforeach
                    </div>

                    <div style="background-color: rgba(0, 0, 0, .5);"
                        class="fixed top-0 left-0 w-full h-full flex items-center shadow-lg overflow-y-auto"
                        x-show="isOpen">
                        <div class="container mx-auto lg:px-32 rounded-lg overflow-y-auto">
                            <div class="bg-gray-900 rounded">
                                <div class="flex justify-end pr-4 pt-2">
                                    <button @click="isOpen = false" @keydown.escape.window="isOpen = false"
                                        @click.away="isOpen = false"
                                        class="text-3xl leading-none hover:text-gray-300">&times;
                                    </button>
                                </div>
                                <div class="modal-body px-8 py-8">
                                    <img :src="image" alt="poster">

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    @endsection
