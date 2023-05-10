<?php
     session_start();
    // if (!isset($_SESSION['username'])) {
    //    header('Location: ./login.php');
    //     exit();
    // }
    //connexion à la base de données
    include './dbconnect.php';
    //requete update
    if (!empty($_POST)){
        //récupération des données saisies
        $Nom=$_POST['Nom'];
        $Duree=$_POST['Duree'];
        $date_event=$_POST['date_event'];
        $desc_event=$_POST['desc_event'];
        //réception de id
        $id = $_POST['id'];
        
        $sql = "UPDATE events 
                SET
                id = :id,
                Nom = :Nom,
                Duree = :Duree,
                date_event = :date_event,
                desc_event = :desc_event
                WHERE id = :id";
                $query = $pdo->prepare($sql);
                $query->bindValue(':id', $id);
                $query->bindValue(':Nom', $Nom);
                $query->bindValue(':Duree', $Duree);
                $query->bindValue(':date_event', $date_event);
                $query->bindValue(':desc_event', $desc_event);
                $query->execute();

                header('Location: table1.php');
                exit;
        }
    



    //requete selection données de la base des données
    $query = $pdo->prepare('SELECT * FROM events WHERE id= ?');
    $query->execute([$_GET['id']]);
    $event = $query->fetch();




    $template="etudiant_edit";
    $pagetitle="edit page";
    include "./layout.phtml";
?>