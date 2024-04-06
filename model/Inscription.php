<?php
require "../model/Connexion.php";

function create_account($mail, $mdp) {
    global $con;
    $encrypted_mdp = md5($mdp);
    $sql_count_mail = "SELECT COUNT(*) FROM utilisateur WHERE email = :mail";

    $req = $con->prepare($sql_count_mail);
    $req->bindValue(":mail", $mail, PDO::PARAM_STR);
    $req->execute();

    $count = $req->fetchColumn();
    
    if ($count == 0) {
        $sql_create_user = "INSERT INTO utilisateur(email, mdp) VALUES(:email, :mdp)";
        $req_create_user = $con->prepare($sql_create_user);
        $req_create_user->bindValue(":email", $mail, PDO::PARAM_STR);
        $req_create_user->bindValue(":mdp", $encrypted_mdp, PDO::PARAM_STR);

        try {
            $req_create_user->execute();
            return true;
        }
        catch (PDOException $e) {
            return $e->getMessage();
        }
    }

    return false;

}