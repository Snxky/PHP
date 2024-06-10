<?php 
require "database.php";

$statement = $pdo -> prepare('SELECT * FROM client');
$statement ->execute();
$clients = $statement ->fetchAll(PDO::FETCH_ASSOC);


?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Liste des clients</title>
</head>
<body>
    <header >
        <h1>Liste des Clients</h1> 
        <form action="deconnexion.php" method="post">
            <button type="submit">Se Déconnecter</button>
        </form>
           
    </header>
    <!-- component -->
    <div >Liste des Clients</div>
    <a href="ajouter.php" >Ajouter</a>
<table >
		<thead >
			<tr >
				<th >Nom</th>
				<th >Prénom</th>
				<th >CIN</th>
				<th >Email</th>
				<th>Actions</th>
			</tr>
		</thead>
		<tbody">
            <?php foreach ($clients as $client) :?>
                <tr >
                    <td ><?php echo $client['nom'] ;?></td>
                    <td><?php echo $client['prenom'] ;?></td>
                    <td><?php echo $client['cin'] ;?></td>
                    <td><?php echo $client['email'] ;?></td>
                    
                    <td>
                    
                        <a href="modifier.php?id= "><button type="submit" name="modifier">Modifier</button></a>
                        <a href="supprimer.php?id= <?php echo $client['id_client']; ?>"><button type="submit" name="supprimer" id="supprimer" onclick="confirmSuppression(event)"> Supprimer</button></a>

                        
                    </td>
                </tr>	
            <?php endforeach ?>
		</tbody>
	</table>
    <script>
        
        function confirmSuppression(event) {
            if (!confirm('Êtes-vous sûr de vouloir supprimer ce client ?')) {
                event.preventDefault();
            }
        }
    </script>
</body>
</html>

