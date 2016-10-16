<?php
require_once ("conf.php");

$conn = mysqli_connect(HOST, USER, PASS, DB);

if(!$conn){
    die("Не удалось подключиться к БД: ". mysqli_connect_error());
}

if(!mysqli_set_charset($conn, 'utf8')){
    die("Не удалось сменить кодировку бд". mysqli_error($conn));
}

// Выборка
$sql = 'SELECT * FROM users';
$result = mysqli_query($conn, $sql);

if(!$result){
    echo 'Не верный запрос';
}
else{
    echo 'Количество строк: '. mysqli_num_rows($result);
    echo '<br>';
}

while($row = mysqli_fetch_assoc($result)){
    echo '<br>';
    echo 'ID: ' . $row['id'] . ', Login: ' . $row['login'] .', Desc: '. $row['description'];
    //echo '<pre>';
    //echo '<br>';
    //var_dump($row);
}

// Создание
/*
$pass = md5('1234');
$sql = "INSERT INTO users (id, login, pass, description) VALUES (NULL, 'Alexey', '$pass', NULL )";

if(mysqli_query($conn, $sql)){
    $lastId = mysqli_insert_id($conn);
    echo '<br>';
    echo 'Создан новый пользователь c id: '. $lastId;
}
else{
    echo 'Ошибка!' . mysqli_error($conn);
}*/

// Удаление

/*
$sql = 'DELETE FROM users WHERE id = 100';
if(mysqli_query($conn, $sql)){
    echo 'Запись успешно удалена.';
}
else{
    echo 'Ошибка. '. mysqli_error($conn);
}
*/

// Редактирование

$sql = "UPDATE `users` SET `description`= 'Это Вася, ээээ ...!' WHERE id=4";
if(mysqli_query($conn, $sql)){
    echo '<br>';
    echo 'Запись успешно обновлена.';
}
else{
    echo 'Ошибка. '. mysqli_error($conn);
}


//echo '<pre>';
//var_dump($result);

mysqli_close($conn);
