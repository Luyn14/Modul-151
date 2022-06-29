
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="stylesheet.css">
    <script src="../Controller/javascript.js"></script>
    <title>Crew Hinzufügen</title>
    <style>
        body {
            background-image: url("");
            background-color: #FFFFFF;
        }
    </style>
</head>

<body>
    <div class="container">
        <h3 class="text-center"> Neues Crewmitglied erfassen </h3>
        <form method="POST" class="needs-validation" novalidate action= @isset($user) "/addCrew" @else "/register" @endisset
        >
        @csrf
            <input type="hidden" name="id" value="">
            <div class="mb-3">
                <label for="firstname" class="form-label">Firstname</label>
                <input type="text" class="form-control" id="firstname" aria-describedby="emailHelp" name="firstname" value="" required>

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
                <input type="password" class="form-control" id="password" name="password_confirmation" value="" required>
            </div>
            <div class="mb-3">
                <label for="crewrolefid" class="form-label">CrewroleID</label> <br>
                <select name="crewrolefid" class="custom-select custom-select-lg mb-3">

                    @foreach($crewroles as $crewrole)

                    <option value="{{ $crewrole->id }}" >{{ $crewrole->name }}</option>
                    @endforeach 

                </select>

            </div>
            <div class="mb-3">
                <label for="shipfid" class="form-label">SpaceshipID</label> <br>
                <select name="shipfid" class="custom-select custom-select-lg mb-3">

                    @foreach($spaceships as $spaceship)

                    <option value={{ $spaceship->id }} >{{ $spaceship->name }}</option>
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