@extends('layout')

@section('content')
    <div class="container">
        <h3 class="text-center"> Neues Crewmitglied erfassen </h3>
        <form method="POST" class="needs-validation" novalidate
            action=@isset($user) "/addCrew" @else "/register" @endisset>
            @csrf
            <input type="hidden" name="id" value="">
            <div class="mb-3">
                <label for="firstname" class="form-label">Firstname</label>
                <input type="text" class="form-control" id="firstname" aria-describedby="emailHelp" name="firstname"
                    value="" required>

            </div>
            <div class="mb-3">
                <label for="lastname" class="form-label">Lastname</label>
                <input type="lastname" class="form-control" id="lastname" name="lastname" value="" required>

            </div>
            <div class="mb-3">
                <label for="birthday" class="form-label">Birthday</label>
                <input type="birthday" class="form-control" id="birthday" name="birthday" value="" required>

            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" value="" required>
                <input type="password" class="form-control" id="password" name="password_confirmation" value=""
                    required>
            </div>
            <div class="mb-3">
                <label for="crewrolefid" class="form-label">CrewroleID</label> <br>
                <select name="crewrolefid" class="custom-select custom-select-lg mb-3">

                    @foreach ($crewroles as $crewrole)
                        <option value="{{ $crewrole->id }}">{{ $crewrole->name }}</option>
                    @endforeach

                </select>

            </div>
            <div class="mb-3">
                <label for="shipfid" class="form-label">SpaceshipID</label> <br>
                <select name="shipfid" class="custom-select custom-select-lg mb-3">

                    @foreach ($spaceships as $spaceship)
                        <option value={{ $spaceship->id }}>{{ $spaceship->name }}</option>
                    @endforeach
                </select>
            </div>

            <button type=" submit" name="submit" class="btn btn-primary">Submit</button>
            <a href="login" class="btn btn-danger">Zurück</a>
        </form>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
    </body>

    </html>
