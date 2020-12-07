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
        $site = "Projekte";
        include("header.php");
    ?>

    <div class="row">

        <?php include("sidebar.php"); ?>

        <div class="col" id="content">
            <div class="row">

                <div class="col-9">
                    <form>
                        <div class="form-group">
                            <label for="auswahl"> <h4>Projekt Auswählen:</h4> </label>
                            <select class="custom-select" id="auswahl">
                                <option selected disabled> bitte auswählen </option>
                                <option value="v1">Projekt_1</option>
                                <option value="v2">Projekt_2</option>
                                <option value="v3">Projekt_3</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">
                                Auswählen
                            </button>

                            <button type="submit" class="btn btn-primary">
                                Bearbeiten
                            </button>

                            <button type="submit" class="btn btn-danger">
                                Löschen
                            </button>
                        </div>

                    </form>

                    <h4>Projekt bearbeiten/erstellen:</h4>

                    <form>
                        <div class="form-group">
                            <label for="Pname">Projektname:</label>
                            <input type="text" class="form-control" id="Pname" placeholder="Projekt">
                        </div>

                        <div class="form-group">
                            <label for="beschreibung">Produktbeschreibung:</label>
                            <textarea class="form-control" id="beschreibung" placeholder="Beschreibung" ></textarea>
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