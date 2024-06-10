<?php 
$host= 'local host' ;
$port = 3306 ;
$dbName = 'gestion_produits';
$user = 'root';
$password = 'Lovingexoalot55';
$dsn = "mysql: host={$host};port={$port};dbName={$dbName};charset=utf8";


try{

    
    
    
    $pdo = new PDO($dsn,$user,$password);

    echo 'connected succefully';
} catch (PDOException $e){
    echo "connection failed:".$e->getMessage();
}  