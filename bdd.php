<?php
$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

if(!isset($_SESSION)){ 
    session_start();
}

if(!isset($_SESSION['connecte'])){
    $_SESSION['connecte'] = false; 
}

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


