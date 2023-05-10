<?php
include '../../Controller/EvenementC.php';
$clientC = new evenementC();
$clientC->supprimerévent($_GET["id_evenemment"]);
header('Location:listevenment.php');