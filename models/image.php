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

function getTitle($id){
    return select("SELECT title FROM images WHERE id = $id;")[0]['title'];
}

function getAlt($id){
    return select("SELECT alt FROM images WHERE id = $id;")[0]['alt'];
}

function updateTitle($id, $title){
    return update("UPDATE images SET title = '$title'  WHERE id = '$id'");
}

function updateAlt($id, $alt){
    return update("UPDATE images SET alt = '$alt' WHERE id = '$id'");
}

function checkImage($id)
{

    $result = select("SELECT `id` FROM `images` WHERE (`id`='$id')");
    if (!$result){
        return FALSE;
    }
    else
    {
        return TRUE;
    }
}