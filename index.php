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
 * Присвойте переменной $а значение в промежутке [0..15].
 * С помощью оператора switch организуйте вывод чисел от $a до 15;
 * */

$a = mt_rand(0,15);
echo $a;
echo '<br>';
switch($a){
    case 0: echo '0'.'<br>';
    case 1: echo '1'.'<br>';
    case 2: echo '2'.'<br>';
    case 3: echo '3'.'<br>';
    case 4: echo '4'.'<br>';
    case 5: echo '5'.'<br>';
    case 6: echo '6'.'<br>';
    case 7: echo '7'.'<br>';
    case 8: echo '8'.'<br>';
    case 9: echo '9'.'<br>';
    case 10: echo '10'.'<br>';
    case 11: echo '11'.'<br>';
    case 12: echo '12'.'<br>';
    case 13: echo '13'.'<br>';
    case 14: echo '14'.'<br>';
    case 15: echo '15'.'<br>';
}

/*
 * Реализуйте основные 4 арифметические операции (+, -, *, /)
 * в виде функций с двумя параметрами.
 * Обязательно используйте оператор return.
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
    if ($b == 0){
        return false;
    }
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

function mathOperation($arg1, $arg2, $operation){
    switch($operation) {
        case "+":
            return sum($arg1, $arg2);
        case "-":
            return diff($arg1, $arg2);
        case "*":
            return mult($arg1, $arg2);
        case "/":
            return div($arg1, $arg2);
    }
}

echo '<br>'. mathOperation(5, 5, "+") . ': mathOperation(5, 5, \'+\')';
echo '<br>'. mathOperation(5, 5, "-") . ': mathOperation(5, 5, \'-\')';
echo '<br>'. mathOperation(5, 5, "*") . ': mathOperation(5, 5, \'*\')';
echo '<br>'. mathOperation(5, 5, "/") . ': mathOperation(5, 5, \'/\')';

/*
 * С помощью рекурсии организуйте функцию возведения числа в степень.
 * Формат: function power($val, $pow), где $val – заданное число, $pow – степень.
 * */
echo '<br>';
echo '<br>';
function power($val,$pow)
{
    if ($pow != 0 && $pow > 0)
    {
        return $val * power ($val, $pow - 1);
    }
    else if($pow != 0 && $pow < 0)
    {
        return power (1 / $val, - $pow);
    }
    return 1;
}
echo power(2, -1);

/*
 * Напишите функцию, которая вычисляет текущее время и возвращает его в формате
 *  с правильными склонениями, например:
 * 22 часа 15 минут
 * 21 час 43 минуты итд.
 * Подсказка: часы и минуты можно узнать с помощью встроенной функции PHP – date.
 * */

/*
function chti($string, $ch1, $ch2, $ch3){  // ch1 - для слова "один" значение склонения, ch2 - для слова "три" склонение, ch3 - для слова "пять" склонение
    $ff=Array('0','1','2','3','4','5','6','7','8','9');

    if(substr($string,-2, 1)==1 && strlen($string)>1) // если в переданной строке предпоследний символ == 1 и строка больше одного символа, то
    {
        $ry=array("0 $ch3","1 $ch3","2 $ch3","3 $ch3" ,"4 $ch3","5 $ch3","6 $ch3","7 $ch3","8 $ch3","9 $ch3"); // заносим в массив строки, соответствующие каждой цифре от 0 до 9
    }
    else {
        $ry=array("0 $ch3","1 $ch1","2 $ch2","3 $ch2","4 $ch2","5 $ch3"," 6 $ch3","7 $ch3","8 $ch3"," 9 $ch3"); // иначе заносим значения для всех остальных случаев
    }
    $string1 = substr($string,0,-1).str_replace($ff, $ry, substr($string,-1,1)); // в переменную стринг1 заносим исходную строку, но отбрасываем последний символ, затем делаем замену ff на ry в последнем символе строки
    return $string1; // возвращаем результат

    /*
     * Таким образом, если мы передаем например (1, "час", "часа", "часов"), то функция
     * сначала создает строковый массив ff со значениями от 0 до 9,
     * затем проверяет равен ли предпоследний символ 1, в нашем случае такого символа вообще нет, значит условие пропускается и переходит к блоку else
     * в блоке else массиву $ry присвоятся значения "0 часов", "1 час", "2 часа" и т.д.
     * затем создастся строка string1 в которую запишется значение $rest = substr("abcdef", 0, -1);
     * // возвращает "abcde" - т.е. отбросится последний символ, в нашем случае придет пустая строка, т.к. в исходной строке была "1"
     * затем, выражением .str_replace($ff, $ry, substr($string,-1,1)); мы ищем - совпадает ли значение из массива ff с последним символом строки и, если это так, то заменяем его
     * на соответствующее по индексу значение в массиве $ry. Т.е. в нашем случае у нас последний символ - это "1", значит мы будем искать такое значение в массиве ff - такое значение в нем есть
     * - это индекс с номером 1. Значит мы берем значение в массиве ry c индексом 1 ("1 час") и ставим его вместо "1". Таким образом, в результате получается
     * "1 час". 
     *
}
echo '<br>';
echo '<br>';

function getTime(){
    return chti(date('G'),'час','часа','часов') . ' ' . chti(date('i'),'минута','минуты','минут');
    }

echo getTime();
*/
function getNumEnding($number, $one, $four, $five){

    $number = $number % 100;

    if($number >= 11 && $number <= 19){
        return $five;
    }

    switch ($number % 10){
        case 1: return $one;
        case 2:
        case 3:
        case 4: return $four;
        default: return $five;
    }


}
echo '<br>';
echo '<br>';
$hour = date('G');
$minute = date('i');
echo "Текущее время: $hour " . getNumEnding($hour, "час", "часа", "часов") . " $minute " . getNumEnding($minute, "минута", "минуты", "минут");


























