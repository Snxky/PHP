<?php

require 'index.php';

//prepare method
$statement = $pdo->prepare('INSERT INTO blog (id,titre, contenu) VALUES (:id, :titre, :contenu)');

//Executer la requete
$statement->execute([
    ':id' => 3,
    ':titre' =>'Third Post',
    ':contenu' => 'hvgvh vhjvh'
]);

//Fetch data
$results = $statement->fetch(PDO::FETCH_ASSOC);

var_dump($results);