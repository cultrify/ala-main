<?php
include_once 'C:\xampp\htdocs\ala-main-main-20230510T005556Z-001\ala-main-main\config.php';
include_once 'C:\xampp\htdocs\ala-main-main-20230510T005556Z-001\ala-main-main\Model\Evenement.php';
class evenementC
{
	
		
	function geteventbyid_evenemment($id_evenemment)
        {
            $requete = "select * from évent where id_evenemment=:id_evenemment";
            $config = config::getConnexion();
            try {
                $querry = $config->prepare($requete);
                $querry->execute(
                    [
                        'id_evenemment'=>$id_evenemment
                    ]
                );
                $result = $querry->fetch();
                return $result ;
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }	
	
    function afficherevenemment()
    {
        $sql = "SELECT * FROM évent";
        $db = config::getConnexion();
        try {
			$liste = $db->query($sql);
			return $liste;
		}catch (Exception $e) {
			die('Erreur:' . $e->getMessage());
		}
    }
    function supprimerévent($id_evenemment)
        {
            $config = config::getConnexion();
            try {
                $querry = $config->prepare('
                DELETE FROM évent WHERE id_evenemment=:id_evenemment
                ');
                $querry->execute([
                    'id_evenemment'=>$id_evenemment
                ]);
                
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }
    function ajouteévent($évent)
	{
		$sql = "INSERT INTO évent (id_evenemment,nom_evenemment,date_debut,date_fin,prix,description,localisation) 
			VALUES ( :id_evenemment, :nom_evenemment, :date_debut, :date_fin, :prix , :description , :localisation)";
		$db = config::getConnexion();
		try {
            $query = $db->prepare($sql);
			$query->execute([
				'id_evenemment' => $évent->getid_evenemment(),
				'nom_evenemment' => $évent->getnom_evenemment(),
				'date_debut' => $évent->getdate_debut()->format('Y/m/d'),
				'date_fin' => $évent->getdate_fin()->format('Y/m/d'),
				'prix' => $évent->getprix(),
                'description' => $évent->getdescription(),
				'localisation' => $évent->getlocalisation(),
				
			]);
		} catch (Exception $e) {
			echo 'Erreur: ' . $e->getMessage();
		}
    
	}
    function recupererévent($id_evenemment)
	{
		$sql = "SELECT * from évent where id_evenemment=$id_evenemment";
		$db = config::getConnexion();
		try {
			$query = $db->prepare($sql);
			$query->execute();

			$évent = $query->fetch();
			return $évent;
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}


}


function getEventsSortedById()
{
    $query = "SELECT * FROM évent ORDER BY id_evenement";
    $config = config::getConnexion();
    try {
        $statement = $config->prepare($query);
        $statement->execute();
        $result = $statement->fetchAll();
        return $result;
    } catch (PDOException $th) {
        // Add error handling/logging here
        throw $th;
    }
}

function searchEventsByName($searchTerm)
{
    $query = "SELECT * FROM évent WHERE nom_evenement LIKE :searchTerm";
    $config = config::getConnexion();
    try {
        $statement = $config->prepare($query);
        $statement->bindValue(':searchTerm', "%$searchTerm%");
        $statement->execute();
        $result = $statement->fetchAll();
        return $result;
    } catch (PDOException $th) {
        // Add error handling/logging here
        throw $th;
    }
}




function modifierévent($évent, $id_evenemment)
{
    try {
        $db = config::getConnexion();
        $query = $db->prepare(
            'UPDATE évent SET 
            nom_evenemment =:nom_evenemment,
            date_debut=:date_debut, 
            date_fin=:date_fin,
            prix=:prix,
            description=:description,
            localisation =:localisation       
                    
                WHERE id_evenemment= :id_evenemment'
        );
        $query->execute([
            'id_evenemment' => $évent->getid_evenemment(),
				'nom_evenemment' => $évent->getnom_evenemment(),
				'date_debut' => $évent->getdate_debut()->format('Y/m/d'),
				'date_fin' => $évent->getdate_fin()->format('Y/m/d'),
				'prix' =>$évent->getprix(),
                'description' => $évent->getdescription(),
				'localisation' => $évent->getlocalisation()
				
            
        ]);
        echo $query->rowCount() . " records UPDATED successfully <br>";
    } catch (PDOException $e) {
        $e->getMessage();
    
    }


}

}
?>