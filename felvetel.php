<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Játékok rögzítése</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script>
        function validation(){
            const nev = document.forms['jatek_felvetel']['nev'].value;
            const modell = document.forms['jatek_felvetel']['modell'].value;
            const gyarto = document.forms['jatek_felvetel']['gyarto'].value;
            const min_ajanlott_eletkor = document.forms['jatek_felvetel']['min_ajanlott-eletkor'].value;
            const tipus = document.forms['jatek_felvetel']['tipus'].value;
            if (nev.trim().length == 0) {
                alert("A név megadása kötelező");
                return false;
            }
            if (modell.trim().length == 0) {
                alert("A modell megadása kötelező");
                return false;
            }
            if (gyarto.trim().length == 0) {
                alert("A gyártó megadása kötelező");
                return false;
            }
            if (min_ajanlott_eletkor.trim().length == 0) {
                alert("A minimálisan ajánlott életkor megadása kötelező");
                return false;
            }
            if (tipus != "tarsas" || tipus != "egyeb") {
                alert("A típus megadása kötelező");
                return false;
            }
            return true;
        }
    </script>
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
        <?php
        $min_ajanlott_eletkorok = [
            'harom' => "3+",
            'hat' => "6+",
            'nyolc' => "nyolc+"
        ];
        ?>
        <?php
        if (isset($_POST) && !empty($_POST)) {
            $hiba = "";
            if (!isset($_POST['nev']) || empty($_POST['nev'])) {
                $hiba .= "A név mező kitöltése kötelező. ";
            }
            if (!isset($_POST['modell']) || empty($_POST['modell'])) {
                $hiba .= "A modell mező kitöltése kötelező. ";
            }
            if (!isset($_POST['gyarto']) || empty($_POST['gyarto'])) {
                $hiba .= "A gyártó mező kitöltése kötelező. ";
            }
            if (!isset($_POST['min_ajanlott_eletkor']) || empty($_POST['min_ajanlott_eletkor'])) {
                $hiba .= "A minimálisan ajánlott életkor mező kitöltése kötelező. ";
            } else if (!in_array($_POST['min_ajanlott_eletkor'], array_keys($min_ajanlott_eletkorok))) {
                $hiba .= "A minimálisan ajánlott életkort a legördülő menüből válassza ki. ";
            }
            if (!isset($_POST['tipus']) || empty($_POST['tipus'])) {
                $hiba .= "A típus mező kitöltése kötelező. ";
            }
            ?>
            <?php if ($hiba == ""): ?>
                <?php
                $file = fopen("adatok.csv", "a");
                $sor = implode(";", $_POST) . PHP_EOL;
                fwrite($file, $sor);
                ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                Sikeres felvétel.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php else: ?>
                
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <?php echo $hiba ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif; ?>
        <?php
        }
        ?>

        <h1>Itt lehetséges új játék felvétele.</h1> 
        <form action="felvetel.php" method="post" name="jatek_felvetel" onsubmit="return validation();">
            <div class="mb-3">
                <label for="nev_input">Neve</label>
                <input class="form-control" type="text" id="nev_input" name="nev" placeholder="név" required>
            </div>
            <div class="mb-3">
                <label for="modell_input">Modell</label>
                <input class="form-control" type="text" id="modell_input" name="modell" placeholder="modell" required>
            </div>
            <div class="mb-3">
                <label for="gyarto_input">Gyártó</label>
                <input class="form-control" type="text" id="gyarto_input" name="gyarto" placeholder="gyártó" required>
            </div>
            <div class="mb-3">
                <label for="min_ajanlott_eletkor_input">Minimális Ajánlott életkor</label>
                <select class="form-select" id="min_ajanlott_eletkor_input" name="min_ajanlott_eletkor" required>
                    <option value=""></option>
                    <?php foreach ($min_ajanlott_eletkorok as $key => $value): ?>
                        <option value="<?php echo $key ?>"><?php echo $value ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label radio_label checkbox_label">Típusa:</label>
                <div>
                    <input class="form-check-input" type="radio" name="tipus" id="tarsas_input" value="tarsas" required>
                    <label class="form-check-label radio_label" for="tarsas_input">társas</label>
                    <input class="form-check-input" type="radio" name="tipus" id="egyeb_input" value="egyeb">
                    <label class="form-check-label radio_label" for="egyeb_input">egyéb</label> 
                </div>
            </div>
            

            <button class="btn btn-outline-secondary" type="submit">Felvétel</button>
        </form>


    </main>
    
</body>
</html>