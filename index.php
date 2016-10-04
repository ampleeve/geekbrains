<?php

$f = fopen('test.txt', 'r');
$c = fread($f, 1);
while ($c != null){
   // echo "$c <br>";
    $c = fread($f, 1);
}
/*
function log($msg){
    $time = date('H:i:s');
    $f = fopen('log.txt', 'a+');
    fputs($f, "$time: $msg \n");
    fclose($f);
}

if($f){
    log('$f - истина');
}else{
    log('$f - ложь');
}

function log($msg) {
    $time = date('H:i:s');
    $f = fopen('log.txt', 'a+'); fputs($f, "$time: $msg \n"); fclose($f);
}
if($c){ log('попали сюда');
} else{
    log('попали туда');
}*/


/*
$file = 'test.txt';
$data = 'Привет!';
file_put_contents($file, $data);
echo file_get_contents($file);
*/


function log1($msg) {
    $time = date('H:i:s');
    $stream = fopen('log.txt', 'a+');
    fputs($stream, "$time: $msg \n");
    fclose($stream);
}

log1('test');
/*if($c){ log('попали сюда');
} else{
    log('попали туда');
}*/