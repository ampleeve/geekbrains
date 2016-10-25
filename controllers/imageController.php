<?php
/**
 * @return string
 */
function actionShowImage(){
    require_once (MODELS_DIR . '/' . 'image.php');
    if(!empty($_GET['id']) && checkImage($_GET['id'])){
            $image ['id'] = $_GET['id'];
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
            return render('image', ['image' => $image], ['title' => getTitle($image ['id']) .' :: ' . ROOT_TITLE]);
    }


}