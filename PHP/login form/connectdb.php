<?php
$host = 'localhost';
$port = '3306';
$dbname = 'Login';
$user = 'root';
$password = 'Lovingexoalot55';


$dsn = 'mysql:host={$host};post={$port};dbname={$dbname}';


try{
    
    $pdo = new pdo($dsn, $user, $password);
    echo 'Connected successfully';

}catch (pdoException $e){
    echo 'Failed:'. $e->getMessage();
}


?>