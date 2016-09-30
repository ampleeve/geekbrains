<?php
session_start();
require_once ('functions.php');
?>

<p>Привет, <?= getCurrentUserName(); ?></p>



<?php
if (isAuthorized()){
    redirect($_SESSION['lastPage']);
}else{
    redirect('Login.php');
}
?>

<?php if (isAuthorized()): ?>
    <a href="Logout.php">Выйти</a>
<?php else: ?>
    <a href="Login.php">Войти</a>
<?php endif;?>
