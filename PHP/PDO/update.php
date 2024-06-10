<?php

require 'index.php';

//prepare method
$statement = $pdo->prepare('UPDATE blog SET titre=:titre ,contenu=:contenu WHERE id=:id');

//Executer la requete
$statement->execute([
    ':id' => 3,
    ':titre' =>'my update post',
    ':contenu' => 'key second'
]);

//Fetch data
$results = $statement->fetch(PDO::FETCH_ASSOC);

var_dump($results);