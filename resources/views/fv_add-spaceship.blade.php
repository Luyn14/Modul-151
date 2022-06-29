@extends('layout')

@section('content')

    <title>Raumschiff Hinzufügen</title>
    <div class="container">
    <h3 class="text-center"> Neues Raumschiff erfassen </h3>
    <form method="POST" class="needs-validation" action="/addSpaceship">
    @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Shipname</label>
            <input type="text" class="form-control" id="name" aria-describedby="emailHelp" name="name" value="" required>
        </div>
        <div class="mb-3">
            <label for="divisionId" class="form-label">Division</label> <br>
            <select name="divisionId" class="custom-select custom-select-lg mb-3">
                @foreach($divisions as $division)

                <option value={{ $division->id }} >{{ $division->name }}</option>
                @endforeach 
            </select>
        </div>
        <div class="mb-3">
            <label for="shiproleId" class="form-label">Shiprole</label> <br>
            <select name="shiproleId" class="custom-select custom-select-lg mb-3">
                @foreach($spaceshiproles as $spaceshiprole)

                <option value={{ $spaceshiprole->id }} >{{ $spaceshiprole->name }}</option>
                @endforeach 
            </select>
        </div>
        <div class="mb-3">
            <label for="destinationId" class="form-label">Planet</label> <br>
            <select name="destinationId" id="destinationId" class="custom-select custom-select-lg mb-3">
                @foreach($destinations as $destination)

                <option value={{ $destination->id }} >{{ $destination->name }}</option>
                @endforeach 
            </select>
        </div>
        <div class="mb-3">
            <label for="moonId" class="form-label">Moon</label> <br>
            <select name="moonId" id="moonId" class="custom-select custom-select-lg mb-3">
                @foreach($moons as $moon)

                <option value={{ $moon->id }} >{{ $moon->name }}</option>
                @endforeach 
            </select>
        </div>
        <button type=" submit" name="submit" class="btn btn-primary">Submit</button>
        <a href="fv_uebersicht" class="btn btn-danger">Zurück</a>
    </form>
    </div>