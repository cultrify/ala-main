<?php
     session_start();
  //  var_dump($_SESSION);
//     if (!isset($_SESSION['username'])) {
//         header('Location: ./login.php');
//         exit();
//          var_dump($_SESSION);
//    }
    //connexion à la base de données
    include './dbconnect.php';
    
    if (!empty($_POST)){
        //récupérer les variables du formulaire
        $Nom=$_POST['Nom'];
        $Duree=$_POST['Duree'];
        $date_event=$_POST['date_event'];
        $desc_event=$_POST['desc'];

        //developper la requete
        $sql = "INSERT INTO events (Nom, Duree , date_event, desc_event) VALUES (? , ?, ?, ?)";
        $query = $pdo->prepare($sql);
        $query->execute([$Nom, $Duree, $date_event , $desc_event]);
        //redirection à index.php
        header('Location: table1.php');
        exit();
    }
    $template="add_etudiant";
    $pagetitle="Add page";
    include "./layout.phtml";
?>