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
    $reiter = array(
        array(
            "name" => "ToDo",
            "beschreibung" => "Dinge die erledigt werden müssen.",
        ),
        array(
            "name" => "Erledigt",
            "beschreibung" => "Dinge die erledigt sind.",
        ),
        array(
            "name" => "Verschoben",
            "beschreibung" => "Dinge die später erledigt werden.",
        ),
    );
?>

<div class="container-fluid">
    <?php
    $site = "Reiter";
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
                            <th scope="col">Name</th>
                            <th scope="col">Beschreibung</th>
                            <th scope="col"></th>
                        </tr>
                        </thead>
                        <tbody>

                            <?php

                            if(isset($reiter)) {
                                foreach ($reiter as $i) {
                                    echo '<tr>';
                                    echo '<td>' . $i["name"] . '</td>';
                                    echo '<td>' . $i["beschreibung"] . '</td>';
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
                            <label for="bez">Bezeichnung des Reiters:</label>
                            <input type="text" class="form-control" id="bez" placeholder="Reiter">
                        </div>

                        <div class="form-group">
                            <label for="beschreibung">Beschreibung:</label>
                            <textarea class="form-control" id="beschreibung" placeholder="Beschreibung"></textarea>
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