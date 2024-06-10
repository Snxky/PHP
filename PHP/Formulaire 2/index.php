<form action="" method="post">
    <label for="id">Id</label><br>
    <input type="text" name="id" id="id"/><br>
    <label for="nom">Nom</label><br>
    <input type="text" name="nom" id="nom"/><br>
    <label for="prenom">Prenom</label><br>
    <input type="text" name="prenom" id="prenom"/><br>
    <input type="submit" value="Enregistrer"/>
    <input type="button" value="Afficher">
</form>
<?php
require "insertForm.php";
$statement=$pdo -> prepare("INSERT INTO posts (id,nom,prenom) VALUES(:id,:nom,:prenom)");

    $statement -> execute(
        [":id"=>$_POST['id'],
        ":nom"=>$_POST['nom'],
        ":prenom"=>$_POST['prenom']]
    );
?>





