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
        <h1 class="font-weight-normal">Aufgabenplaner: Projekte</h1>
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