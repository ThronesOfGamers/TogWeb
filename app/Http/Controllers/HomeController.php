<?php

namespace App\Http\Controllers;

use App\Models\Membres;
use Illuminate\Http\Request;

class homeController extends Controller
{
    //
    public function index()
    {

        $members = Membres::all();







        return view('home', compact('members')) ;
    }

}
