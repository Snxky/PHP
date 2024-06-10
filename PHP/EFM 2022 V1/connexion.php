<?php 
session_start();
$loginError = '';
if(isset($_SESSION['loginError'])){
    $loginError = $_SESSION['loginError'];
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Connexion</title>
</head>
<body>
    <!-- component -->
<!-- This is an example component -->
 <div>
         <div>
                  <h6 >Login</h6>

                </div>
                <form action="traitement-connexion.php" method="POST">
                    <div>
                        <input id="email" type="email" name="email"placeholder="Email"/>
                    </div>
                    <div >
                        <input type="showPass ? 'password' : 'text'" id="password" name="password" placeholder="Mot de passe" />
                            <div >
                                <p  @click="showPass = !showPass" x-text ="showPass ? 'Show' : 'Hide'">Show</p>
                            </div>
                            <span><?= $loginError ?> </span>
                    </div>

                    <button type="submit">Connexion</button>
                </form>
            </div>
    </div>
</div>
</body>
</html>