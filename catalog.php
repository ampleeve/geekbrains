<?php foreach ($goods as $good): ?>
    <div>
        <h2><?= $good['name'];?></h2>
        <img src="goods/"<?=$good['img']?> alt="<?=$good['name']?>" style = "width: 250 px;">

        <p>
            <?= mb_strlen($good['desc']) > 100
                ? mb_substr($good['desc'], 0, 97, "UTF-8") . "..."
                : $good['desc'] ; ?>
        </p>

        <p><?= $good['price']. " руб.";?></p>
    </div>
<?php endforeach; ?>