<?php
//setcookie(name, value, expire, path, domain, security(true if https));

session_start();

$_SESSION['user']= 'ADMIN USER';



setcookie('groupe','dd105',time() + 60,'/');



echo 'you bbbbbbbbbbbb'.$_COOKIE['groupe']




?>

<form action="" method="post">
    <label for="id">Id</label><br>
    <input type="text" name="id" id="id"/><br>
    <label for="libelle">Libelle</label><br>
    <input type="text" name="libelle" id="libelle"/><br>
    <label for="categorie">Categorie</label><br>
    <input type="text" name="categorie" id="categorie"/><br>
    <label for="prix">Prix</label><br>
    <input type="text" name="prix" id="prix"/><br>
    <label for="quantite">Quantite</label><br>
    <input type="text" name="quantite" id="quantite"/><br>
    <input type="submit" value="Enregistrer"/>
</form>
<?php
require "index.php";

$statement1 = $pdo -> prepare('USE gestion_produits;');
$statement1->execute();


$statement=$pdo -> prepare("INSERT INTO produits (id,libelle,categorie,prix,quantite) VALUES(:id,:libelle,:categorie,:prix,:quantite)");

    $statement -> execute(
        [":id"=>$_POST['id'],
        ":libelle"=>$_POST['libelle'],
        ":categorie"=>$_POST['categorie'],
        ":prix"=>$_POST['prix'],
        ":quantite"=>$_POST['quantite']]
    );
?>
    