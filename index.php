<?php
session_start();
require_once ('functions.php');
?>

<p>Привет, <?= getCurrentUserName(); ?></p>

<?php if (isAuthorized()): ?>
    <a href="geekbrains/Logout.php">Выйти</a>
    <?php else: ?>
    <a href="geekbrains/Login.php">Войти</a>
<?php endif;?>
