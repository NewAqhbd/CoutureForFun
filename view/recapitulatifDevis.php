<?php
    include('donnesDevis.php');
?>
<?php

$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$mail = $_POST["mail"];
$tissu = $_POST["tissu"];
$typeVetement = $_POST["typeVetement"];
$taille = $_POST["taille"];
$description = $_POST["description"];


$prixTissu = 0;
for ($i = 0; $i < count($tissuArray); $i++) { 
    if ($tissuArray[$i] == $tissu) {
        if ($i <= 2) {
            $prixTissu = 20;
        } else {
            $prixTissu = 30;
        }
    }   
}

$prixTaille = 0;
for ($i = 0; $i < count($tailleArray); $i++) { 
    if ($tailleArray[$i] == $taille) {
        if ($i <= 2) {
            $prixTaille = 5;
        } else {
            $prixTaille = 10;
        }
    }
}


//utilisation de isset avec l'operateur ternaire pour que si une variable est NULL on lui attribue la valeur 0
$ourlets = isset($_POST["ourlets"]) ? $_POST["ourlets"] : 0;
$retouches = isset($_POST["retouches"]) ? $_POST["retouches"] : 0;
$deux = isset($_POST["deux"]) ? $_POST["deux"] : 0;
$somme = $ourlets + $retouches + $deux;
$totale = $prixTissu + $prixTaille + $somme;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleDevis.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" 
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Recapitulatif</title>
</head>
<body>
    <div class="container conrecap col-md-6">
        <div class="recapitulatif">
            <h1>Récapitulatif de la commande</h1>
            <div><strong>Nom:</strong> <?php echo $nom; ?></div>
            <div><strong>Prenom:</strong> <?php echo $prenom; ?></div>
            <div><strong>Mail:</strong> <?php echo $mail; ?></div>
            <div><strong>Tissu:</strong> <?php echo $tissu; ?></div>
            <div><strong>Type de vêtement:</strong> <?php echo $typeVetement; ?></div>
            <div><strong>taille:</strong> <?php echo $taille; ?></div>
            <div><strong>Description:</strong> <?php echo $description; ?></div>
            <div><strong>Totale:</strong> <?php echo $totale . " Euro"; ?></div>
        </div>
    </div>
</body>
</html>