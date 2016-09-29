<?php
session_start();
require_once ('functions.php');

if(isAuthorized()){
redirect('/geekbrains');
}
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    if(login($_POST['login'], $_POST['password'])){
        redirect('/geekbrains');
    }
    else{
        echo '<p>Login or password is incorrect..</p>';
    }
}
?>

<form action="Login.php" method="post">
    <input type="text" name="login" placeholder="Login:" required>
    <input type="password" name="password" placeholder="Password:" required>
    <input type="submit" value="Login">
</form>
