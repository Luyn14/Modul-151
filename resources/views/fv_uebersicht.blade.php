
@extends('layout')

@section('content')
    <title>Admin-Flottenübersicht</title>
    <div class="container">
        <h1 class="text-center" id="text-underlay-log"> Flotten-Übersicht </h1>
    </div>
    <div class="container">
        <button type="button" class="btn btn-info" onclick="myCrew()">Crew</button>
        <button type="button" class="btn btn-info" onclick="myShip()">Ship</button>
        <button type="button" class="btn btn-info" onclick="myEquipment()">Equipment</button>
        <div id="crew_style">
            <h1 class="text-center">Crew</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">CrewID</th>
                        <th scope="col">Prename</th>
                        <th scope="col">Lastname</th>
                        <th scope="col">Birthday</th>
                        <th scope="col">Password</th>
                        <th scope="col">Crewrole</th>
                        <th scope="col">Spaceship</th>
                    </tr>
                </thead>
                <tbody>

                    <!-- while schlaufe --> 
                    
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



                    <!-- while schlaufe schliessen --> 


                </tbody>
            </table>
            <a href="/register" class="btn btn-primary">Neues Crew Mitglied</a>
        </div>
        <div id="ship_style">
            <h1 class="text-center">Ship</h1>
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
                    <!--while schlaufe--> 

                        @foreach($spaceships as $spaceship)
                        <tr>
                            <th scope="row">{{ $spaceship->id }}</th>
                            <td>{{ $spaceship->name }}</td>
                            <td>{{ $spaceship->spaceshiprole->name }}</td>
                            <td>{{ $spaceship->division->name }}</td>
                            <td>{{ $spaceship->destinationMoon->destination->name }}</td>
                            <td>{{ $spaceship->destinationMoon->moon->name }}</td>
                           {{--   <td><a href="/fv_edit-crew/{{ $user->id }}" class="btn btn-primary">Bearbeiten</a>
                            <td><a href="fv_delete-crew.php?id=" class="btn btn-danger">Löschen</a>
                        </tr>--}}
                        @endforeach


                        <!-- while schlaufe schliessen --> 



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
                        <th scope="col">Shipname</th>
                    </tr>
                </thead>
                <tbody>

                    <!-- while schlaufe --> 
                    
                    @foreach($spaceships as $spaceship)
                        @foreach($spaceship->shipequipments as $shipequipment)
                        
                        <tr>
                            <th scope="row">{{ $shipequipment->id }}</th>
                            <td>{{ $shipequipment->name }}</td>
                            <td>{{ $shipequipment->size }}</td>
                            <td>{{ $shipequipment->pivot->amount}}</td>
                            <td>{{ $spaceship->name }}


                        @endforeach 
                    @endforeach
                    

                    <!-- while schlaufe schlissen --> 


                    
                </tbody>
            </table>
            <a href="fv_equip-equipment.php" class="btn btn-primary">Equipment ausrüsten</a>
        </div>
    </div>
    <div class="container">
        <br>
        <a href="/home" class="btn btn-danger">Zurück</a>

    </div>
</body>

</html>