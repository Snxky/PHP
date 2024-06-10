<?php
$host = 'localhost';
$port = 3306;
$dbname = 'hotels';
$user = 'root';
$password = 'Lovingexoalot55';

$dsn = "mysql:host = {$host};port = {$port}; dbname = {$dbname}";

try{
    $pdo = new PDO($dsn, $user, $password);
    echo 'connected successfully';
}catch (PDOException $e){
    echo'Connection failure: '.$e->getMessage();
}

?>