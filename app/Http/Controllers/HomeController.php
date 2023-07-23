<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Games;
use App\Models\Membres;
use App\Models\News;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {


        $games = Games::all()->where('isActif', true);
        $news = News::Orderby('date_publish', 'desc')->where('is_published', 1)->take(5)->get();






        return view('home', compact( 'games', 'news')) ;
    }


    public static function authorName($authorid){

        $author = User::find($authorid);
        return $author->name;

    }
    public static function categoryName($categoryid){

        $category = Category::find($categoryid);
        return $category->name;

    }

}
