<?php
// Lesson 2
/*
Базовый блок
1. Объявите две целочисленные переменные $a и $b и задайте им произвольные начальные значения. Затем напишите скрипт, который работает по следующему принципу:
a. если $a и $b положительные, выведите их разность;
b. если $а и $b отрицательные, выведите их произведение;
c. если $а и $b разных знаков, выведите их сумму.
Ноль можно считать положительным числом.
*/

$a = 1;
$b = 1;

if($a >= 0 && $b >= 0){
    echo $a - $b;
}