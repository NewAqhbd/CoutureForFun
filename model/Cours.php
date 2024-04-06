<?php
    require "../bdd.php";

    function get_cours() {
        global $con;
        $sql = "SELECT * FROM cours";
        $req = $con->prepare($sql);

        try {
            $req->execute();
            return $req->fetchAll();
        }
        catch(PDOException $e) {
            return $e->getMessage();
        }
    }

    function ins_cours($id_c, $id_u) {
        global $con;
        $sql_check_ins = "SELECT COUNT(*) FROM inscrit WHERE id_cours = :id_c AND id_utilisateur = :id_u";
        $req_check_ins = $con->prepare($sql_check_ins);
        $req_check_ins->bindValue(":id_c", $id_c, PDO::PARAM_INT);
        $req_check_ins->bindValue(":id_u", $id_u, PDO::PARAM_INT);
        $req_check_ins->execute();

        $count = $req_check_ins->fetchColumn();

        if ($count == 1) {
            $sql = "UPDATE inscrit SET valid = :valid WHERE id_cours = :id_c AND id_utilisateur = :id_u";
            $req = $con->prepare($sql);
            $req->bindValue(":valid", 1, PDO::PARAM_INT);
            $req->bindValue(":id_c", $id_c, PDO::PARAM_INT);
            $req->bindValue(":id_u", $id_u, PDO::PARAM_INT);

            try {
                $req->execute();
                return true;
            }
            catch(PDOException $e) {
                return $e->getMessage();
            }
        } 
        else {
            $sql = "INSERT INTO inscrit(id_cours, id_utilisateur, valid) VALUES(:id_c, :id_u, :valid)";
            $req = $con->prepare($sql);
            $req->bindValue(":id_c", $id_c, PDO::PARAM_INT);
            $req->bindValue(":id_u", $id_u, PDO::PARAM_INT);
            $req->bindValue(":valid", 1, PDO::PARAM_INT);

            try {
                $req->execute();
                return true;
            }
            catch(PDOException $e) {
                return $e->getMessage();
            }
        }
    }

    function desinscrire($id_c) {
        global $con;
        $sql = "UPDATE inscrit SET valid = :valid WHERE id_cours = :id_c AND id_utilisateur = :id_u";
        $req = $con->prepare($sql);
        $req->bindValue(":valid", 0, PDO::PARAM_INT);
        $req->bindValue(":id_c", $id_c, PDO::PARAM_INT);
        $req->bindValue(":id_u", $_SESSION["id"], PDO::PARAM_INT);

        try {
            $req->execute();
            return true;
        }
        catch(PDOException $e) {
            return $e->getMessage();
        }

        return false;
    }

    function is_inscrit($id_c, $id_u) {
        global $con;
        $sql_check_ins = "SELECT * FROM inscrit WHERE id_cours = :id_c AND id_utilisateur = :id_u";
        $req_check_ins = $con->prepare($sql_check_ins);
        $req_check_ins->bindValue(":id_c", $id_c, PDO::PARAM_INT);
        $req_check_ins->bindValue(":id_u", $id_u, PDO::PARAM_INT);
        $req_check_ins->execute();
        $cours_valid = $req_check_ins->fetchColumn(3);
        $count = $req_check_ins->rowCount();

        if ($count == 1 && $cours_valid == 1) {
            return true;
        }

        return false;
    }







?>