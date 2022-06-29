@extends('layout')

@section('content')
    <title>Delete Crew</title>
    <h3 class="text-center"> Crewmitglied Entfernen </h3>
    <form method="POST" action="">
    @csrf
        <div class="container">
            <div class="center">
                <div class="col">
                    <div class="card" style="width: 25rem;">
                        <h4 class="card-body">
                            <table style="width:100%">
                                <h3>
                                    <tr>
                                        <td>
                                            <b>Firstname:</b>
                                        </td>
                                        <td>{{ $user->firstname }}</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <b>Lastname:</b>
                                        </td>
                                        <td>{{ $user->lastname }}</td>
                                    </tr>
                                </h3>
                                <h4>
                                    <tr>
                                        <td>
                                            <b>Rolename:</b>
                                        </td>
                                        <td>{{ $user->crewrole->name }}</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <b>Birthday:</b>
                                        </td>
                                        <td>{{ $user->birthday }}</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <b>Spaceship:</b>
                                        </td>
                                        <td>{{ $user->spaceship->name }}</td>
                                    </tr>
                                </h4>
                            </table>
                            <div class="col text-center">
                                <div class="break">
                                    Crewmitglied entfernen?<br>
                                </div>
                                <div class="break2">
                                    <a href="/fv_delete-crew-y/{{ $user->id }}" class="btn btn-primary">Ja </a>
                                    <a href="/fv_uebersicht" class="btn btn-danger">Nein</a>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
            <label for="CrewID"></label>
            <input type="text" class="form-control" id="CrewID" name="CrewID" hidden value="">

    </form>

</body>