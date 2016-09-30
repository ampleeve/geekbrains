<?php
session_start();
echo 'pageB';
$_SESSION['lastPage'] = 'pageB';