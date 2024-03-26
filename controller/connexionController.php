<?php

if(isset($_POST['connexion_validation'])){

    if(isset($_POST['username'])){
        $username = $_POST['username'];
        $mdp = $_POST['mdp'];

        $sql = "SELECT * FROM utilisateur WHERE nom_utilisateur = :username AND mdp = md5(:mdp)";
        $req = $con->prepare($sql);
        $req->bindValue(':username', $username, PDO::PARAM_STR);
        $req->bindValue(':mdp', $mdp, PDO::PARAM_STR);
        $req->execute();

        $count = $req->rowCount();

        if($count == 1){ //S'il existe une correspondance entre login et mdp, établir la connexion
            require $headerpath;
            $_SESSION['username'] = $username;
            $_SESSION['mdp'] = $mdp;
            $_SESSION['connecte'] = True;
            $_SESSION['type'] = $type;
            header("Location: ../view/accueil/index.php");
            exit();
        } elseif ($count == 1) {
            require $headerpath;
            $_SESSION['username'] = $username;
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


?>