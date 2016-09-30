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