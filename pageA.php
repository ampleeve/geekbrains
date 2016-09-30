<?php
session_start();
$_SESSION['lastPage'] = [

    'page' => 'pageA.php',
    'userId' => $_SESSION['id']

];

echo 'pageA';
echo '<br>';
echo $_SESSION['lastPage'];
?>
<a href="logout.php">Выйти</a>
<br>
<a href="pageB.php">К странице Б</a>
