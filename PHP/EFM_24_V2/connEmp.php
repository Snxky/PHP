<?php
session_start();

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $statement->$pdo->prepare("SELECT * FROM employe WHERE user = :user pwd = :pwd ");
    $statement->execute([
        ":user"=>$_POST['user'],
        ":pwd" => $_POST["pwd"]
    ]);
    header("Location: test.php");
}


?>
<form action="/" method="post">
    <label for="user">User:</label><br>
    <input type="text" name="user" id="user"/><br>
    <label for="pwd">Password:</label><br>
    <input type="text" name="pwd" id="pwd"/><br>
    <br>
    <input type="submit" value="Submit">
</form>