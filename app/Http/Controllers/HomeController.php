<?php

namespace App\Http\Controllers;

use App\Models\Games;
use App\Models\Membres;
use App\Models\News;
use Illuminate\Http\Request;

class homeController extends Controller
{
    //
    public function index()
    {

        $members = Membres::all();
        $games = Games::all()->where('isActif', true);
        $news = News::Orderby('date_publish', 'desc')->where('is_published', 'true')->take(5)->get();






        return view('home', compact('members' , 'games', 'news')) ;
    }

}
