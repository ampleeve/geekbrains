<?php
require_once('functions.php');
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

<?php

if (!empty($error)){
    echo $error;
}

?>

<div>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">
        <label for="loadImage">Загрузить новую картинку:</label>
        <input id="loadImage" type="file" name="image" />
        <input type="submit" value = 'Загрузить изображение'>
    </form>
</div>

<?php foreach (getImages() as $imageId): ?>
    <div>
        <a href = "image.php?img=<?= getNameFromId($imageId) ?>&imgId=<?= $imageId ?>&imgP=<?= getPopularity($imageId) ?>">
            <img src = "img/min/<?= getNameFromId($imageId) ?>">
        </a>
    </div>
<?php endforeach; ?>
</body>
</html>

