<?php

namespace App\Http\Controllers;

use App\Models\Games;
use App\Models\GamesMembers;
use App\Models\Membres;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GamesController extends Controller
{
    //
    public function index()
    {
        $famousGames = GamesMembers::selectRaw('COUNT(member_id) AS member_count, game_id')
            ->groupBy('game_id')
            ->orderByDesc('member_count')
            ->first();

        $gamesActive = Games::where('isActif', 1)->get();

        $oldGames = Games::where('isActif', 0)->get();

        return view('games', compact('gamesActive', 'oldGames', 'famousGames'));
    }

    public static function famousGames($idGame){
        $game = Games::find($idGame);

        return $game;
    }
}
