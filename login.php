<?php
session_start();
require_once ('functions.php');
echo $_SESSION['lastPage'];
echo '<br>';

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    if(login($_POST['login'], $_POST['password'])){
        redirect($_SESSION['lastPage']);
    }
    else{
        redirect('login.php');
    }
}
?>

<form action="login.php" method="post">
    <input type="text" name="login" placeholder="Login:" required>
    <input type="password" name="password" placeholder="Password:" required>
    <input type="submit" value="Login">
</form>
