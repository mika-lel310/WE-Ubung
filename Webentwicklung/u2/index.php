<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8">

    <title>Aufgabenplaner</title>
    <!-- Bootstrap-CSS -->
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@4.5.3/dist/css/bootstrap.min.css">
</head>

<body>

<div class="container-fluid">
    <div  class="jumbotron text-center">
        <h1 class="font-weight-normal">Aufgabenplaner: Login</h1>
    </div>

    <div class="row">

        <div class="col-2" id="sidebar">

        </div>

        <div class="col-8" id="content">
            <div class="row">
                <div class="col">

                    <form>
                        <div class="form-group">
                            <label for="email1">Email-Adresse:</label>
                            <input type="email" class="form-control" id="email1" placeholder="Email-Adresse eingeben">
                        </div>

                        <div class="form-group">
                            <label for="pass1">Passwort:</label>
                            <input type="password" class="form-control" id="pass1" placeholder="Passwort">
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="ch1">
                            <label class="form-check-label" for="ch1">AGBs und Datenschutzbedingung akzeptieren</label>
                        </div>

                        <br>

                        <button type="submit" class="btn btn-primary">
                            Einloggen
                        </button>
                    </form>

                </div>
            </div>

            <div class="row">
                <div class="col">
                    <br>
                    <p> Noch nicht registriert? <a href="#">Registrierung</a> </p>

                    <p> Da der Login Vorgang technisch noch nicht realisiert wurde: <a href="projekte.php">Überspringen</a> </p>
                </div>
            </div>

        </div>

    </div>
</div>

</body>
</html>