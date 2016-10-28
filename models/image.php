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
function checkImage($id)
{
    global $dbConn;
    $id = mysqli_real_escape_string($dbConn, $id);
    $result = select("SELECT `id` FROM `images` WHERE (`id`='$id')");
    return $result;
}
function validateForm($formData){
    if(!$formData['id']){
        return "Не передан ид";
    }
    if(!$formData['newTitle'] && !$formData['newAlt']){
        return "Не переданы тайтл и альт картинки";
    }
    return "";
}
function updateImage($correctFormData)
{
    global $dbConn;
    $sql = "UPDATE images SET ";
    $flagSetStarted = false;

    if (!empty($correctFormData['newTitle'])) {
        $title = mysqli_real_escape_string($dbConn, $correctFormData['newTitle']);
        $sql .= "title = '$title'";
        $flagSetStarted = true;
    }

    if (!empty($correctFormData['newAlt'])) {
        if ($flagSetStarted) {
            $sql .= ', ';
        }
        $alt = mysqli_real_escape_string($dbConn, $correctFormData['newAlt']);
        $sql .= "alt = '$alt'";
        $flagSetStarted = true;
    }
    if(!$flagSetStarted) {
        return false;
    }
    $id = mysqli_real_escape_string($dbConn, $correctFormData['id']);
    $sql .= " WHERE id = '$id'";
    return update($sql);
}