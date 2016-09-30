<?php
session_start();
echo 'pageA';
$_SESSION['lastPage'] = 'pageA';