<?php

require 'index.php';

//prepare method
$statement = $pdo->prepare('DELETE FROM blog WHERE id=:id ');

//Executer la requete
$statement->execute([
    ':id' => 3
]);

//Fetch data
$results = $statement->fetch(PDO::FETCH_ASSOC);

var_dump($results);