<?php
function getAllUsers(){
    return select('SELECT * FROM users');
}