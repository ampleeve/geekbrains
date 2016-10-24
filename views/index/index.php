<?php
/**
 * @var array $users Массив с пользователями
 */
?>

<div>
    <h1>Пользователи сайта:</h1>
    <?php foreach ($users as $user): ?>
        <p><?= $user['login']; ?></p>
    <?php endforeach;?>
</div>
