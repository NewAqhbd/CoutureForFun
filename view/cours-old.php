<?php
    $is_connecte = false;
    if (isset($_SESSION["id"])) {
        $id_u = $_SESSION["id"];
        $is_connecte = true;
    }

    if (isset($data) && $is_connecte) {
        foreach ($data as $cours) {
            $id_c = $cours["id_cours"];
            echo $cours["description"];
            echo'<br>';

            if (is_inscrit($id_c, $id_u)) { ?>
                <form action="/Web_L2/controller/coursController.php" method="post">
                    <input type="button" value="Inscrit">
                    <input type="submit" name="desinscrire" value="Se desinscrire">
                    <input type="hidden" name="id_c" value="<?= $id_c ?>">
                </form>
               
            <?php 
            }

            else { ?>
                <form action="/Web_L2/controller/coursController.php" method="post">
                    <input type="submit" value="S'inscrire">
                    <input type="hidden" name="ins_cours">
                    <input type="hidden" name="id_c" value="<?= $id_c ?>">
                </form>
            <?php
            }

            echo '<br>';
        }
    }

    if (isset($data) && !$is_connecte) {
        foreach ($data as $cours) {
            $id_c = $cours["id_cours"];
            echo $cours["description"];
            echo'<br><br>'; 
        }
    }