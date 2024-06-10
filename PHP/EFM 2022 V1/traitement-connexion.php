<?php
session_start();
require 'database.php';

if(empty($_POST['email']) || empty($_POST['password'])){
    $_SESSION['loginError'] = "Les donnees d'authentificatin sont obligatoires";
    header("Location: connexion.php");
    exit;
}

$statement= $pdo->prepare("SELECT * FROM client WHERE email = :email AND password = :password");
$statement->execute([
    ':email'=> $_POST['email'],
    ':password' => $_POST['password']
]);

$client = $statement->fetch(PDO::FETCH_ASSOC);
if($client){
    $_SESSION["id_client"] = $client['id_client'];
    // $_SESSION["nom"] = $client['nom'];
    // $_SESSION["prenom"] = $client['prenom'];
    unset($_SESSION['loginError']);
    header("Location: locationEnCours.php");
    exit;   
}else{
    $_SESSION['loginError'] = "Les donnees sont incorrects";

    header("Location: connexion.php");
    exit;
}

?>