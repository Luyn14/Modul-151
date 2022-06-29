
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="stylesheet.css">
    <script src="../Controller/javascript.js"></script>
    <title>Datenbank-Übersicht</title>
</head>

<body>
    <div class="container">
        <h1 class="text-center" id="text-underlay-log"> Datenbank </h1>
    </div>
    <div class="container">
        <button type="button" class="btn btn-info" onclick="myCargo()">Cargohold</button>
        <button type="button" class="btn btn-info" onclick="myAmmunition()">Ammunitionhold</button>
        <div id="cargo_style">
            <h1 class="text-center">Fracht</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Shipname</th>
                        <th scope="col">Cargoname</th>
                        <th scope="col">Cargoamount</th>
                    </tr>
                </thead>
                <tbody>

                    <!-- while schlaufe--> 

                        <tr>
                            <th scope="row"></th>
                            <td></td>
                            <td></td>
                            <td><a href="fv_edit-cargo.php?id=&c_id=" class="btn btn-primary">Bearbeiten</a>
                            <td><a href="fv_delete-cargo.php?shipid=&cargoid=" class="btn btn-danger">Löschen</a>
                        </tr>


                    <!-- while schlaufe schliessen --> 

                </tbody>
            </table>
            <a href="fv_add-cargo.php" class="btn btn-primary">Neue Fracht Hinzufügen</a>
        </div>
        <div id="ammunition_style">
            <h1 class="text-center">Munition</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Shipname</th>
                        <th scope="col">Ammunitionname</th>
                        <th scope="col">Ammunitionamount</th>
                    </tr>
                </thead>
                <tbody>

                        <!-- while schlaufe --> 

                        <tr>
                            <th scope="row"></th>
                            <td></td>
                            <td></td>
                            <td><a href="fv_edit-ammo.php?id=&a_id=" class="btn btn-primary">Bearbeiten</a>
                            <td><a href="fv_delete-ammo.php?shipid=&ammoid=" class="btn btn-danger">Löschen</a>
                        </tr>

                        <!-- while schlaufe schliessen --> 
                    
                </tbody>
            </table>
            <a href="fv_add-ammo.php" class="btn btn-primary">Neue Munition hinzufügen</a>
        </div>
    </div>
    <div class="container">
        <br>
        <a href="/home" class="btn btn-danger">Zurück</a>

    </div>
</body>

</html>