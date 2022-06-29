<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Spaceship;
use App\Models\Spaceshiprole;
use App\Models\Division;
use App\Models\Destination;
use App\Models\DestinationMoon;
use App\Models\Moon;

class SpaceshipController extends Controller
{
    public function index()
    {
        return view('/register', ['spaceship' => Spaceship::all()]);
    }

    public function detail(Request $request)
    {
        return view(
            'fv_add-spaceship',

            [
                'spaceships' => Spaceship::all(),
                'spaceshiproles' => Spaceshiprole::all(),
                'divisions' => Division::all(),
                'destinations' => Destination::all(),
                'moons' => Moon::all(),
            ]

        );
    }

    public function addSpaceship(Request $request)
    {
        $spaceship = new Spaceship();
        $spaceship->name = $request->name;
        $spaceship->division_id = $request->divisionId;
        $spaceship->spaceshiprole_id = $request->shiproleId;

        $destinationMoon = DestinationMoon::where('destination_id', '=', $request->destinationId)
            ->where('moon_id', '=', $request->moonId)
            ->first();

        $spaceship->destinationMoon_id = $destinationMoon->id;

        $spaceship->save();


        return redirect('/fv_uebersicht');
    }
}
