<?php
/**
 *
 * @var string $title Заголовок
 * @var string $content Контент страницы
 */
?>

<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8">
            <title> <?= $title; ?> </title>
        </head>
        <body>

        <div>
            здесь меню
        </div>

        <div>
            <?= $content; ?>
        </div>
        </body>
    </html>