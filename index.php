<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Játékok listázása</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-warning">
        <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Játékok listázása</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="felvetel.php">Játék felvétele</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="container">
            <h1>Itt látható az összes felvett játék listája.</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Neve</th>
                    <th>Modellje</th>
                    <th>Gyártója</th>
                    <th>Min ajánlott életkor</th>
                    <th>típusa</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
            <tfoot>
                <tr>
                <th>#</th>
                    <th>Neve</th>
                    <th>Modellje</th>
                    <th>Gyártója</th>
                    <th>Min ajánlott életkor</th>
                    <th>típusa</th>
                </tr>
            </tfoot>
        </table>

    </main>
    
    
</body>
</html>