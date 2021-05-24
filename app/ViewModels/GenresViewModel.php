<?php

namespace App\ViewModels;

use Spatie\ViewModels\ViewModel;

class GenresViewModel extends ViewModel
{
    public $genres;
    public function __construct($genres)
    {
        $this->genres = $genres;
    }

    public function genres()
    {
        return collect($this->genres)->mapWithKeys(function ($genre) {
            return [$genre['id'] => $genre['name']];
        });
    }
    
}
