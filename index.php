<?php


echo 'С помощью оператора echo выведите на страницу целочисленную переменную';
echo '<br>';
$varInt = 10;
echo $varInt;

echo '<br>';
echo '<br>';
echo 'С помощью оператора echo выведите на страницу переменную дробного типа';
echo '<br>';
$varFloat = 3.34;
echo $varFloat;

echo '<br>';
echo '<br>';
echo 'С помощью оператора echo выведите на страницу переменную булевского типа';
echo '<br>';
// С помощью оператора echo выведите на страницу переменную булевского типа
// Вопрос: почему у меня при значении false ничего не выводит, а при true выводит единицу? Это версия php? 
$varBool = true;
echo $varBool;

echo '<br>';
echo '<br>';
echo 'С помощью оператора echo выведите на страницу строковую переменную';
echo '<br>';
// С помощью оператора echo выведите на страницу строковую переменную
$varStr = '20 приветов';
echo $varStr;

echo '<br>';
echo '<br>';
echo 'С помощью оператора echo выведите на страницу константу';
echo '<br>';
// С помощью оператора echo выведите на страницу константу
define('STATUS_ACTIVE', 1);
echo STATUS_ACTIVE;



echo '<br>';
echo '<br>';
echo 'Повторите вывод, заключив переменные в двойные кавычки (“). Посмотрите, что получится. Объясните результат. Объяснение: php интерпретатор даже не смотря на то, что мы явно указываем двойными кавычками что это строка, сначала ищет в ней ключевые конструкции языка такие как например "$" - если ничего не находит, то выводит как строку. Если находит, то выводит согласно ключевой конструкции, которую нашел - в данном случае выводит значения переменных кроме константы, т.к. имя константы не содержит ключевых конструкций языка.';
echo '<br>';
/*

Повторите вывод, заключив переменные в двойные кавычки (“). Посмотрите, что получится. Объясните результат.

Объяснение: php интерпретатор даже не смотря на то, что мы явно указываем двойными кавычками что это строка, сначала ищет в ней ключевые конструкции языка такие как например "$" - если ничего не находит, то выводит как строку. Если находит, то выводит согласно ключевой конструкции, которую нашел - в данном случае выводит значения переменных кроме константы, т.к. имя константы не содержит ключевых конструкций языка. Код ниже.

*/

echo '<br>';
echo "$varInt";
echo '<br>';
echo "$varFloat";
echo '<br>';
echo "$varBool";
echo '<br>';
echo "$varStr";
echo '<br>';
echo "STATUS_ACTIVE";


echo '<br>';
echo '<br>';
echo 'Повторите вывод, заключив переменные в одинарные кавычки. Посмотрите, что получится. Объясните результат.
Объяснение: В случае с одинарными кавычками выводятся имена переменных вместо значений как в предыдущем задании - видимо, одинарные кавычки интерпретатор воспринимает как команду не искать ключевых конструкций в строке, а просто вывести строку';
echo '<br>';
/*
Повторите вывод, заключив переменные в одинарные кавычки. Посмотрите, что получится. Объясните результат.

Объяснение: В случае с одинарными кавычками выводятся имена переменных вместо значений как в предыдущем задании - видимо, одинарные кавычки интерпретатор воспринимает как команду не искать ключевых конструкций в строке, а просто вывести строку

*/

echo '<br>';
echo '<br>';
echo '<br>';
echo '$varInt';
echo '<br>';
echo '$varFloat';
echo '<br>';
echo '$varBool';
echo '<br>';
echo '$varStr';
echo '<br>';
echo 'STATUS_ACTIVE';





echo '<br>';
echo '<br>';
echo 'Выведите на экран любое четверостишие. 
Пример:
«Славная осень! Здоровый, ядреный
Воздух усталые силы бодрит;
Лед неокрепший на речке студеной
Словно как тающий сахар лежит.»
Н.А. Некрасов
Для каждой новой строки используйте отдельный оператор echo. Каждая строчка должна быть отдельной строковой переменной. Также необходимо использовать переводы строки. После четверостишия поставьте инициалы автора и сделайте их подчёркнутыми.
Выполните эти же действия, с помощью одного оператора echo.
';
echo '<br>';
/*

Выведите на экран любое четверостишие. 
Пример:
«Славная осень! Здоровый, ядреный
Воздух усталые силы бодрит;
Лед неокрепший на речке студеной
Словно как тающий сахар лежит.»
Н.А. Некрасов
Для каждой новой строки используйте отдельный оператор echo. Каждая строчка должна быть отдельной строковой переменной. Также необходимо использовать переводы строки. После четверостишия поставьте инициалы автора и сделайте их подчёркнутыми.
Выполните эти же действия, с помощью одного оператора echo.

*/

echo '<br>';
echo '<br>';
echo 'вывод через переменные';
echo '<br>';
// вывод через переменные

$str1 = '"Славная осень! Здоровый, ядреный<br>';
$str2 = 'Воздух усталые силы бодрит;<br>';
$str3 = 'Лед неокрепший на речке студеной<br>';
$str4 = 'Словно как тающий сахар лежит."<br>';
$str5 = '<u>Н.А. Некрасов</u>';


echo '<br>';
echo '<br>';
echo '<br>';
echo $str1.$str2.$str3.$str4.$str5;

echo '<br>';
echo '<br>';
echo 'вывод только оператором echo';
echo '<br>';
// вывод только оператором echo

echo '<br>';
echo '<br>';
echo '<br>';
echo '"Славная осень! Здоровый, ядреный';
echo '<br>';
echo 'Воздух усталые силы бодрит;';
echo '<br>';
echo 'Лед неокрепший на речке студеной';
echo '<br>';
echo 'Словно как тающий сахар лежит."';
echo '<br>';
echo '<u>Н.А. Некрасов</u>';


echo '<br>';
echo '<br>';
echo '<br>';
echo 'Попробуйте в выражении использовать разные типы данных, например, сложите число «10» и строку «20 приветов». Что получится? Объясните результат.';
echo '<br>';
/*
Попробуйте в выражении использовать разные типы данных, например, сложите число «10» и строку «20 приветов». Что получится? Объясните результат.

Получилось 30, т.к. интерпретатор в начале строки нашел число и полностью его воспринял как число до не числового символа и добавил его к целочисленному значению
*/

echo '<br>';
echo '<br>';
echo '<br>';
echo 'Int + Str';
echo '<br>';
$varResult = $varInt + $varStr;
echo $varResult;

echo '<br>';
echo '<br>';
echo '<br>';
echo 'Str + Int';
echo '<br>';
$varResult = $varStr + $varInt;
echo $varResult;

echo '<br>';
echo '<br>';
echo '<br>';
echo 'Int + Bool';
echo '<br>';
$varResult = $varInt + $varBool;
echo $varResult;

echo '<br>';
echo '<br>';
echo '<br>';
echo 'Bool + Str';
echo '<br>';
$varResult = $varBool + $varStr;
echo $varResult;

echo '<br>';
echo '<br>';
echo '<br>';
echo 'Str + Bool';
echo '<br>';
$varResult = $varStr + $varBool;
echo $varResult;

echo '<br>';
echo '<br>';
echo '<br>';
echo 'Дайте ответ на вопрос, как работает оператор xor? В каких случаях он возвращает значение true, в каких – false? Для этого напишите скрипт, который выводит значения операций со всеми возможными вариантами операндов (4 варианта). Чему равно $a xor $a для любых значений $a?';
echo '<br>';
/*
Дайте ответ на вопрос, как работает оператор xor? В каких случаях он возвращает значение true, в каких – false?

Ответ: это логический оператор, он возвращает истину если оба операнда равны и ложь, если операнды не равны друг другу. (Но мой код у меня работает как-то не так, вопрос: что не так? Он выводит просто первый операнд всегда)

Для этого напишите скрипт, который выводит значения операций со всеми возможными вариантами операндов (4 варианта). Чему равно $a xor $a для любых значений $a?

Ответ: всегда true на сколько я понимаю. 
*/

echo '<br>';
echo '<br>';
echo '<br>';
echo 'false xor false';
echo '<br>';
$varBool1 = false;
$varBool2 = false;
$varResult = $varBool1 xor $varBool2; 
echo $varResult;


echo '<br>';
echo '<br>';
echo '<br>';
echo 'true xor false';
echo '<br>';
$varBool1 = true;
$varBool2 = false;
$varResult = $varBool1 xor $varBool2; 
echo $varResult;

echo '<br>';
echo '<br>';
echo '<br>';
echo 'false xor true';
echo '<br>';
$varBool1 = false;
$varBool2 = true;
$varResult = $varBool1 xor $varBool2; 
echo $varResult;

echo '<br>';
echo '<br>';
echo '<br>';
echo 'true xor true';
echo '<br>';
$varBool1 = true;
$varBool2 = true;
$varResult = $varBool1 xor $varBool2; 
echo $varResult;




echo '<br>';
echo '<br>';
echo 'Надо поменять значения в переменных не используя третью';
echo '<br>';
// Надо поменять значения в переменных не используя третью
$x = -22;
$y = 1;

echo '<br>';
echo '<br>';
echo 'Значение х и у до операций';
echo '<br>';
echo $x;
echo '<br>';
echo $y;

$x += $y;
$y = $x - $y;
$x -= $y;

echo '<br>';
echo '<br>';
echo 'Значение х и у после операций операций';
echo '<br>';
echo $x;
echo '<br>';
echo $y;
