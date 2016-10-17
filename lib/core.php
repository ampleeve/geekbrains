<?php

function getRequestController(){
return !empty($_REQUEST['controller']) ? $_REQUEST['controller'] : 'index';
}

function getRequestAction(){
    return !empty($_REQUEST['action']) ? $_REQUEST['action'] : 'index';
}

function renderPage(){

}