<?php
	include_once 'C:\xampp\htdocs\ala-main-main-20230510T005556Z-001\ala-main-main\config.php';
	include_once 'C:\xampp\htdocs\ala-main-main-20230510T005556Z-001\ala-main-main\Model\organisation.php';
	class organisationC {
		function afficherorganisation(){
			$sql="SELECT * FROM organisation";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		}
		function supprimerorganisation($id_organisation){
			$sql="DELETE FROM organisation WHERE id_organisation=:id_organisation";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id_organisation', $id_organisation);
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		}
		function ajouterorganisation($Produit){
			$sql="INSERT INTO organisation (id_organisation, organisateur,id_evenemmet) 
			VALUES (:id_organisation,:organisateur,:id_evenemmet)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					'id_organisation' => $Produit->getid_organisation(),
					'organisateur' => $Produit->getorganisateur(),
					'id_evenemmet' => $Produit->getid_evenemmet(),
				]);	
				echo "Produit ajouté !";		
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		

	}
?>