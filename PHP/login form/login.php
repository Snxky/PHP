<?php
session_start();
if(isset($_SESSION['user'])){
    header('Location: admin.php');
    exit;

}
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
    <div>
        <form action="traitement-login.php" method="POST">
        <div>
            <input type="text"  name="username" id="username" placeholder="Username" />
        </div>
        <div >
            <input type="password" id="password" name="password" placeholder="Password" />
        </div>
        <button type="submit" name="submit">Login</button>
        <a  href="register.php">Register</a>

        </form>
    </div>
    </div>
</body>
</html>