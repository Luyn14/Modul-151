
@extends('layout')

@section('content')
    <title>Profil</title>
    <div class="container">
        <h1 class="text-center"> Profil </h1>
    </div>
    <div class="container">
        <div class="col">
            <div class="card" style="width: 25rem;" id="user_loggedin">
                <h4 class=" card-body">
                    <table style="width:100%">
                        <h3>
                            <tr>
                                <td>
                                    <b>Firstname:</b>
                                    {{ $user->firstname }}
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>
                                    <b>Lastname:</b>
                                    {{ $user->lastname }}
                                </td>
                                <td></td>
                            </tr>
                        </h3>
                        <h4>
                            <tr>
                                <td>
                                    <b>Rolename:</b>
                                    {{ $user->crewrole->name }}
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>
                                    <b>Birthday:</b>
                                    {{ $user->birthday }}
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>
                                    <b>Spaceship:</b>
                                    {{ $user->spaceship->name }}
                                </td>
                                <td></td>
                            </tr>
                        </h4>
                    </table>
                    <button class="btn btn-danger" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> Logout </button>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                    @csrf
                    </form>
                </h4>
            </div>
        </div>
    </div>
    <br>
    <div class="container">
        <button type="button" class="btn btn-info" onclick="myCrew()">Crew</button>
        <button type="button" class="btn btn-info" onclick="myShip()">Ship</button>
        <button type="button" class="btn btn-info" onclick="myEquipment()">Equipment</button>
        <div id="crew_style">
            <h1 class="text-center"> Crew</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">CrewID</th>
                        <th scope="col">Prename</th>
                        <th scope="col">Lastname</th>
                        <th scope="col">Birthday</th>
                        <th scope="col">Rolename</th>
                    </tr>
                </thead>
                <tbody>

                    
                        @foreach($users as $user)
                        <tr>
                            <th scope="row">{{ $user->id }}</th>
                            <td>{{ $user->firstname }}</td>
                            <td>{{ $user->lastname }}</td>
                            <td>{{ $user->birthday }}</td>
                            <td>{{ $user->crewrole->name }}</td>
                            <td><a href="/fv_edit-crew/{{ $user->id }}" class="btn btn-primary">Bearbeiten</a>
                            <td><a href="/fv_delete-crew/{{ $user->id }}" class="btn btn-danger">Löschen</a>
                        </tr>
                        @endforeach 

                </tbody>
            </table>
            <a href="/register" class="btn btn-primary">Neues Crew Mitglied</a>
        </div>
        <div id="ship_style">
            <h1 class="text-center"> Ship</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">SpaceshipID</th>
                        <th scope="col">Shipname</th>
                        <th scope="col">Shiprole</th>
                        <th scope="col">Divisionname</th>
                        <th scope="col">Planetenname</th>
                        <th scope="col">Mondname / Planetside</th>
                    </tr>
                </thead>
                <tbody>

                        <tr>
                            <th scope="row">{{ $spaceship->id }}</th>
                            <td>{{ $spaceship->name }}</td>
                            <td>{{ $spaceship->spaceshiprole->name }}</td>
                            <td>{{ $spaceship->division->name }}</td>
                            <td>{{ $spaceship->destinationMoon->destination->name }}</td>
                            <td>{{ $spaceship->destinationMoon->moon->name }}</td>
                </tbody>
            </table>
            <a href="/fv_add-spaceship" class="btn btn-primary">Neues Raumschiff hinzufügen</a>
        </div>
        <div id="equipment_style">
            <h1 class="text-center">Equipment</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">EquipmentID</th>
                        <th scope="col">Equipmentname</th>
                        <th scope="col">Equipmentsize</th>
                        <th scope="col">Equipmentamount</th>
                    </tr>
                </thead>
                <tbody>
                
                        @foreach($spaceship->shipequipments as $shipequipment)
                        
                        <tr>
                            <th scope="row">{{ $shipequipment->id }}</th>
                            <td>{{ $shipequipment->name }}</td>
                            <td>{{ $shipequipment->size }}</td>
                            <td>{{ $shipequipment->pivot->amount}}</td>

                        @endforeach 

                </tbody>
            </table>
            <a href="fv_equip-equipment.php" class="btn btn-primary">Equipment ausrüsten</a>
        </div>
    </div>

    <div class="container">
        <br>
        <a href="/home" id="button-pad" class="btn btn-danger">Zurück</a>
    </div>

@endsection
