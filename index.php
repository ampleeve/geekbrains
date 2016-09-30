<?php
session_start();
require_once ('functions.php');
?>

<p>Привет, <?= getCurrentUserName(); ?></p>



<?php
if (isAuthorized()){
    redirect('pageA.php');
}else{
    redirect('Login.php');
}
?>
