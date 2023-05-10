<?php
include "../../config.php";

class CrudBlocked
{
    public static function insert($usrn)
    {
        $sql = "INSERT INTO blocked (client) VALUES (:client)";
        $db = config::getConnexion();

        try {
            $req = $db->prepare($sql);

            $req->bindValue(":client", $usrn);

            $x = $req->execute();
            return $x == true ? null : "error";
        } catch (Exception $e) {
            return 'Erreur: ' . $e->getMessage();
        }
    }

    public static function Delete($id)
    {
        $sql = "DELETE FROM blocked where id=:id";
        $db = config::getConnexion();
        try {
            $req = $db->prepare($sql);
            $req->bindValue(':id', $id);
            $req->execute();
            return null;
        } catch (Exception $e) {
            return 'Erreur: ' . $e->getMessage();
        }
    }

    public static function FindAll()
    {
        $sql = "SELECT * FROM blocked";
        $db = config::getConnexion();
        try {
            $result = $db->query($sql);
            return $result->fetchAll();
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }


    public static function IsBlocked($username)
    {
        $sql = "SELECT * FROM blocked where client='" . $username . "'";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);

            if ($liste->rowCount() > 0) {
                return true;
            }
            return false;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
}
?>