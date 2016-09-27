<?php foreach ($goods as $good): ?>
    <div>
        <h2><?= $good['name'];?></h2>
        <img src="goods/<?= $good['img']; ?>" style = "width: 250px;">

        <p>
            <?= mb_strlen($good['desc']) > 100
                ? mb_substr($good['desc'], 0, 97, "UTF-8") . "..."
                : $good['desc'] ; ?>
        </p>

        <p><?= $good['price']. " руб.";?></p>
        <a href="?page=good&id=<?= $good['id']?>">Подробнее</a>
    </div>
<?php endforeach; ?>