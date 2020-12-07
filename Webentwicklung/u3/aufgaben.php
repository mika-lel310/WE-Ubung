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

                        <tr>
                            <td>HTML Datei erstellen</td>
                            <td>HTML Datei erstellen</td>
                            <td>ToDo</td>
                            <td>Max Mustermann</td>
                            <td class="text-right">
                                <a href="#"> <i class="far fa-edit"></i> </a>
                                <a href="#" class="ml-2"> <i class="far fa-trash-alt"></i> </a>
                            </td>
                        </tr>


                        <tr>
                            <td>CSS Datei erstellen</td>
                            <td>CSS Datei erstellen</td>
                            <td>ToDo</td>
                            <td>Max Mustermann</td>
                            <td class="text-right">
                                <a href="#"> <i class="far fa-edit"></i> </a>
                                <a href="#" class="ml-2"> <i class="far fa-trash-alt"></i> </a>
                            </td>
                        </tr>


                        <tr>
                            <td>PC eingeschaltet</td>
                            <td>PC einschalten</td>
                            <td>Erledigt</td>
                            <td>Max Mustermann</td>
                            <td class="text-right">
                                <a href="#"> <i class="far fa-edit"></i> </a>
                                <a href="#" class="ml-2"> <i class="far fa-trash-alt"></i> </a>
                            </td>
                        </tr>


                        <tr>
                            <td>Kaffee trinken</td>
                            <td>Kaffee trinken</td>
                            <td>Erledigt</td>
                            <td>Petra Müller</td>
                            <td class="text-right">
                                <a href="#"> <i class="far fa-edit"></i> </a>
                                <a href="#" class="ml-2"> <i class="far fa-trash-alt"></i> </a>
                            </td>
                        </tr>


                        <tr>
                            <td>Für die Uni lernen</td>
                            <td>Für die Uni lernen</td>
                            <td>Verschoben</td>
                            <td>Max Mustermann</td>
                            <td class="text-right">
                                <a href="#"> <i class="far fa-edit"></i> </a>
                                <a href="#" class="ml-2"> <i class="far fa-trash-alt"></i> </a>
                            </td>
                        </tr>

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