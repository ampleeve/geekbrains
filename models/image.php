<?php
function getAllImage($id){
    global $dbConn;
    $id = mysqli_real_escape_string($dbConn, $id);
    return select("SELECT * FROM images WHERE id = '$id';");
}
function addPopularity($id){
    global $dbConn;
    $id = mysqli_real_escape_string($dbConn, $id);
    return update("UPDATE images SET popularity = popularity + 1 WHERE id = '$id'");
}
function updateTitle($id, $title){
    global $dbConn;
    $id = mysqli_real_escape_string($dbConn, $id);
    $title = mysqli_real_escape_string($dbConn, $title);
    return update("UPDATE images SET title = '$title'  WHERE id = '$id'");
}
function updateAlt($id, $alt){
    global $dbConn;
    $id = mysqli_real_escape_string($dbConn, $id);
    $alt = mysqli_real_escape_string($dbConn, $alt);
    return update("UPDATE images SET alt = '$alt' WHERE id = '$id'");
}
function updateAltTitle($id, $alt, $title){
    global $dbConn;
    $id = mysqli_real_escape_string($dbConn, $id);
    $title = mysqli_real_escape_string($dbConn, $title);
    $alt = mysqli_real_escape_string($dbConn, $alt);
    return update("UPDATE images SET alt = '$alt', title = '$title' WHERE id = '$id'");
}
function checkImage($id)
{
    global $dbConn;
    $id = mysqli_real_escape_string($dbConn, $id);
    $result = select("SELECT `id` FROM `images` WHERE (`id`='$id')");
    if (!$result){
        return FALSE;
    }
    else
    {
        return TRUE;
    }
}

function validateForm($formData){
    if(!$formData['id']){
        return FALSE;
    }
    if(!$formData['newTitle'] && !$formData['newAlt']){
        return FALSE;
    }
    return TRUE;
}

function updateImage($correctFormData){
    if(!empty($correctFormData['newTitle'] && empty($correctFormData['newAlt'])))
    {
        updateTitle($correctFormData['id'], $correctFormData['newTitle']);
    }
    elseif (!empty($correctFormData['newTitle']) && !empty($correctFormData['newAlt']))
    {
        updateAltTitle($correctFormData['id'], $correctFormData['newAlt'], $correctFormData['newTitle']);
    }
    elseif(empty($correctFormData['newTitle'] && !empty($correctFormData['newAlt'])))
    {
        updateAlt($correctFormData['id'], $correctFormData['newAlt']);
    }
    else
    {
        return FALSE;
    }
    return TRUE;
}