<?php
$host = "localhost";
$username = "root";
$password = "Lovingexoalot55";
$dbname = "post";
$port = 3306;

// Create connection
$conn = new mysqli($host, $username, $password, $dbname, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: ". $conn->connect_error);
}


$statement = $conn->prepare("INSERT INTO posts (id, nom, prenom) VALUES (?, ?, ?)");
$statement->bind_param("iss", $id, $nom, $prenom);


$id= $_GET['id'];
$nom= $_GET['nom'];
$prenom= $_GET['prenom'];
$statement->execute();

echo "New record created successfully";

$statement->close();
$conn->close();

header("Location:index.php");



?>
