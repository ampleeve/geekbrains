<?php

session_start();
$_SESSION['user'] = 'Vasily';
//unset($_SESSION['user']);
session_destroy();
echo '<pre>';
var_dump($_SESSION['user']);

/*setcookie('name', 'Vasiliy', time() - 3600 * 24);
if (isset($_COOKIE ['name'])) {
    echo $_COOKIE ['name'];
}else{
    echo 'Пусто';
}
?>

<br>
<br>
<pre>
<?php
var_dump($_COOKIE);
?>*/