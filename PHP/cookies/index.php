<?php
//setcookie(name, value, expire, path, domain, security(true if https));

setcookie($groupe,'dd105',time()+60,'/');

require 'gestion_produits';

$statement = $pdo->prepare('SELECT* FROM posts');
$statement->execute();

$posts = $statement 
?>