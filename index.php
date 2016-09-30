<?php
session_start();
require_once ('functions.php');
if (isAuthorized()){
    redirect('/pageA.php');
}else{
    redirect('login.php');
}