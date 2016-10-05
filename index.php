<?php

require_once ('functions.php');
phpinfo();

if($_SERVER['REQUEST_METHOD']==='POST' && !empty($_FILES['image'])){
    $error = handleRequest($_FILES['image']);
}
?>


<!DOCTYPE html>
    <html>

        <head>
            <meta charset="utf-8"/>
            <title>Фотогалерея</title>
        </head>

        <body>
            <h1>Фотогалерея</h1>

            <div>
            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">
                <label for="loadImage">Загрузить новую картинку:</label>
                <input id="loadImage" type="file" name="image" />
                <input type="submit" value = 'Загрузить изображение'>
            </form>
            </div>

            <?php foreach (getImages() as $image): ?>
            <div>
                <a href = "img.php?img= <?= $image ?>">
                    <img src = "img/min/<?= $image ?>">
                </a>
            </div>
            <?php endforeach; ?>
        </body>
    </html>
