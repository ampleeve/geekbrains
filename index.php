<?php
session_start();
require_once ('functions.php');
?>

<?php


if (isAuthorized() && isThisUserLastPage() ){
    redirect($_SESSION['lastPage']['page']);
}else{
    redirect('login.php');
}

?>