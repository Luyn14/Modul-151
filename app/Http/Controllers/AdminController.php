<?php

namespace App\Http\Controllers;


use App\Models\Spaceship;
use App\Models\Crewrole;
use App\Models\User;
use App\Models\Shipequipment;
use App\Models\Division;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function detail()
    {
        $crewrolefid = auth()->user()->crewrolefid;
        $shipfid = auth()->user()->shipfid;

        return view('fv_uebersicht', [
            'user' => auth()->user(),
            'crewrole' => Crewrole::all(),
            'spaceship' => Spaceship::all(),
            'users' => User::all(),
            'spaceships' => Spaceship::all(),
            'shipequipments' => Shipequipment::all(),



        ]);
    }
}
