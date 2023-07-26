<?php

namespace App\Http\Controllers;

use App\Models\GamesMembers;
use App\Models\Membres;
use Illuminate\Http\Request;

class MembersController extends Controller
{
    //
    public function index()
    {
        $Members = GamesMembers::all();

        return view('members', compact('Members'));
    }

}
