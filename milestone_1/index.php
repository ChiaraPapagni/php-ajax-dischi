<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dischi</title>
     <?php include 'db.php'; ?>
</head>
<body>
    <div>
        <?php foreach ($albums as $album): ?>
            <div>
                <img src="<?= $album['poster'] ?>"/>
                <h3><?= $album['title'] ?></h3>
                <span class='author'><?= $album['author'] ?></span>
                <span><?= $album['genre'] ?></span>
                <span><?= $album['year'] ?></span>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>