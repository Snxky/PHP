<?php
$host = "localhost";
$port = 3306;
$dbname = "voyages";
$user = "root";
$password = "Lovingexoalot55";

$dsn = "mysql:host = {$host}; port = {$port}; dbname = {$dbname}";

try{
    $pdo = new PDO ($dsn, $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    echo 'Connected successfully';

}catch(PDOException $e){
    'Connection Failure: '. $e->getMessage();
    
}

?>