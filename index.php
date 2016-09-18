<?php
// Lesson 2
/*
 * Базовый блок 1. Объявите две целочисленные переменные $a и $b и задайте им произвольные начальные значения.
 * Затем напишите скрипт, который работает по следующему принципу: a. если $a и $b положительные, выведите их разность;
 *  b. если $а и $b отрицательные, выведите их произведение; c. если $а и $b разных знаков, выведите их сумму.
 * Ноль можно считать положительным числом.
 * */

$a = 1;
$b = -2;

if($a >= 0 && $b >= 0){
    echo $a - $b;
} else if($a < 0 && $b < 0){
    echo $a * $b;
} else {
    echo $a + $b;
}


echo '<br>';
/*
 * Присвойте переменной $а значение в промежутке [0..15]. С помощью оператора switch организуйте вывод чисел от $a до 15;
 * */

$a = mt_rand(0,15);
echo $a;
echo '<br>';
switch($a){
    case 0: echo '0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15'; break;
    case 1: echo '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15'; break;
    case 2: echo '2,3,4,5,6,7,8,9,10,11,12,13,14,15'; break;
    case 3: echo '3,4,5,6,7,8,9,10,11,12,13,14,15'; break;
    case 4: echo '4,5,6,7,8,9,10,11,12,13,14,15'; break;
    case 5: echo '5,6,7,8,9,10,11,12,13,14,15'; break;
    case 6: echo '6,7,8,9,10,11,12,13,14,15'; break;
    case 7: echo '7,8,9,10,11,12,13,14,15'; break;
    case 8: echo '8,9,10,11,12,13,14,15'; break;
    case 9: echo '9,10,11,12,13,14,15'; break;
    case 10: echo '10,11,12,13,14,15'; break;
    case 11: echo '11,12,13,14,15'; break;
    case 12: echo '12,13,14,15'; break;
    case 13: echo '13,14,15'; break;
    case 14: echo '14,15'; break;
    case 15: echo '15'; break;
}

/*
 * Реализуйте основные 4 арифметические операции (+, -, *, /) в виде функций с двумя параметрами. Обязательно используйте оператор return.
 * */

function sum($a, $b){
    return $a + $b;
}
function diff($a, $b){
    return $a - $b;
}
function mult($a, $b){
    return $a * $b;
}
function div($a, $b){
    return $a / $b;
}

echo '<br>'. sum(5, 5) . ': 5+5';
echo '<br>'. diff(5, 5) . ': 5-5';
echo '<br>'. mult(5, 5) . ': 5*5';
echo '<br>'. div(5, 5) . ': 5/5';

/*
 * Реализуйте функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation),
 * где $arg1, $arg2 – значения аргументов, $operation – строка с названием операции.
 *  В зависимости от переданного значения операции выполните одну из арифметических операций
 *  (используйте функции из пункта 4) и верните полученное значение (используйте switch).
 * */

function mathOperation($arg1, $arg2, $arg3){
    switch($arg3) {
        case 1:
            return sum($arg1, $arg2);
        case 2:
            return diff($arg1, $arg2);
        case 3:
            return mult($arg1, $arg2);
        case 4:
            return div($arg1, $arg2);
    }
}

echo '<br>'. mathOperation(5, 5, 1) . ': mathOperation(5, 5, \'+\')';
echo '<br>'. mathOperation(5, 5, 2) . ': mathOperation(5, 5, \'-\')';
echo '<br>'. mathOperation(5, 5, 3) . ': mathOperation(5, 5, \'*\')';
echo '<br>'. mathOperation(5, 5, 4) . ': mathOperation(5, 5, \'/\')';