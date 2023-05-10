
<?php 
 session_start();
if (!isset($_SESSION['username'])) {
 //  header('Location: ./login.php');
    exit();
}
 include './dbconnect.php';   
  $query = $pdo->query('SELECT * FROM etudiant WHERE cin='.$_GET['id']);
    $etud = $query->fetch(PDO::FETCH_ASSOC);
  //  $query->execute([$_GET['id']]);
  $template="etudiant_details";
    $pagetitle="details page";
  include "./layout.phtml";
   ?>
