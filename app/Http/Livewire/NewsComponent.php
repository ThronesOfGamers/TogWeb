<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\News;
use App\Models\User;
use Livewire\Component;

class NewsComponent extends Component
{
    public function render()
    {
        $news = News::Orderby('date_publish', 'desc')->where('is_published', 1)->take(3)->get();

        return view('livewire.news-component', compact('news'));
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
