<?php
    include('donnesDevis.php');
?>
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

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

require '../lib/PHPMailer/src/PHPMailer.php';
require '../lib/PHPMailer/src/SMTP.php';
require '../lib/PHPMailer/src/Exception.php';

if(isset($_POST["envoyer"])) {
    $mailBase = new PHPMailer(true);

    $mailBase->isSMTP();
    $mailBase->Host = 'smtp.gmail.com';
    $mailBase->SMTPAuth = true;
    $mailBase->Username = 'c3564357@gmail.com';
    $mailBase->Password = 'vubp vfum daku yrqn';
    $mailBase->SMTPSecure = 'ssl';
    $mailBase->Port = 465;

    $mailBase->setFrom('c3564357@gmail.com');

    $mailBase->addAddress($mail);

    $mailBase->isHTML(true);
    $sujet = "Estimation prix";
    $message = "cher $prenom <br><br>
                Nous vous remercions de l'intérêt que vous portez à notre service de confection de vêtements sur mesure.<br><br>

                Le prix estimatif de votre devis est de $totale  Euro.<br><br>

                Nous espérons avoir l'opportunité de travailler avec vous prochainement.<br><br>
                Cordialement, <br>
                CoutureForFun";

    $mailBase->Subject = $sujet;
    $mailBase->Body = $message;

    $mailBase->send();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Web_L2/lib/styleDevis.css">
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
