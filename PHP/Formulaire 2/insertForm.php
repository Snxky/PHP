<?php
$host="localhost";
$port=3306;
$dbName='post';
$user="root";
$password="Lovingexoalot55";
$dsn = "mysql:host={$host};port={$port};dbname={$dbName};charset=utf8";

try{
    $pdo=new PDO($dsn,$user,$password);
    echo'connected successfully';

}catch(PDOException $e){
    echo "connected failed : ". $e->getMessage();
}
