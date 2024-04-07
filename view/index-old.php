<?php
    require "../bdd.php";

    if (isset($_SESSION['connecte']) && $_SESSION['connecte'] == true) { ?>
        <form action="/Web_L2/controller/connexionController.php" method="post">
            <input type="submit" value="deconnexion">
            <input type="hidden" name="deconnexion">
        </form>
    <?php
    }
    else { ?>
        <form action="/Web_L2/controller/connexionController.php" method="post">
            <input type="submit" value="connexion">
            <input type="hidden" name="connexion">
        </form>
    <?php
    }
    ?>

    <form action="/Web_L2/controller/inscriptionController.php" method="post">
        <input type="submit" value="inscription">
        <input type="hidden" name="inscription">
    </form>

    <form action="/Web_L2/controller/coursController.php" method="post">
        <input type="submit" value="cours">
        <input type="hidden" name="cours">
    </form>