<?php 
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET['id'])) {
       
        require ('insertForm.php');
        $statement = $pdo -> prepare('SELECT * FROM articles WHERE id =:id');
        $statement->execute([
            ':id' => $_GET['id']
        ]);

        $post = $statement->fetch(PDO::FETCH_ASSOC);
    } 
} 

?>



<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <div>
        <h1>Blog en ligne</h1>
    </div>

    <div>
        <?php

        ?>
      
        <article>
            <h1><?php echo $post['title']; ?></h1>
            <p><?php echo $post['content']; ?></p>
            <form action="supprimer_post.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $post['id']; ?>">
                <input type="hidden" name="_method" value="delete">
                <input type="submit" value="Supprimer">
            </form>

        </article>
    </div>
</body>
</html>