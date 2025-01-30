<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('user.index');
    }

    public function Team()
    {
        $teams = Team::paginate(5);
        return view('user.team', compact('teams'));
    }
    
}
