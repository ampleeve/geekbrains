<?php
/**
 * @return string
 */
function actionShowImage(){
    require_once (MODELS_DIR . '/' . 'image.php');
    if(!empty($_GET['id']) && checkImage($_GET['id'])){
            $imageIdFromGet = $_GET['id'];
            if($_SERVER['REQUEST_METHOD']==='POST' && !empty($_POST['newTitle']) || !empty($_POST['newAlt']))
            {
                if(!empty($_POST['newTitle']) && empty($_POST['newAlt']))
                {
                    updateTitle($imageIdFromGet, $_POST['newTitle']);
                }
                elseif (!empty($_POST['newTitle']) && !empty($_POST['newAlt']))
                {
                    updateAltTitle($imageIdFromGet, $_POST['newAlt'], $_POST['newTitle']);
                }
                elseif(empty($_POST['newTitle']) && !empty($_POST['newAlt']))
                {
                    updateAlt($imageIdFromGet, $_POST['newAlt']);
                }
            }
            $imageAll = getAllImage($imageIdFromGet);
            addPopularity($imageIdFromGet);
            $image['id'] = $imageIdFromGet;
            $image['popularity'] = $imageAll[0]['popularity'];
            $image['fullPath'] = $imageAll[0]['name'];
            $image['title'] = $imageAll[0]['title'];
            $image['alt'] = $imageAll[0]['alt'];
            return render('image', ['image' => $image], ['title' =>  $image['title'] .' :: ' . ROOT_TITLE]);
    }

    throwError("Невозможно отобразить изображение.");


}