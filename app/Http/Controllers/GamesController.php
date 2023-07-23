<?php

namespace App\Http\Controllers;

use App\Models\Games;
use App\Models\GamesMembers;
use App\Models\Membres;
use Illuminate\Http\Request;

class GamesController extends Controller
{
    //
    public function index()
    {

        $gamesActive = Games::where('isActif', 1)->get();
        $oldGames = Games::where('isActif', 0)->get();



        return view('games', compact('gamesActive', 'oldGames'));
    }


}
