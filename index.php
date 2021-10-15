<?php 
require __DIR__ . '/db/database.php';
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-ajax-dischi</title>

    <!-- Bootstrap v5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <!-- my css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <main class="container p-5">
        <div class="row px-lg-5">
            <div class="col-12">
                <div class="row row-cols-xl-6 row-cols-lg-5 row-cols-sm-3 row-cols-1 justify-content-center g-4">
                    <?php foreach($songss as $song) {?>
                    <div class="col box-song p-3 mx-3">
                        <div class="b-songs">
                            <img class="img-fluid" src="<?php echo $song['poster']; ?>" alt="<?php echo $song['title']; ?>">
                            <h5><?php echo $song['title'] ?></h5>
                            <p><?php echo $song['author'] ?></p>
                            <p><?php echo $song['year'] ?></p>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>   
    </main>
</body>
</html>