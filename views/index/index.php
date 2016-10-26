<?php
/**
 * @var array $images Массив с изображениями
 */
?>

<div>
    <h1>Добавленные изображения по убыванию количества просмотров:</h1>

    <?php foreach ($images as $imageId): ?>
        <div>
            <a href = "/?controller=image&action=showImage&id=<?= $imageId['id'] ?>">
                <img width="50" border="1" src = "i/min/<?= $imageId['name']; ?>">
            </a>
        </div>
    <?php endforeach; ?>
</div>

<div>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">
        <label for="loadImage">Загрузить новую картинку:</label>
        <input id="loadImage" type="file" name="image" />
        <input type="submit" value = 'Загрузить изображение'>
    </form>
</div>