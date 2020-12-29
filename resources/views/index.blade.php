@extends('layouts.main')
@section('content')
    <div class="container mx-auto px-16 pt-16">
        <div class="popular-movies">
            <h2 class="uppercase tracking-wider text-yellow-500 text-lg font-semibold">Popular Movies</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                @foreach($popularMovies as $movie)
                <div class="mt-8">
                    <a href="{{ route('movies.show', $movie['id']) }}">
                        <img src="{{'https://image.tmdb.org/t/p/w500/' . $movie['backdrop_path']}}"
                            alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="{{ route('movies.show', $movie['id']) }}" class="text-lg mt-2 hover:text-gray-300">{{$movie['original_title']}}</a>
                        <div class="flex items-center text-gray-400">
                            <span><i class="fas fa-star fill-current text-yellow-500 w-4"></i></span>
                            <span class="ml-1">{{$movie['vote_average'] * 10 . '%'}}</span>
                            <span class="mx-2">|</span>
                            <span>{{$movie['release_date']}}</span>
                        </div>
                        <div class="text-gray-400">
                            @foreach($movie['genre_ids'] as $genre)
                                {{ $genres->get($genre)}} @if (!$loop->last), @endif
                            @endforeach
                        </div>
                    </div>
                </div>

            
                @endforeach
            
        </div>
        </div>
        <div class=" pt-16">
            <div class="popular-movies">
                <h2 class="uppercase tracking-wider text-yellow-500 text-lg font-semibold">New playing</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                    @foreach($nowPlayingMovies as $now_movies)
                    <div class="mt-8">
                        <a href="{{ route('movies.show', $now_movies['id']) }}">
                            <img src="{{'https://image.tmdb.org/t/p/w500/' . $now_movies['backdrop_path']}}"
                                alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="mt-2">
                            <a href="{{ route('movies.show', $now_movies['id']) }}" class="text-lg mt-2 hover:text-gray-300">{{$now_movies['original_title']}}</a>
                            <div class="flex items-center text-gray-400">
                                <span><i class="fas fa-star fill-current text-yellow-500 w-4"></i></span>
                                <span class="ml-1">{{$now_movies['vote_average'] * 10 . '%'}}</span>
                                <span class="mx-2">|</span>
                                <span>{{$now_movies['release_date']}}</span>
                            </div>
                            <div class="text-gray-400">
                                @foreach($now_movies['genre_ids'] as $genre)
                                    {{ $genres->get($genre)}} @if (!$loop->last), @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                    @endforeach
                    

                </div>
            </div>
        </div>
    @endsection
