<?php
	include '../../Controller/organisationC.php';
	$organisationC = new organisationC();
	$organisationC->supprimerorganisation($_GET["id_organisation"]);
	header('Location:afficherorganisation.php');
?>