<?php
if($_SERVER['REQUEST_METHOD']==='GET' && !empty($_GET['imgId'])){
    require_once ('functions.php');
    updatePopularity($_GET['imgId']);
    echo "Популярность фото: ". $_GET['imgP'];
}
?>

<!DOCTYPE html>
    <html>
        <head>
            <title>Галерея</title>
        </head>
        <body>
        <a href="index.php">Назад</a>
        <br>
        <img src="img/full/<?=$_GET['img'] ?>" style="...">
        </body>
    </html>