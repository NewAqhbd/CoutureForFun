<?php
require "../model/Inscription.php";
require "../bdd.php";

if (isset($_POST["inscription"])) {
    header("Location: /Web_L2/view/inscription.php");
}

if (isset($_POST["create_user"])) {
    $mail = $_POST["mail"];
    $mdp = $_POST["mdp"];
    $mdp_confirm = $_POST["mdp_confirmation"];

    if ($mdp == $mdp_confirm) {
        create_account($mail, $mdp);
        header("Location: /Web_L2/view/index.php");
    }
    else { ?> 
        <script>alert("Mots de passe différends");</script> <?php 
        header("Location: /Web_L2/view/inscription.php");    
    }

}

?>