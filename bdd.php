<?php
$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

if(!isset($_SESSION)){ 

    session_start();

}

if(!isset($_SESSION['connecte'])){

    $_SESSION['connecte'] = False;
    
}

//WhiteList des liens accessibles sans connexion
if(isset($_SESSION['connecte']) 
    && $_SESSION['connecte'] == False 
    && !isset($_POST["inscription"]) 
    && !isset($_POST["create_account"]) 
    && !isset($_POST["create_account_admin"]) 
    && !isset($_POST["front_che"])
    && !isset($_POST["che_details"])
    && !isset($_POST["display_cours"])
    && !isset($_POST["display_gallery"])


    ){ 

    if($actual_link !== "http://localhost/tp_centre_equestre/" && $actual_link !== "http://localhost/tp_centre_equestre/vue/cours/loadCours.php") {
        header('Location: http://localhost/tp_centre_equestre/vue/connexion.php');
    }}


try {
    /*  Connexion  */
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbname = "tp_web";

    $con = new PDO("mysql:host=$hostname;dbname=$dbname;charset=utf8mb4", $username, $password);
    
} catch(PDOException $e) {
    echo $e->getMessage();
}


