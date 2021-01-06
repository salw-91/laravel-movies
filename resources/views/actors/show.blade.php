@extends('layouts.main')

@section('content')
    <div class="movie-info border-b border-gray-800">
        <div class="container mx-auto px-4 py-16 flex flex-col md:flex-row">
            <div class="flex-none">
                <img src="{{ $actor['profile_path'] }}" alt="poster" class="w-64 lg:w-96">
                <ul class="flex items center mt-4">
                    <a href="{{ $social['facebook'] }}" title="Facebook"><i class="fab fa-facebook-square fa-2x mr-2  text-gray-400"></i></a>
                    <a href="{{ $social['instagram'] }}" title="Instagram"><i class="fab fa-instagram-square fa-2x mr-2 text-gray-400"></i></a>
                    <a href="{{ $social['twitter'] }}" title="Twitter"><i class="fab fa-twitter-square fa-2x mr-2 text-gray-400"></i></a>
                    <a href="{{ $actor['homepage'] }}" title="Website"><i class="fas fa-globe fa-2x mr-2 text-gray-400"></i></a>
                </ul>
            </div>
            <div class="md:ml-24">
                <h2 class="text-4xl mt-4 md:mt-0 font-semibold">{{ $actor['name'] }}</h2>
                <div class="flex flex-wrap items-center text-gray-400 text-sm mt-1">
                    <i class="fas fa-birthday-cake"></i><span class="ml-1">{{ $actor['birthday'] }}</span>
                    
                    <span class="mx-2">({{ $actor['age'] }} Years old)</span>
                    <span class="mx-2">|</span>
                    <span class="mx-2"><i class="fas fa-map-marker-alt mr-1"></i>{{ $actor['place_of_birth'] }}</span>
                </div>

                <p class="text-gray-300 mt-8">{{ $actor['biography'] }}</p>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-8">
                    <div class="mt-4">

                    </div>
                </div>

            </div>
        </div>
    </div> <!-- end credits-info -->

    <div class="credits border-b border-gray-800">
        <div class="container mx-auto px-4 py-16">
            <h2 class="text-4xl font-semibold">Credits</h2>
            
        </div>
    </div> <!-- end credits -->
@endsection