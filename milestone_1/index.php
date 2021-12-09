<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dischi</title>
    <!-- My StyleSheet -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <!-- Bootstrap CSS -->
    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css' integrity='sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh' crossorigin='anonymous'>
    
    <?php require 'db.php'; ?>
</head>
<body>
    <header id="site_header">
        <img src="../assets/img/logo.png" alt="Spotify" />
    </header>
    <!-- /#site_header -->

    <main id="site_main">
        <div class="d-flex justify-content-center flex-wrap">
            <?php foreach ($albums as $album): ?>
                <div class="row">
                    <div class="col-lg-2">
                        <div class="card text-center m-2 rounded-0">
                            <img src="<?= $album[
                                'poster'
                            ] ?>" class="img-fluid"/>
                            <h4 class="text-uppercase my-3"><?= $album[
                                'title'
                            ] ?></h4>
                            <p class="py-0 my-0"><?= $album['author'] ?></p>
                            <p class="py-0 my-0"><?= $album['year'] ?></p>
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
            <?php endforeach; ?>            
        </div>
    </main>
    <!-- /#site_main -->

</body>
</html>