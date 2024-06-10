<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="conditions.css">
    <title>Document</title>
</head>
   <?php
    $signed = true;
     
    if ($logged == true){
    echo "You are logged in, Welcome!!";
    }else{
    echo " Please sign in";
}
?>
<body>
   <main class="main">
        <div class="first">
          <?php if($signed == false) : ?>
          <div class="logged">
            Log in
          </div>
          <?php else :?>
          <div class ="not-logged">
            Sign up to have an account
          </div>
          <?php endif; ?>
       
        </div>    
   </main>

   <?php 
    $today = 1;
    
    switch($today){
        case 1:
            echo "Lundi";
            break;
        case 2 :
            echo "Mardi";
            break;
        case 3 :
            echo "Mercredi";
            break;
        case 4 :
            echo "Jeudi";
            break;
        case 5 :
            echo "Vendredi";
            break;
        case 6 :
            echo "Samedi";
            break;
        case 7 :
            echo " Dimanche";
            break;
        default:
             echo "{$date} is not a day";
    }
    echo "<br>";

    $etudiants = ["1","2","3","4"];
    for($i = 0; $i<count($etudiants); $i++){
        echo $etudiants . "<br>";
    }
    echo "<br>";


    foreach ($etudiants as $etudiants){
        echo $etudiants . "<br>";
    }
    echo "<br>";

    foreach ($etudiants as $index => $etudiants){
        echo $etudiants . "|" .$index ."<br>";
    }

    $posts = [
        ['id'=> 1, 'titre'=>"My first post", 'contenu'=> 'bla bla bla bla', 'tags' => []],
        ['id'=> 2, 'titre'=>"My second post", 'contenu'=>'tatatatatatata' , 'tags'=>[]],
        ['id'=> 3, 'titre'=>"My third post",'contenu'=>'dadadadadada', 'tags'=>[]]
    ];

    var_dump($posts);
    
    if (isset($_GET['id'])){
       $posts = array_filter($posts,function($item){
        return $item['id'] == $_GET['id'];
       });
    }
    ?>

    <div class="row card-container">
        <?php foreach ($posts as $post): ?>
            <div class="col-md-4">
                <div class="card border-warning mb-3" style="max-width: 18rem;">
                    <div class="card-header text-warning"><?php echo($post['id']) . ") "; echo($post['titre']) ?></div>
                    <div class="card-body text-success">
                        <h5 class="card-title"><?php echo ($post['titre']) ?></h5>
                        <p class="card-text"><?php echo ($post['contenu']) ?></p>
                    </div>
                </div>
    </div>
       <?php endforeach; ?>

    
?>    
</body>
</html>












        
