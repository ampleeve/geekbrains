<?php
/**
 * Возвращает массив названий изображений из директории min
 * @return array
 */
function getImages(){
    $images = [];
    $stream = opendir('img/min');
    while($item = readdir($stream)){
        if($item == '.' || $item == '..'){
            continue;
        }
        $images[] = $item;
    }
    return $images;
}
/**
 * Метод принимает загруженное изображение, проверяет его и сохраняет в папки img/full и img/min
 * @param $uploadedImage
 * @return string
 */
function handleRequest($uploadedImage){

    if($uploadedImage['error'] !== 0 ){
        return 'Ошибка загрузки изображения';
    }
    if($uploadedImage['size'] > 1024 * 1024){
        return 'Изображение должно быть меньше или равно 1 мб';
    }
    $ext = getExtensionByType($uploadedImage['type']);
    if(!$ext){
        return 'Не верное расширение изображения. Подходящие форматы *.jpg и *.png';
    }
    $imgName = md5(microtime());
    if(!move_uploaded_file($uploadedImage['tmp_name'], "img/full/$imgName.$ext")){
        return 'Не удалось загрузить файл';
    }
    if(!img_resize("img/full/$imgName.$ext", "img/min/$imgName.$ext", 300, 300)){
        return 'Файл загружен не корректно';
    }
    return '';
}

/**
 *
 * Возвращает тип изображения если допустимый формат или false
 * @param $type
 * @return bool|string
 */
function getExtensionByType($type){

    switch ($type) {

        case 'image/jpg':
            return 'jpg';

        case 'image/jpg':
            return 'png';

        default:
            return false;
    }
}

/**
 * Убедитесь, что у Вас подключена библиотека GD 2 (можно проверить в phpinfo(),
 * либо var_dump(gd_info()), либо в php.ini ищите строку extension=php_gd2.dll)
 * Если не подключена - нужно подключить GD 2
 * @param string $src - название файла-источника
 * @param string $dest - название файла-приемника
 * @param int $width - ширина генерируемого изображения
 * @param int $height - высота генерируемого изображения
 * @param int $rgb - цвет фона, по умолчанию - белый
 * @param int $quality - качество генерируемого JPEG, по умолчанию максимальное(100)
 * @return bool
 */
function img_resize($src, $dest, $width, $height, $rgb = 0xFFFFFF, $quality = 100)
{
    // если файл-источник не существует
    if (!file_exists($src)) {
        return false;
    }
    // получаем размеры изображения
    $size = getimagesize($src);
    // не смогли получить размер
    if ($size === false) {
        return false;
    }
    // Определяем исходный формат по MIME-информации, предоставленной
    // функцией getimagesize, и выбираем соответствующую формату imagecreatefrom-функцию.
    // imagecreatefrom-функция создает новое изображение из файла или URL.
    $format = strtolower(substr($size['mime'], strpos($size['mime'], '/')+1));
    $icfunc = "imagecreatefrom" . $format;
    if (!function_exists($icfunc)) {
        return false;
    }

    $x_ratio = $width / $size[0];
    $y_ratio = $height / $size[1];

    $ratio       = min($x_ratio, $y_ratio);
    $use_x_ratio = ($x_ratio == $ratio);

    $new_width   = $use_x_ratio  ? $width  : floor($size[0] * $ratio);
    $new_height  = !$use_x_ratio ? $height : floor($size[1] * $ratio);
    $new_left    = $use_x_ratio  ? 0 : floor(($width - $new_width) / 2);
    $new_top     = !$use_x_ratio ? 0 : floor(($height - $new_height) / 2);

    $isrc = $icfunc($src);
    //создает полноцветное изображение c заданными размерами
    $idest = imagecreatetruecolor($width, $height);
    // делаем заливку
    imagefill($idest, 0, 0, $rgb);
    // копирует и изменяет размеры части изображения
    // обратите внимание, что на выходе получаем jpg
    imagecopyresampled($idest, $isrc, $new_left, $new_top, 0, 0,
        $new_width, $new_height, $size[0], $size[1]);

    imagejpeg($idest, $dest, $quality); //выводит изображение в файл (но можно и в браузер)

    //освобождает память после  imagecreate()
    imagedestroy($isrc);
    imagedestroy($idest);

    return true;
}