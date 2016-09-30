<?php


function getAllUsers(){
    return [
        [
            'id' => 1,
            'login' => 'admin',
            'password' => md5('123')

        ],
        [
            'id' => 2,
            'login' => 'user',
            'password' => md5('456')

        ]
    ];
}

function isAuthorized(){
    return !empty($_SESSION['id']);
}

function redirect($to){
    header('Location: '. $to);
    exit();
}

function login($login, $password){
    $isUser = false;
    foreach (getAllUsers() as $user){
        if ($user['login'] ==  $login){
            $isUser = $user;
            break;
        }
    }
    if ($isUser && $isUser['password'] == md5($password)){
        $_SESSION['id'] = $isUser['id'];
        return true;
    }

    return false;
}

function getCurrentUserName(){
    if(!empty($_SESSION['id'])) {
        foreach (getAllUsers() as $user) {
            if ($_SESSION['id'] == $user['id']) {
                return $user['login'];
            }
        }
    }else{
        return 'Guest';
    }
}

function logout(){
    unset ($_SESSION['id']);
}