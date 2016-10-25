<?php
/**
 * @return string
 */
function actionShowImage(){
    require_once (MODELS_DIR . '/' . 'image.php');
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
    }

    $image = getAllImage($_GET['id']);
    $image = $image ? $image[0] : $image;
    if(!$image){
        throwError('Картинка не найдена');
    }
    addPopularity($image['id']);
    return render('image', ['image' => $image], ['title' =>  $image['title'] .' :: ' . ROOT_TITLE]);


}