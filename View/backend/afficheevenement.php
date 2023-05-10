<?php
include 'C:\xampp\htdocs\gestionevenment-saeed\Controller\EvenementC.php';
$evenementC = new evenementC();
if (isset($_GET['idd'])) {
    $listeevenement = $evenementC->recherche($_GET['idd']);}

?>


<html>

<head>

</head>

<body>            
    <button><a href="ajoutevenement.php">Ajouter une event</a></button>
    <form action="" method="POST">
    <input type="text" name="tri" hidden>
    <input type="submit" value="trier" class="btn btn-primary">
</form>

    <center>
        <h1>Liste des evenements </h1>
    </center>
    <table border="1" align="center" class="table table-bordered">
        <tr>
            <th>id_evenemment</th>
            <th>nom_evenemment </th>
            <th>date_debut</th>
            <th>date_fin</th>
            <th>prix</th>
            <th>description</th>
            <th>localisation</th>
            <th>Modifier</th>
            <th>Supprimer</th>
        </tr>
        <?php
		foreach ($listeevenement as $evenement) {
		?>
        <tr>
            <td><?php echo $evenement['id_evenemment']; ?></td>
            <td><?php echo $evenement['nom_evenemment']; ?></td>
            <td><?php echo $evenement['date_debut']; ?></td>
            <td><?php echo $evenement['date_fin']; ?></td>
            <td><?php echo $evenement['prix']; ?></td>
            <td><?php echo $evenement['description']; ?></td>
            <td><?php echo $evenement['localisation']; ?></td>
            
            <td>
                <form method="POST" action="upadeevenment.php">
                    <input type="submit" name="Modifier" value="Modifier" >
                    <input type="hidden" value=<?PHP echo $evenement['id_evenemment']; ?> name="id_evenemment">
                </form>
            </td>
            <td>
                <a href="supprimerevent.php?id_evenemment=<?php echo $evenement['id_evenemment'] ; ?>"><img src="supp.png" witdh='25px' height='25px'></a>
            </td>
        </tr>
        <?php
		}
		?>
        </table>
        <link rel="stylesheet" href="mystle.css">
    </body>
 

    <!-- Template Javascript -->
    <script src="../../js/main.js"></script>
</html>



