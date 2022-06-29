
<?php
$isFirstnameValid = True;
$isLastnameValid = True;
$isBirthdayValid = True;
$isPasswordValid = True;
$isCrewroleFIDValid = True;
$isShipnameValid = True;

if (isset($_GET['Prename'])) {
    $isFirstnameValid = $_GET['firstname'];
    $isLastnameValid = $_GET['lastname'];
    $isBirthdayValid = $_GET['birthday'];
    $isPasswordValid = $_GET['password'];
    $isCrewroleFIDValid = $_GET['crewrolefid'];
    $isShipnameValid = $_GET['shipfid'];
}
?>

@extends('layout')

@section('content')
    <title>Edit Crew</title>
    <div class="container">
    <h3 class="text-center"> Crewmitglied Bearbeiten </h3>
    <form method="POST" class="needs-validation" action="/updateCrew/{{ $user->id }}">
    @method("put")
    @csrf
        <div class="mb-3">
            <label for="firstname" class="form-label">Firstname</label>
           <input type="text" class="form-control" id="firstname" aria-describedby="emailHelp" name="firstname" value="{{ $user->firstname }}" required> 

        </div>
        <div class="mb-3">
            <label for="lastname" class="form-label">Lastname</label>
            <input type="text" class="form-control" id="lastname" name="lastname" value="{{ $user->lastname }}" required>

        </div>
        <div class="mb-3">
            <label for="birthday" class="form-label">Birthday</label>
            <input type="text" class="form-control" id="birthday" name="birthday" value="{{ $user->birthday }}" required>
            <?php if ($isBirthdayValid == false) { ?>
                <h6 id="notValid">Geburtstag fehlt, ist falsch!</h6>
            <?php } ?>
        </div>
        <div class=" mb-3">
            <label for="password" class="form-label">Neues Password</label>
            <input type="text" class="form-control" id="password" name="password" value="" required>
            <?php if ($isPasswordValid == false) { ?>
                <h6 id="notValid">Password fehlt, ist falsch!</h6>
            <?php } ?>
        </div>
        <div class="mb-3">
            <label for="crewrolefid" class="form-label">Crewrole</label> <br>
            <select name="crewrolefid" class="custom-select custom-select-lg mb-3">
                @foreach($crewroles as $crewrole)

                <option value="{{ $crewrole->id }}" >{{ $crewrole->name }}</option>
                @endforeach 

            </select>
            <?php if ($isCrewroleFIDValid == false) { ?>
                <h6 id="notValid">CrewroleFID fehlt, ist falsch!</h6>
            <?php } ?>
        </div>
        <div class="mb-3">
            <label for="shipfid" class="form-label">Spaceshipname</label> <br>
            <select name="shipfid" class="custom-select custom-select-lg mb-3">
                @foreach($spaceships as $spaceship)

                <option value={{ $spaceship->id }} >{{ $spaceship->name }}</option>
                @endforeach 
            </select>
            <?php if ($isShipnameValid == false) { ?>
                <h6 id="notValid">Schiffsname fehlt, ist falsch!</h6>
            <?php } ?>
        </div>
        <button type=" submit" name="submit" class="btn btn-primary">Submit</button>
        <a href="/home" class="btn btn-danger">Zurück</a>
    </form>
    </div>
