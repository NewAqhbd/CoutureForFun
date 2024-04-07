<?php
    include('donnesDevis.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Web_L2/lib/styleDevis.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" 
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="/Web_L2/lib/video_style.css">

    <title>Devis</title>
</head>

<?php
    require "../view/header.php";
?>

<body>
    <div class="container">
        <div class="row elements">
            <div class="col-md-7 m-auto">
                <div class="card">
                    <div class="card-body">

                        <h1>Demande de devis</h1>
                        <form action="recapitulatifDevis.php" method="post">
                            <div class="form-group row">
                                <div class="col">
                                    <label>Nom</label>
                                    <input type="text" name="nom" id="nom" class="form-control " required>
                                </div>
                                <div class="col">
                                    <label>Prenom</label>
                                    <input type="text" name="prenom" class="form-control " required>
                                </div>
                            </div>
                            <label>Type de vêtement</label>
                            <input type="text" name="typeVetement" class="form-control"required>


                            <label>Mail</label>
                            <input type="email" name="mail" class="form-control"required>
                            
                            <div class="form-group row">
                                <div class="col">
                                    <label>Tissu</label>
                                    <select name="tissu" class="form-select form-control">
                                    <?php
                                        for ($i = 0; $i < count($tissuArray); $i++) {
                                            echo "<option>$tissuArray[$i]</option>";
                                        }
                                    ?>
                                    </select>
                                </div>
                                <div class="col">
                                    <label>Taille</label>
                                    <select name="taille" class="form-select form-control">
                                    <?php
                                        for ($i = 0; $i < count($tailleArray); $i++) {
                                            echo "<option>$tailleArray[$i]</option>";
                                        }
                                    ?>
                                    </select>
                                </div>
                            </div>

                            <label>Description</label>
                            <textarea name="description" rows="4" class="form-control" required></textarea>

                            <div class="form-group">
                                <label>Services de base</label><br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input base" type="checkbox" name="ourlets" id="ourlets" value="20">
                                    <label for="ourlets" class="form-check-label">Ourlets</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input base" type="checkbox" name="retouches" id="retouches" value="30">
                                    <label for="retouches" class="form-check-label">Retouches</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input base" type="checkbox" name="deux" id="deux" value="50">
                                    <label for="deux" class="form-check-label">Retouches + Ourlets</label>
                                </div><br>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary" name="envoyer">Envoyer</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script type="text/javascript" src="/Web_L2/lib/devis.js">

    </script>
</body>
</html>

