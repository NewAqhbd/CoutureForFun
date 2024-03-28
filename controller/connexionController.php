<?php
require "../model/Connexion.php";
require "../bdd.php";

if (isset($_POST["connexion"])) {
    return require_once "../view/connexion.php";
}

if(isset($_POST['connecter'])){

    if(isset($_POST['mail'])){
        $mail = $_POST['mail'];
        $mdp = $_POST['mdp'];

        $sql = "SELECT * FROM utilisateur WHERE nom_utilisateur = :mail AND mdp = md5(:mdp)";
        $req = $con->prepare($sql);
        $req->bindValue(':mail', $mail, PDO::PARAM_STR);
        $req->bindValue(':mdp', $mdp, PDO::PARAM_STR);
        $req->execute();

        $count = $req->rowCount();

        if($count == 1){ //S'il existe une correspondance entre login et mdp, établir la connexion
            $_SESSION['mail'] = $mail;
            $_SESSION['mdp'] = $mdp;
            $_SESSION['connecte'] = True;
            $_SESSION['type'] = $type;
            header("Location: ../view/accueil/index.php");
            exit();

        } elseif ($count == 1) {
            $_SESSION['mail'] = $mail;
            $_SESSION['mdp'] = $mdp;
            $_SESSION['connecte'] = True;
            $_SESSION['type'] = $type;
            header("Location: ../../tp_centre_equestre");
            exit();
        }
        else{
            ?>
            <script>alert("Mot de passe ou mail invalide")</script>
            <?php require '../vue/connexion.php';
        }
    }
}


if(isset($_POST['deconnexion'])){

    session_destroy();
    session_start();
    if(!isset($_SESSION['connecte'])){ 
        $_SESSION['connecte'] = False; //Initialisation de la variable de contrôle de l'état de connexion
        $_SESSION['type'] = null;
    }
    header('Location: http://localhost/Projet_Web_L2/view/connexion.php');
}


?>