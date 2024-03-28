<?php
require "../model/Inscription.php";
require "../bdd.php";

if (isset($_POST["inscription"])) {
    return require_once "../view/inscription.php";
}

if (isset($_POST["create_user"])) {
    $mail = $_POST["mail"];
    $mdp = $_POST["mdp"];
    $mdp_confirm = $_POST["mdp_confirmation"];

    if ($mdp == $mdp_confirm) {
        create_account($mail, $mdp);
    }
    else { ?> 
        <script>alert("Mots de passe différends");</script>   
    <?php }

}

?>