<?php
/**
 * @var array $image Массив массив с данными об изображении, которое необходимо показать.
 */
?>


<div>
    <h1><?= $image['title']; ?></h1>
        <div>
            <a href="/">Назад</a><br>
            <p>Популярность: <?= $image['popularity'] ?></p><br>
            <img title="<?=$image['title']?>" alt="<?=$image['alt']?>" src="i/full/<?=$image['name']?>" style="...">
            </a>
        </div>

        <div>
            <form action="/?controller=image&action=showImage" method="POST">
                <label for="loadImage">Изменить title картинки:</label>
                <input type="text" name="newTitle"/>
                <label for="loadImage">Изменить Alt картинки:</label>
                <input type="text" name="newAlt"/>
                <input type="submit" value = 'Обновить данные'>
                <input type="hidden" name = "id" value=<?= $image['id'] ?>>
            </form>
        </div>
</div>