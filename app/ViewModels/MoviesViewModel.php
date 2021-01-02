<?php

namespace App\ViewModels;

use Spatie\ViewModels\ViewModel;

class MoviesViewModel extends ViewModel
{
    public $popularMovies;
    public $nowPlayingMovies;
    public $genres;

    public function __construct($popularMovies, $nowplayingMovies, $genres)
    {
        $this->popularMovies = $popularMovies;
        $this->nowplayingMovies = $nowplayingMovies;
        $this->genres = $genres;
    }

    public function popularMovies()
    {
        return collect($this->popularMovies)->map(function($movie){
            return collect($movie)->merge([
                'backdrop_path' => 'https://image.tmdb.org/t/p/w500/' . $movie['backdrop_path'] ,
                'vote_average' => $movie['vote_average'] * 10 . '%' ,
                'release_date' => $movie['release_date'] ,
            ]);
        });
    }
    public function nowPlayingMovies()
    {
        return collect($this->nowPlayingMovies)->map(function($movie){
            return collect($movie)->merge([
                'backdrop_path' => 'https://image.tmdb.org/t/p/w500/' . $movie['backdrop_path'] ,
                'vote_average' => $movie['vote_average'] * 10 . '%' ,
                'release_date' => $movie['release_date'] ,
            ]);
        });
    }
    public function genres()
    {
        return $this->genres;
    }
}
