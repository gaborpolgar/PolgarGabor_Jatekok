<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Játékok rögzítése</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-warning">
        <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.php">Játékok listázása</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="felvetel.php">Játék felvétele</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="container">
        <h1>Itt lehetséges új játék felvétele.</h1> 
        <form action="felvetel.php" method="post" name="jatek_felvetel">
            <div class="mb-3">
                <label for="neve_input">Neve</label>
                <input class="form-control" type="text" id="neve_input" name="neve" placeholder="neve" required>
            </div>
            <div class="mb-3">
                <label for="modell_input">Modell</label>
                <input class="form-control" type="text" id="modell_input" name="modell" placeholder="modell" required>
            </div>
            <div class="mb-3">
                <label for="gyarto_input">Gyártó</label>
                <input class="form-control" type="text" id="gyarto_input" name="gyarto" placeholder="gyarto" required>
            </div>
            <div class="mb-3">
                <label for="min_ajanlott_eletor_input">Minimális Ajánlott életkor</label>
                <select class="form-select" id="min_ajanlott_eletor_input" name="min_ajanlott_eletor" required>
                    <option value=""></option>
                    <option value="harom">3+</option>
                    <option value="hat">6+</option>
                    <option value="nyolc">8+</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label radio_label checkbox_label">Típusa:</label>
                <div>
                    <input class="form-check-input" type="radio" name="tipus" id="tarsas_input" value="ferfi">
                    <label class="form-check-label radio_label" for="tarsas_input">társas</label>
                    <input class="form-check-input" type="radio" name="tipus" id="egyeb_input" value="no">
                    <label class="form-check-label radio_label" for="egyeb_input">egyéb</label> 
                </div>
            </div>
            

            <button class="btn btn-outline-secondary" type="submit">Felvétel</button>
        </form>


    </main>
    
</body>
</html>