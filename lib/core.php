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
    if(!file_exists(CONTROLLERS_DIR . '/' . $controller . 'Controller.php')){
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

/**
 * @param string $view Название вьюхи
 * @param array $variables Переменные для контента в зависимости от экшена
 * @param array $layoutVars Переменные окружения например title
 * @param string $layout - название основного шаблона страницы(типа футер например и меню, которые выводятся везде,
 * на всех страницах)
 * @return string Возвращает html код результирующий - по сути рендерится полностью страница в зависимости от контроллера и
 * экшена в нем
 *
 * Функция добавляет в массив $layoutVars еще один элемент - контент и сразу генерирует его с помощью функции renderParial()
 * Затем уже сформированный контент обворачивает в основной лэйаут и возвращает уже полностью сгенерированную html страницу
 *
 */
function render($view, $variables = [], $layoutVars = [], $layout = 'layout'){
    //echo'<pre>';
    //var_dump($layoutVars);
    //echo'<br>';
    //var_dump($layoutVars['title']);
    $layoutVars['content'] = renderPartial(getRequestController() . '/' . $view, $variables);
    //var_dump($layoutVars);
    //var_dump($layoutVars['content']);die();
    return renderPartial('layouts/' . $layout, $layoutVars);
}

/**
 * @param $view имя вьюхи, которая будет отображаться в зависимости от контроллера и экшена в нем сработавшего
 * @param array $variables контекстные переменные в зависимости от контроллера и экшена сработавшего
 * @return string возвращает строку html для вывода на странице, на которой была вызвана функция renderPage
 */
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