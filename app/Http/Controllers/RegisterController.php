<?php

namespace App\Http\Controllers;

use App\Models\Spaceship;
use App\Models\User;
use App\Models\Crewrole;
use Illuminate\Http\Request;


class RegisterController extends Controller
{


    public function detail(Request $request)
    {

        return view(
            'register',

            [
                'spaceships' => Spaceship::all(),
                'crewroles' => Crewrole::all(),
                'user' => auth()->user()
            ]

        );
    }

    public function addCrew(Request $request)
    {
        $user = new User();
        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->birthday = $request->birthday;
        $user->password = bcrypt($request->password);
        $user->crewrolefid = $request->crewrolefid;
        $user->shipfid = $request->shipfid;

        $user->save();

        return redirect('/fv_uebersicht');
    }
}
