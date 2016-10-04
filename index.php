<?php


function uploadFile($file){
    if($file['image'] == '' || !getimagesize($file['image'])){
        echo "Файл не выбран или не изображение!";
    }

    if(copy($file['tmp_name'], 'img/'.$file['image'])){
        echo "Файл успешно загружен";
    }
    else{
        echo "Ошибка загрузки файла";
    }
}
/*$var = mt_rand(0,1);

function log1($msg) {
$time = date('H:i:s');
$f = fopen('log.txt', 'a+'); fputs($f, "$time: $msg \n"); fclose($f);
}
if($var==1){

    log1('попали сюда');

} else {

    log1('попали туда');

}
echo '<pre>';
$var = file('log.txt');
var_dump($var);*/
?>
<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8"/>
            <title>Фотогалерея</title>
        </head>
        <body>
        <h1>Фотогалерея</h1>

        <?php
        if(isset($_FILES['file'])){
            uploadFile($_FILES['file']);
        }
        ?>

        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">
            <input type="file" name="image" />
            <input type="submit" value = 'Загрузить изображение'>
        </form>

        </body>
    </html>