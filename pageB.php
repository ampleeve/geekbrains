<?php
session_start();
$_SESSION['lastPage'] = 'pageB.php';

echo 'pageB';
echo '<br>';
echo $_SESSION['lastPage'];
?>
<a href="logout.php">Выйти</a>
<br>
<a href="pageA.php">К странице А</a>