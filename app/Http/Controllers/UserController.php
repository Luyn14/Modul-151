<?php

namespace App\Http\Controllers;

use App\Models\Spaceship;
use App\Models\Crewrole;
use App\Models\User;
use App\Models\Shipequipment;
use App\Models\Division;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function logged()
    {

        $crewrolefid = auth()->user()->crewrolefid;


        return view('/home', [
            'crew' => auth()->user(),
            'crewrole' => Crewrole::find($crewrolefid)
        ]);
    }

    public function detail()
    {
        $crewrolefid = auth()->user()->crewrolefid;
        $shipfid = auth()->user()->shipfid;

        return view('fv_profil', [
            'user' => auth()->user(),
            'crewrole' => Crewrole::find($crewrolefid),
            'spaceship' => Spaceship::find($shipfid),
            'users' => User::where('shipfid', $shipfid)->get(),
            'spaceships' => Spaceship::all(),
            'shipequipments' => Shipequipment::all(),



        ]);
    }
    public function editUser(Request $request, int $userId)
    {
        return view('fv_edit-crew', [
            'user' =>  User::find($userId),
            'spaceships' => Spaceship::all(),
            'crewroles' => Crewrole::all()
        ]);
    }

    public function deleteUser(Request $request, int $userId)
    {
        return view('fv_delete-crew', [
            'user' =>  User::find($userId),
            'spaceships' => Spaceship::all(),
            'crewroles' => Crewrole::all()
        ]);
    }

    public function update(Request $request, int $userId)
    {
        $user =  User::find($userId);
        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->birthday = $request->birthday;
        $user->password = bcrypt($request->password);
        $user->crewrolefid = $request->crewrolefid;
        $user->shipfid = $request->shipfid;

        $user->save();

        return redirect('/home');
    }

    public function delete(Request $request, int $userId)
    {
        $user = User::find($userId);

        $user->delete();

        return redirect('/home');
    }
}

// $user = new User();
