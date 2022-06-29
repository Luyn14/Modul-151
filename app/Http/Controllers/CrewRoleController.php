<?php

namespace App\Http\Controllers;

use App\Models\Crewrole;
use App\Models\Crew;
use Illuminate\Http\Request;

class CrewRoleController extends Controller
{


    public function index()
    {
        return view('/register', ['crewrole' => Crewrole::all()]);
    }

    public function detail()
    {
        return view('/register', ['crewrole' => Crewrole::find(1)]);
    }
}
