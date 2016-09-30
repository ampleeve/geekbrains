<?php
session_start();
require_once ('functions.php');
?>

<?php
if (isAuthorized() && isset($_SESSION ['lastPage'])){
    redirect($_SESSION['lastPage']);
}else{
    redirect('login.php');
}

?>