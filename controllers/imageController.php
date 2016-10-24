<?php
/**
 * @return string
 * Данная функция срабатывает в том случае если вызван экшн по умолчанию или index - это понятно по вызывающему коду.
 * Сначала подключается модель(и), которые необходимы для корректной обработки данного экшена. В данном случае у нас есть
 * модель users, в которой содержаться функции по работе с пользователями, в частности получение всех пользователей из бд
 * getAllUsers. Далее мы получаем всех пользователей из бд и сохраняем их  в массиве $users. Затем вызываем функцию ядра
 * , в которую передаем название view, которая отвечает за отображение данных по этому экшену, сами данные в виде массива
 * и метаданные, в нашем случае тайтл страницы
 */
function actionShowImage(){
    $image ['id'] = !empty($_GET['id']) ? $_GET['id'] : false;
    if($image['id'] != false){
        require_once (MODELS_DIR . '/' . 'image.php');
        if($_SERVER['REQUEST_METHOD']==='POST' && !empty($_POST['newTitle'])){
            updateTitle($image['id'], $_POST['newTitle']);
        }
        if($_SERVER['REQUEST_METHOD']==='POST' && !empty($_POST['newAlt'])){
            updateAlt($image['id'], $_POST['newAlt']);
        }
        addPopularity($image['id']);
        $image['popularity'] = getPopularity($image['id']);
        $image['fullPath'] = getFullPath($image ['id']);
        $image['title'] = getTitle($image ['id']);
        $image['alt'] = getAlt($image ['id']);
        return render('image', ['image' => $image], ['title' => 'Просмотр изображения']);
    }
}

/**
 * @return string
 * Аналогичная обработка другого экшена - ошибки.
 */
function actionError(){
    $error = !empty($_REQUEST['error']) ? $_REQUEST['error'] : 'Ошибка сайта. Сайтам свойственно ошибаться..';
    return render('error', ['error' => $error], ['title' => 'Ошибка']);
}