<?php

namespace App\View\Components;

use Illuminate\View\Component;

class MovieCard extends Component
{
    public $movie;
    public $genres;

    /**
     * Creating a new component.
     *
     * @param  int $movie
     * @param  int $genres
     * @return collection
     */
    public function __construct($movie, $genres)
    {
        $this->movie = $movie;
        $this->genres = $genres;

    }

    /**
     * Contents that represent the component.
     *
     * @param  void
     * @return object
     */
    public function render()
    {
        return view('components.movie-card');
    }
}
