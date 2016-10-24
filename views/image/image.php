<?php
/**
 * @var array $image Массив массив с данными об изображении, которое необходимо показать.
 */
?>


<div>
    <h1><?= $image['fullPath']; ?></h1>
        <div>
            <a href="index.php">Назад</a><br>
            <p>Популярность: <?= $image['popularity'] ?></p><br>
            <img src="i/full/<?=$image['fullPath']?>" style="...">
            </a>
        </div>

        <div>
            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST"">
                <label for="loadImage">Изменить title картинки:</label>
                <input type="text">
                <input type="submit" value = 'Загрузить изображение'>
            </form>
        </div>
</div>