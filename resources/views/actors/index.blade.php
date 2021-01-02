@extends('layouts.main')
@section('content')
    <div class="container mx-auto px-16 pt-16">
        <div class="popular-actors">
            <h2 class="uppercase tracking-wider text-yellow-500 text-lg font-semibold">Popular Actors</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                <div class="actor mt-8">
                    <a href="#">
                        <img src="https://www.gstatic.com/tv/thumb/persons/128650/128650_v9_bc.jpg" alt="profile image"
                            class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg hover:text-gray-300">jim carrey</a>
                        <div class="text-sm truncate text-gray-400">dumb and dumber</div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
