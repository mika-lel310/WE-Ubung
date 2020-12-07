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
    <?php
        $site = "Aktuelles Projekt";
        include("header.php");
    ?>

    <div class="row">

        <?php include("sidebar.php"); ?>

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