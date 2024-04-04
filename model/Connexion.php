<?php
require "../bdd.php";

function connexion($mail, $mdp) {
    global $con;
    $encrypted_mdp = md5($mdp);
    if(isset($_POST['mail'])){
        $mail = $_POST['mail'];
        $mdp = $_POST['mdp'];

        $sql = "SELECT * FROM utilisateur WHERE email = :mail AND mdp = :mdp";
        $req = $con->prepare($sql);
        $req->bindValue(':mail', $mail, PDO::PARAM_STR);
        $req->bindValue(':mdp', $encrypted_mdp, PDO::PARAM_STR);
        $req->execute();

        $count = $req->rowCount();
        var_dump($count);

        if($count == 1){ //S'il existe une correspondance entre login et mdp, établir la connexion
            $_SESSION['mail'] = $mail;
            $_SESSION['mdp'] = $encrypted_mdp;
            $_SESSION['connecte'] = True;

            return true;
        } 

        return false;
    }
}
?>