<?php
/*
$file = 'test.txt';
$data = 'hello world!';
$stream = fopen($file, 'w+');
fwrite($stream, $data);
fclose($stream);
*/
/*
$file = 'test.txt';
$stream = fopen($file, 'r');
$buffer = '';
while (!feof($stream)) {
  $buffer .= fread($stream, 1);
}
fclose($stream);
echo $buffer;
*/
/*
$file = 'test.txt';
$stream = fopen($file, 'r');
$buffer = fread($stream, filesize($file));
fclose($stream);
echo $buffer;
*/
/*
$file = 'test.txt';
$data = 'Привет!';
file_put_contents($file, $data);
echo file_get_contents($file);
*/
/*
$dir = './';
$stream = opendir($dir);
while ($item = readdir($stream)) {
  echo $item . '<br>';
}
closedir($stream);
*/
phpinfo();
echo '<pre>';
//var_dump($_FILES);
//var_dump(getimagesize($_FILES['image']['tmp_name']));
;
move_uploaded_file(
  $_FILES['image']['tmp_name'],
  'uploads/' . md5(microtime()) . '.' . end(explode('.', $_FILES['image']['name']))
);
echo '</pre>';
?>

<form action="<?= $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
  <input type="file" name="image">
  <input type="submit" value="Загрузить">
</form>

<img src="uploads/5d79f0f60db80aca78592ed711e8a878.jpg" alt="">