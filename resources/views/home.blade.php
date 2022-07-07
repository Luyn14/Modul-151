@extends('layout')

@section('content')
    <title>Flottenverwaltung_Login</title>

    <div class="container">
        <h1 class="text-center" id="text-underlay-log">
            <b>Flottenverwaltung</b>
        </h1>

        <h3 id="text-underlay-log"><b>Flotten Übersicht</b></h3>
        <form method="POST" action="../Controller/login.php">
            @csrf
            <div class="row">
                <div class="col-3 col-xs-5 col-md-5 col-lg-6 col-xl-8">
                    <div class="row">
                        <img src=" ../Images/Fleet_Titlescreen.jpg" class="card-img-top" alt="..." id="img_ts">
                    </div>
                    <div class=" card" style="width: auto;" id="underlay">
                        <h4 class="card-body">
                            <table style="width:100%">
                                <tr>
                                    <td>
                                        <b>Anzahl Raumschiffe:</b>
                                    </td>
                                    <td> x<?php /* echo $count_Spaceship */ ?> </td>
                                </tr>

                                <tr>
                                    <td>
                                        <b>Anzahl Raumschiffe:</b>
                                    </td>
                                    <td> x </td>
                                </tr>

                                <tr>
                                    <td>
                                        <b>Anzahl Crewmitglieder:</b>
                                    </td>
                                    <td> x<?php /* echo $count_Crew */ ?> </td>
                                </tr>
                            </table>
                        </h4>
                    </div>
                    <h3 id="text-underlay-log"><b>Sternenkarte</b></h3>
                    <img src="../Images/Starmap.jpg" class="card-img-top" alt="..." id="img_ts">
                    <br>
                    <h3 id="text-underlay-log"><b>Aktuelles</b></h3>
                    <div id="underlay">
                        <h4>How to Deal With Rocket Boosters and Other Giant Space Garbage</h4>
                        As an errant SpaceX rocket booster careens toward the moon, here are some of the ways space agencies
                        and companies are trying to deal with huge pieces of debris.
                        <h4>To Study the Next Earth, NASA May Need to Throw Some Shade</h4>
                        The agency wants to hunt exoplanets, so it’s designing star shades and coronagraphs that block out
                        starlight and give telescopes a clear view.
                    </div>
                </div>




                <div class="col">
                    <div class="card" style="width: 25rem;" id="user_loggedin">
                        <div class="card-body">
                            <h4>Eingelogt als: </h4>
                            <h3 class="card-title">
                                <a href="/fv_profil">
                                    {{ $crew->firstname }} {{ $crew->lastname }}
                                </a>
                            </h3>
                            <h4> {{ $crew->crewrole->name }} <br></h4>
                            -----
                        </div>
                    </div>
                    <br>
                    <div class="card" style="width: 25rem;" id="cards">
                        <img src="../Images/Ship_Overview.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><a href="/fv_uebersicht">Admin-Flottenübersicht</a></h5>
                            <p class="card-text">Eine Allgemeine Übersicht über alle Schiffe.
                            <ul class="list">
                                <li>Bezeichnung</li>
                                <li>Standort</li>
                                <li>Captain</li>
                                <li>Aufgabe</li>
                            </ul>
                            </p>
                        </div>
                    </div>
                    <br>
                    <div class="card" style="width: 25rem;" id="cards">
                        <img src="../Images/Database.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><a href="/fv_datenbank">Datenbank Bearbeiten</a></h5>
                            <p class="card-text">Hinzufügen/entfernen von Datenpunkten.
                            <ul class="list">
                                <li>Equipment-list</li>
                                <li>Cargo-list</li>
                                <li>Ammunition-list</li>
                                <li>Destination-list</li>
                            </ul>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="container">
        <button class="btn btn-danger" href="{{ route('logout') }}"
            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> Logout </button>
        <form id="logout-form" action="{{ route('logout') }}" method="POST">
            @csrf
        </form>

    </div>


    </body>

    </html>
