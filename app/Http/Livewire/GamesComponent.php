<?php

namespace App\Http\Livewire;

use App\Models\Games;
use Livewire\Component;

class GamesComponent extends Component
{
    public function render()
    {
        $games = Games::all()->where('isActif', true);


        return view('livewire.games-component', compact('games'));
    }
}
