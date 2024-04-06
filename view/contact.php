<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleContact.css">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css" 
    integrity="sha384-BY+fdrpOd3gfeRvTSMT+VUZmA728cfF9Z2G42xpaRkUGu2i3DyzpTURDo5A6CaLK" crossorigin="anonymous"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet"> 

    <title>Contact</title>
</head>
<body>
    <main>
        <!--debut de la première partie du corps-->
        <div class="container" id="first-block">
            <div class="row elements">

                <div class="col-lg-4" id="coordonnees">
                    <h2 class="titre">Coordonnées de l'entreprise</h2>
                    <h3 class="sous-titre">Merci pour votre intérêt. Nous vous répondrons dès que possible.</h3>
                    
                    <!--numero et mail-->
                    <ul class="adress-info">
                        <li>
                            <i  class="bi bi-geo-alt-fill"></i> <!-- Logo de Google Maps -->
                            <span>Adresse: 10 rue du pont</span>
                        </li>
                        <li>
                            <i class="bi bi-telephone"></i>
                            <span>Phone: +01 23 45 67 89</span>
                        </li>
                        <li>
                            <i class="bi bi-envelope"></i>
                            <span>Email: coutureForFun@jmail.com</span>
                        </li>

                    </ul>
                </div>

                <!--contact -->
                <div class="col-lg-8" id="contact">
                    <h2>Contactez Nous</h2>
                    <form>
                        <div class="form-group">
                            <label for="name">Nom: </label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="email">Email: </label>
                            <input type="email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="objet">Object: </label>
                            <input type="text" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Message: </label>
                            <textarea class="form-control" rows="3"></textarea>
                        </div>
                        <div class="boutton">
                            <input type="submit" value="Envoyer" id="boutton-interne">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
</body>
</html>