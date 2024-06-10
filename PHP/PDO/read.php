<?php

require 'index.php';

//prepare method
$statement = $pdo->prepare('SELECT * FROM blog');

//Executer la requete
$statement->execute();

//Fetch data
$results = $statement->fetch(PDO::FETCH_ASSOC);

var_dump($results);