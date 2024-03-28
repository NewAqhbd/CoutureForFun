<?php

function create_account($mail, $mdp) {
    global $con;
    $sql_check_mail = "SELECT email FROM utilisateur WHERE email = :mail";
    $req_check_mail = $con->prepare($sql_check_mail);
    $req_check_mail->bindValue(":mail", $mail, PDO::PARAM_STR);
    $count = $req_check_mail->rowCount();

    if ($count == 0) {
        $sql_create_user = "INSERT INTO utilisateur(email, mdp) VALUES(:email, :mdp)";
        $req_create_user = $con->prepare($sql_create_user);
        $req_create_user->bindValue(":email", $mail, PDO::PARAM_STR);
        $req_create_user->bindValue(":mdp", $mdp, PDO::PARAM_STR);

        try {
            $req_create_user->execute();
        }
        catch (PDOException $e) {
            return $e->getMessage();
        }
    }

    else {?>
        <script>alert("Ce mail existe déjà. Veuillez en choisir un autre.")</script><?php
    }

}