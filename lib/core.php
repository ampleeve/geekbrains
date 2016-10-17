<?php

function getRequestController(){
return !empty($_REQUEST['controller']) ? $_REQUEST['controller'] : 'index';
}

function getRequestAction(){
    return !empty($_REQUEST['action']) ? $_REQUEST['action'] : 'index';
}

function renderPage(){
    $controller = getRequestController();
    if(!file_exists(CONTROLLERS_DIR . '/' . $controller . 'Controller.php')){
        throwError();
    }
    require_once (CONTROLLERS_DIR . '/' . $controller . 'Controller.php');

    $action = getRequestAction();
    if(function_exists('action'.ucfirst($action))){
        throwError();
    }

    call_user_func('action'.ucfirst($action))
}

function throwError($error = ''){
    !empty($error) ? header("Location: /?action=error=" . $error) : header('Location: /?action=error');
    exit();
}