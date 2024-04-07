<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
        crossorigin="anonymous"></script>

    <link rel="stylesheet" href="/Web_L2/lib/video_style.css">

    <title>Cours</title>
</head>



<?php
    require "../view/header.php";
    $is_connecte = false;
    if (isset($_SESSION["id"])) {
        $id_u = $_SESSION["id"];
        $is_connecte = true;
    }
?>

<body>
    <div class="row justify-content-center mt-5">
        <?php
        if (isset($data) && $is_connecte) {
            foreach ($data as $cours) {
                $id_c = $cours["id_cours"]; ?>

                <div class="col-sm-3" style="margin-bottom: 1rem;">
                    <div class="card" style="width: 18rem;">
                        <img src="/Web_L2/assets/images/<?= $cours["img"] ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?= $cours["titre"] ?></h5>
                            <p class="card-text"><?= $cours["description"] ?></p>

                            <?php
                            if (is_inscrit($id_c, $id_u)) { ?>
                                <form action="/Web_L2/controller/coursController.php" method="post">
                                    <input type="submit" name="desinscrire" class="btn btn-primary" value="Se désinscrire">
                                    <input type="hidden" name="id_c" value="<?= $id_c ?>">
                                </form>
                                <?php 
                            }
                            else { ?>
                                <form action="/Web_L2/controller/coursController.php" method="post">
                                    <input type="submit" name="ins_cours" class="btn btn-primary" value="S'inscrire">
                                    <input type="hidden" name="id_c" value="<?= $id_c ?>">
                                </form>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
        <?php
            }
        }

        else if (isset($data) && !$is_connecte) {
            foreach ($data as $cours) { ?>
                <div class="col-sm-3" style="margin-bottom: 1rem;">
                    <div class="card" style="width: 18rem;">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?= $cours["titre"] ?></h5>
                            <p class="card-text"><?= $cours["description"] ?></p>

                            <form action="/Web_L2/controller/connexionController.php" method="post">
                                <input type="submit" name="connexion" value="Se connecter" class="btn btn-primary">
                            </form>
                        </div>
                    </div>
                </div>
        <?php                
            }
        }
        ?>
    </div>

</html>