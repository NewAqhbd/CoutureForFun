<?php
    require "../model/Cours.php";
    require "../bdd.php";

    if (isset($_POST["cours"])) {
        $data = get_cours();
        return require "../view/cours.php";
    }

    if (isset($_POST["ins_cours"]) && isset($_POST["id_c"])) {
        $id_cours = $_POST["id_c"];
        $id_utilisateur = $_SESSION["id"];

        if (ins_cours($id_cours, $id_utilisateur)) {
            echo '<script>alert("Vous êtes inscrit au cours avec succès")</script>';
            $data = get_cours();
            return require "../view/cours.php";
        }
        else {
            echo'<script>alert("Vous êtes déjà inscrit à ce cours.")</script>';
            $data = get_cours();
            return require "../view/cours.php";
        }
    }

    if (isset($_POST["desinscrire"]) && $_POST["id_c"]) {
        $id_c = $_POST["id_c"];
        if (desinscrire($id_c)) {
            echo '<script>alert("Vous avez été désinscrit du cours avec succès")</script>';
            $data = get_cours();
            return require "../view/cours.php";
        }
        else {
            echo'<script>alert("La désinscription a échoué")</script>';
            $data = get_cours();
            return require "../view/cours.php";
        }
    }






?>