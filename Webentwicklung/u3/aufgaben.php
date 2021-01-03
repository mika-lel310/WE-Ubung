<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8">

    <title>Aufgabenplaner</title>
    <!-- Bootstrap-CSS -->
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/d0a105d246.js" crossorigin="anonymous"></script>
</head>

<body>

<?php
    $aufgaben = array(
        array(
            "bezeichnung" => "HTML Datei erstellen",
            "beschreibung" => "HTML Datei erstellen",
            "reiter" => "ToDo",
            "zustandig" => "Max Mustermann",
        ),
        array(
            "bezeichnung" => "CSS Datei erstellen",
            "beschreibung" => "CSS Datei erstellen",
            "reiter" => "ToDo",
            "zustandig" => "Max Mustermann",
        ),
        array(
            "bezeichnung" => "PC eingeschaltet",
            "beschreibung" => "PC einschalten",
            "reiter" => "Erledigt",
            "zustandig" => "Max Mustermann",
        ),
        array(
            "bezeichnung" => "Kaffee trinken",
            "beschreibung" => "Kaffee trinken",
            "reiter" => "Erledigt",
            "zustandig" => "Petra Müller",
        ),
        array(
            "bezeichnung" => "Für die Uni lernen",
            "beschreibung" => "Für die Uni lernen",
            "reiter" => "Verschoben",
            "zustandig" => "Max Mustermann",
        ),
    );
?>

<div class="container-fluid">
    <?php
        $site = "Aufgaben";
        include("header.php");
    ?>

    <div class="row">

        <?php include("sidebar.php"); ?>

        <div class="col" id="content">
            <div class="row">

                <div class="col-9">

                    <table class="table">
                        <thead class="thead-light">
                        <tr>
                            <th scope="col">Aufgabenbezeichnung:</th>
                            <th scope="col">Beschreibung der Aufgabe:</th>
                            <th scope="col">Reiter</th>
                            <th scope="col">Zuständig</th>
                            <th scope="col"></th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php
                        if(isset($aufgaben)) {
                            foreach ($aufgaben as $a) {
                                echo '<tr>';
                                echo '<td>' . $a["bezeichnung"] . '</td>';
                                echo '<td>' . $a["beschreibung"] . '</td>';
                                echo '<td>' . $a["reiter"] . '</td>';
                                echo '<td>' . $a["zustandig"] . '</td>';
                                echo '<td class="text-right">';
                                echo '<a href="#"> <i class="far fa-edit"></i> </a>';
                                echo '<a href="#" class="ml-2"> <i class="far fa-trash-alt"></i> </a>';
                                echo '</td>';
                                echo '<tr>';
                            }
                        }
                        else{
                            echo '<h4 class="text-danger">Variable not defined</h4>';
                        }
                        ?>

                        </tbody>
                    </table>

                </div>
            </div>

            <div class="row mt-5">
                <div class="col-9">
                    <h4>Bearbeiten/Erstellen</h4>

                    <form>
                        <div class="form-group">
                            <label for="Abez">Aufgabenbezeichnung:</label>
                            <input type="text" class="form-control" id="Abez" placeholder="Aufgabe">
                        </div>

                        <div class="form-group">
                            <label for="Abeschreibung">Beschreibung der Aufgabe:</label>
                            <textarea class="form-control" id="Abeschreibung" placeholder="abeschreibung"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="start_date">Erstellungsdatum:</label>
                            <input type="text" class="form-control" id="start_date" placeholder="01.01.19">
                        </div>

                        <div class="form-group">
                            <label for="end_date">fällig bis:</label>
                            <input type="text" class="form-control" id="end_date" placeholder="01.01.19">
                        </div>

                        <div class="form-group">
                            <label for="select_reiter"> <h4>Zugehöriger Reiter:</h4> </label>
                            <select class="custom-select" id="select_reiter">
                                <option selected value="ToDo"> ToDo</option>
                                <option value="Erledigt">Erledigt</option>
                                <option value="Verschoben">Verschoben</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="select_person"> <h4>Zuständig:</h4> </label>
                            <select class="custom-select" id="select_person">
                                <option selected value="1"> Max Mustermann</option>
                                <option value="2"> Petra Müller</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">
                                Speichern
                            </button>

                            <button type="submit" class="btn btn-info">
                                Reset
                            </button>
                        </div>
                    </form>

                </div>
            </div>

        </div>
    </div>
</div>

</body>
</html>