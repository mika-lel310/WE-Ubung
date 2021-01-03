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
$mitglieder = array(
    array(
        "name" => "Max Mustermann",
        "email" => "mustermann@muster.de",
    ),
    array(
        "name" => "Petra Müller",
        "email" => "petra@mueller.de",
    ),
);
?>

<div class="container-fluid">
    <?php
        $site = "Mitglieder";
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
                            <th scope="col">E-Mail</th>
                            <th scope="col">In Projekt</th>
                            <th scope="col"></th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php
                        if(isset($mitglieder)) {
                            foreach ($mitglieder as $m) {
                                echo '<tr>';
                                echo '<td>' . $m["name"] . '</td>';
                                echo '<td>' . $m["email"] . '</td>';
                                echo '<td> <input type="checkbox" id="in_projekt"> </td>';
                                echo '<td class="text-right">';
                                echo '<a href="#"> <i class="far fa-edit"></i> </a>';
                                echo '<a href="#" class="ml-2"> <i class="far fa-trash-alt"></i> </a>';
                                echo '</td>';
                                echo '</tr>';
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

            <div class="row mt-4">
                <div class="col-9">
                    <h4>Bearbeiten/Erstellen</h4>

                    <form>
                        <div class="form-group">
                            <label for="User">Username:</label>
                            <input type="text" class="form-control" id="User" placeholder="Username">
                        </div>

                        <div class="form-group">
                            <label for="Email">E-Mail-Adresse:</label>
                            <input type="email" class="form-control" id="Email" placeholder="E-Mail-Adresse eingeben">
                        </div>

                        <div class="form-group">
                            <label for="Pass">Passwort:</label>
                            <input type="password" class="form-control" id="Pass" placeholder="Passwort">
                        </div>

                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="check_projekt">
                            <label class="form-check-label" for="check_projekt">Dem Projekt zugeordnet</label>
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