<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ArtistsToFollow extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $artists = [
            ['img' => 'alessia.png', 'name' => 'alessia_draws'],
            ['img' => 'anne.png', 'name' => 'just_anne'],
            ['img' => 'mr-anderson.png', 'name' => 'Mr. Anderson'],
            ['img' => 'michael.png', 'name' => 'Michael'],
        ];
        return view('components.artists-to-follow', compact('artists'));
    }
}
