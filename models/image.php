<?php
function getFullPath($id){
    return select("SELECT name FROM images WHERE id = $id;")[0]['name'];
}

function getPopularity($id){
    return select("SELECT popularity FROM images WHERE id = $id;")[0]['popularity'];
}

function addPopularity($id){
    return update("UPDATE images SET popularity = popularity + 1 WHERE id = '$id'");
}

function updateTitle($id){
    //return update("UPDATE images SET popularity = popularity + 1 WHERE id = '$id'");
}

function updateAlt($id){
    //return update("UPDATE images SET popularity = popularity + 1 WHERE id = '$id'");
}