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
     * @param int
     * @return array
     */
    public function __construct($movie, $genres)
    {
        $this->movie = $movie;
        $this->genres = $genres;

    }

    /**
     * Contents that represent the component.
     *
     * @param void
     * @return View
     */
    public function render()
    {
        return view('components.movie-card');
    }
}
