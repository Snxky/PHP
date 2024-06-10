<?php

session_start();

require 'conxDB.php';

$usedb = $pdo->prepare("USE voyages");
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $statement =$pdo->prepare("SELECT * FROM employe WHERE user = :user AND pwd = :pwd ");
    $usedb->execute();
    $statement->execute([
        ":user"=>$_POST["user"],
        ":pwd" => $_POST["pwd"]
    ]);
    $employe = $statement->fetch(PDO::FETCH_ASSOC);
    if($employe){
        $_SESSION["codeEmp"] = $employe['codeEmp'];
        $_SESSION["nom"] = $employe['nom'];
        $_SESSION["fonction"] = $employe['fonction'];
        header("Location: inscrire.php");
        exit;
    }else{
        header('Location: connEmp.php');
    }
   exit;
}


?>
<form action="" method="post">
    <label for="user">User:</label><br>
    <input type="text" name="user" id="user"/><br>
    <label for="pwd">Password:</label><br>
    <input type="text" name="pwd" id="pwd"/><br>
    <br>
    <input type="submit" value="Submit">
</form>