<?php
session_start();
//var_dump($_SESSION);
session_start();
include './dbconnect.php';

//solution1 (tableau indexé)
//$query = $pdo->prepare('DELETE FROM todos WHERE id= ?');
//$query->execute([$_GET['id']]);

//solution2 (tableau associatif)
$query = $pdo->prepare('DELETE FROM events WHERE id= :id');
$query->execute([
    'id' => $_GET['id']
]);

header('Location: table1.php');
exit();
?>