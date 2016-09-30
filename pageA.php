<?php
session_start();
$_SESSION['lastPage'] = 'pageA.php';

echo 'pageA';
echo '<br>';
echo $_SESSION['lastPage'];
?>
<a href="logout.php">Выйти</a>
<br>
<a href="pageB.php">К странице Б</a>
