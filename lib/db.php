<?php
$dbConn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
if(!$dbConn){
    die('Не удалось подключиться к БД');
}
/**
 * @param $sql
 * @return array|bool
 */
function select($sql){
    global $dbConn;
    mysqli_real_escape_string($dbConn, $sql);
    $result = mysqli_query($dbConn, $sql);
    if(!$result){
        return false;
    }
    $items = [];
    while($row = mysqli_fetch_assoc($result)){
        $items[] = $row;
    }
    return $items;
}

/**
 * @param $sql
 * @return bool|int|string
 */
function insert($sql){
    global $dbConn;
    mysqli_real_escape_string($dbConn, $sql);
    if(!mysqli_query($dbConn, $sql)){
        return false;
    }
    return mysqli_insert_id($dbConn);
}

/**
 * @param $sql
 * @return bool|mysqli_result
 */
function update($sql){
    global $dbConn;
    mysqli_real_escape_string($dbConn, $sql);
    return mysqli_query($dbConn, $sql);
}

/**
 * @param $sql
 * @return bool|mysqli_result
 */
function delete($sql){
    global $dbConn;
    mysqli_real_escape_string($dbConn, $sql);
    return mysqli_query($dbConn, $sql);
}