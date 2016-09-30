<?php
session_start();
require_once ('functions.php');
if (isAuthorized()){
    redirect('geekbrains/pageA.php');
}else{
    redirect('login.php');
}