<a href="index.php" >insert</a><br>
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

$sql = "SELECT * FROM posts";

$result = $conn->query($sql);


$conn->close();
                                                                                                                                
?>