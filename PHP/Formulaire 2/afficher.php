<?php
    require ('insertForm.php');
    $statement = $pdo->prepare('SELECT * FROM articles');
    $statement->execute();
    $posts= $statement->fetchAll(PDO::FETCH_ASSOC);
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
        <?php foreach ($posts as $post) : ?>
        <article>
            <a href="post.php?id=<?php echo $post['id'];?>"><h1><?php echo $post['title']; ?></h1></a>
            <p><?php echo $post['content']; ?></p>

        </article>
        <?php endforeach; ?>
    </div>
</body>
</html>