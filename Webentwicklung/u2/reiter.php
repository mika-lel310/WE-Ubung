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
    <div  class="jumbotron text-center">
        <h1 class="font-weight-normal">Aufgabenplaner: Reiter</h1>
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

                    <table class="table">
                        <thead class="thead-light">
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Beschreibung</th>
                            <th scope="col"></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>ToDo</td>
                            <td>Dinge die erledigt werden müssen.</td>
                            <td class="text-right">
                                <a href="#"> <i class="far fa-edit"></i> </a>
                                <a href="#" class="ml-2"> <i class="far fa-trash-alt"></i> </a>
                            </td>
                        </tr>
                        <tr>
                            <td>Erledigt</td>
                            <td>Dinge die erledigt sind.</td>
                            <td class="text-right">
                                <a href="#"> <i class="far fa-edit"></i> </a>
                                <a href="#" class="ml-2"> <i class="far fa-trash-alt"></i> </a>
                            </td>
                        </tr>
                        <tr>
                            <td>Verschoben</td>
                            <td>Dinge die später erledigt werden.</td>
                            <td class="text-right">
                                <a href="#"> <i class="far fa-edit"></i></a>
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