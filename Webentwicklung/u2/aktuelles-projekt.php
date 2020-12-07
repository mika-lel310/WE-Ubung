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
        <h1 class="font-weight-normal">Aufgabenplaner: Todos (Aktuelles Projekt)</h1>
    </div>

    <div class="row">

        <div class="col-2" id="sidebar">
            <ul class="list-group">
                <li class="list-group-item">
                    <a class="nav-link" href="index.php">Login</a>
                </li>
                <li class="list-group-item">
                    <a class="nav-link" href="projekte.php">Projekte</a>
                </li>
                <li class="list-group-item">
                    <a class="nav-link" href="aktuelles-projekt.php">Aktuelles Projekt</a>
                </li>
                <li class="list-group-item ml-5">
                    <a class="nav-link" href="reiter.php">Reiter</a>
                </li>
                <li class="list-group-item ml-5">
                    <a class="nav-link" href="aufgaben.php">Aufgaben</a>
                </li>
                <li class="list-group-item ml-5">
                    <a class="nav-link" href="mitglieder.php">Mitglieder</a>
                </li>
            </ul>
        </div>

        <div class="col" id="content">
            <div class="row">

                <div class="col">
                    <div class="card">
                        <div class="card-header">ToDo:</div>
                        <ul class="list-group">
                            <li class="list-group-item">HTML Datei erstellen (Max Mustermann)</li>
                            <li class="list-group-item">CSS Datei erstellen (Max Mustermann)</li>
                        </ul>
                    </div>
                </div>

                <div class="col">
                    <div class="card">
                        <div class="card-header">Erledigt:</div>
                        <ul class="list-group">
                            <li class="list-group-item">PC eingeschaltet (Petra Müller)</li>
                            <li class="list-group-item">Kaffee trinken (Petra Müller)</li>
                        </ul>
                    </div>
                </div>

                <div class="col">
                    <div class="card">
                        <div class="card-header">Verschoben:</div>
                        <ul class="list-group">
                            <li class="list-group-item">Für die Uni lernen (Max Mustermann)</li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>

</body>
</html>