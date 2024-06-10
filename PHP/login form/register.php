<?php 
require 'connectdb.php';

if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST["submit"])) {
    $name = $_POST["name"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmpassword = $_POST["confirmpassword"];

    
    $statement = $pdo->prepare("SELECT * FROM user WHERE username = :username OR email = :email");
    $statement->execute([
        ':username' => $username,
        ':email' => $email
    ]);

    if ($statement->rowCount() > 0) {
        echo "<script>alert('Ce nom d'utilisateur ou cet email est déjà utilisé');</script>";
    } else {
        if ($password == $confirmpassword) {

            $statement = $pdo->prepare("INSERT INTO user (name, username, email, password) VALUES (:name, :username, :email, :password)");
            if ($statement->execute([
                ':name' => $name,
                ':username' => $username,
                ':email' => $email,
                ':password' => $password,
            ])) {
                echo "<script>alert('Inscription réussie')</script>";
            } else {
                echo "<script>alert(Échec de l inscription')</script>";
            }
        } else {
            echo "<script>alert('Le mot de passe ne correspond pas')</script>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body>
    <div>
        <div >
            <div >
                <h2 >Sign Up</h2>
                <p>Already have an account? <a href="login.php" title="Sign In">Sign in here</a></p>
                <form  method="POST" action="">
                    <div>
                        <label for="name" class="text-gray-700">Name</label>
                        <input type="text" name="name" id="name" placeholder="Enter your name" required>
                    </div>
                    <div >
                        <label for="username" >Username</label>
                        <input type="text" name="username" id="username"  placeholder="Enter your username" required>
                    </div>
                    <div >
                        <label for="email" >Email Address</label>
                        <input type="email" name="email" id="email" placeholder="Enter your email" required>
                    </div>
                    <div >
                        <label for="password" >Password</label>
                        <div x-data="{ show: false }">
                            <input :type=" show ? 'text': 'password' " name="password" id="password"  placeholder="Enter your password" required>
                            <button @click="show = !show" type="button"></button>
                        </div>
                    </div>
                    <div >
                        <label for="confirmpassword" >Password Confirmation</label>
                        <div x-data="{ show: false }" >
                            <input :type=" show ? 'text': 'password' " name="confirmpassword" id="confirmpassword" placeholder="Enter your password again" required>
                            <button @click="show = !show" type="button" ></button>
                        </div>
                    </div>
                    <div>
                        <button name="submit" >Sign Up</button>
                    </div>
                </form>
                
            </div>
        </div>
    </div>
</body>
</html>