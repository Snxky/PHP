<?php

$host = 'localhost';
$port = 3306;
$dbName = 'blog';

$user = 'root';
$password= 'Lovingexoalot55';

$dsn = "mysql:host={$host};port={$port};dbname={$dbName};charset=utf8";



try{

    $pdo = new PDO($dsn, $user, $password);
    echo 'connected successfully';

} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}