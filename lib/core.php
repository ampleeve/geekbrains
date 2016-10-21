<?php
/**
 * @return string
 */
function getRequestController(){
    return !empty($_REQUEST['controller']) ? $_REQUEST['controller'] : 'index';
}

/**
 * @return string
 */
function getRequestAction(){
    return !empty($_REQUEST['action']) ? $_REQUEST['action'] : 'index';
}

/**
 * @return mixed
 * Проверяет - существует ли контроллер для данного запроса и, если да, то подключает его, в противном случае
 * ошибка. Это необходимо для того чтобы система обрабатывала только известные ей запросы.
 *
 * Далее, проверяется существует ли экшн в подключенном контроллере для данного запроса и возвращается результат
 * работы соответствующего
 * экшена. Если не существует, то возвращается ошибка и работа прекращается.
 */
function renderPage(){
    $controller = getRequestController();
    if(!file_exists(CONTROLLERS_DIR . '/' . $controller . 'controller.php')){
        throwError();
    }
    require_once (CONTROLLERS_DIR . '/' . $controller . 'Controller.php'); // В контроллере хранятся все экшены - функции обработки различного рода запросов

    $action = getRequestAction();
    if(!function_exists('action' . ucfirst($action))){
        throwError();
    }
    //var_dump(call_user_func('action' . ucfirst($action)));die();
    return call_user_func('action' . ucfirst($action)); // вызывается экшн и возвращается реультат его работы
}

function render($view, $variables = [], $layoutVars = [], $layout = 'layout'){
    $layoutVars['content'] = renderPartial(getRequestController() . '/' . $view, $variables);
    return renderPartial('layouts/' . $layout, $layoutVars);
}

function renderPartial($view, $variables = []){
    extract($variables);
    ob_start();
    require_once (VIEWS_DIR . '/' . $view . '.php');
    return ob_get_clean();

}

function throwError($error = ''){
    !empty($error) ? header("Location: /?action=error&error=" . $error) : header("Location: /?action=error");
    exit();

}