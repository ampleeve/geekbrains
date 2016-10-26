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



function actionIndex(){
    require_once (MODELS_DIR . '/' . 'images.php');
    if($_SERVER['REQUEST_METHOD']==='POST'){
        $error = handleRequest($_FILES['image']);
        if(!$error){
            throwError($error);
        }
        header("Location: /?controller=index&action=index");
        exit();
    }
    $images = getAllImages();
    return render('index', ['images' => $images], ['title' => ROOT_TITLE]);

}




/*
if($_SERVER['REQUEST_METHOD']==='POST') {
    $requestData = ['id' => $_POST['id'], 'newTitle' => $_POST['newTitle'], 'newAlt' => $_POST['newAlt']];
    $errors = validateForm($requestData);
    if(!$errors){
        throwError($errors);
    }
    if(!updateImage($requestData)){
        throwError("Не удалось обновить информацию об изображении");
    }
    header("Location: /?controller=image&action=ShowImage&id=" . $requestData['id']);
    exit();
}*/
/*
function actionIndex(){
    require_once (MODELS_DIR . '/' . 'images.php');
    if($_SERVER['REQUEST_METHOD']==='POST' && !empty($_FILES['image'])){
        $error = handleRequest($_FILES['image']);
        if (!empty($error)){
            throwError($error);
        }
    }
    $images = getAllImages();
    return render('index', ['images' => $images], ['title' => ROOT_TITLE]);
}*/

/**
 * @return string
 * Аналогичная обработка другого экшена - ошибки.
 */
function actionError(){
    $error = !empty($_REQUEST['error']) ? $_REQUEST['error'] : 'Ошибка сайта. Сайтам свойственно ошибаться..';
    return render('error', ['error' => $error], ['title' => 'Ошибка']);
}


