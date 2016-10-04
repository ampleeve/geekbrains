<?php
function uploadFile($file){
    echo '<pre>';
    var_dump(getimagesize($file['tmp_name']));
    if($file['name'] == '' || !getimagesize($file['tmp_name']) ){
        echo "Файл не выбран или вы пытаетесь загрузить не изображение, к сожалению..";
    }
    elseif(copy($file['tmp_name'], 'img/'.$file['name'])){
        echo "Файл успешно загружен";
    }
    else{
        echo "Ошибка загрузки файла";
    }
}
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
        if(isset($_FILES['image'])){
            uploadFile($_FILES['image']);
        }
        ?>

        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">
            <input type="file" name="image" />
            <input type="submit" value = 'Загрузить изображение'>
        </form>

        </body>
    </html>