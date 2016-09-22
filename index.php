<?php

// Lesson 3
/*
 * С помощью цикла while выведите все числа в промежутке от 0 до 100, которые делятся на 3 без остатка.
 */

$i = 0;
while ($i <= 100) {
    $res = $i % 3;
    if($res == 0){
        echo $i;
        echo '<br>';
    }
    $i++;
}

/*
 * С помощью цикла do...while напишите функцию для вывода чисел от 0 до 10, чтобы результат выглядел так:
 * 0 – это ноль
 * 1 – нечетное число
 * 2 – четное число
 * 3 – нечетное число ...
 * 10 – четное число
 *
 * */

$i = 0;
do {
    if ($i == 0){
        echo $i . " - это ноль. <br>";
    }
    else if($i <= 10){
        $res = $i % 2;
        if ($res == 0){
            echo $i . " - это четное число. <br>";
        }
        else{
            echo $i . " - это не четное число. <br>";
        }
    }
    $i++;
} while($i <= 10);

/*
 * Задание со звездочкой. Выведите с помощью цикла for числа от 0 до 9, НЕ используя тело цикла. То есть выглядеть должно вот так:
 * for(...){// здесь пусто}
 * */
echo '<br>';
for ($i = 0; $i < 10; print($i++)) {

}
/*
 * Объявите массив, где в качестве ключей будут использоваться названия областей,
 * а в качестве значений – массивы с названиями городов из соответствующей области. Выведите в цикле значения массива, чтобы результат был таким:
 * Московская область:
 * Москва, Зеленоград, Клин Ленинградская область:
 * Санкт-Петербург, Всеволожск, Павловск, Кронштадт Рязанская область
 * ...
 * (названия городов можно найти на maps.yandex.ru)
 *
*/


echo '<br>';
echo '<br>';


$arr = [
    'Московская область' => ['Москва', 'Подольск', 'Коломна', 'Балашиха', 'Дмитров'],
    'Пензенская область' => ['Пенза', 'Кузнецк', 'Заречный', 'Каменка', 'Никольск'],
    'Ленинградская область' => ['Выборг', 'Гатчина', 'Приозерск', 'Луга', 'Всеволожск']
];


foreach ($arr as $region => $cities) {

    echo $region . ":<br>";

    $count = 0;

    foreach ($cities as $cityIndex => $city){

        $count ++;

        if ($count != count($cities)){

            echo $city.', ';
        }

        else {

            echo $city;
        }
    }

    echo '<br>';
}

/*
 * Задание со звездочкой. Повторите предыдущее задание, но выводите на экран только города, начинающиеся с буквы «К».
 *
 * !!! Вопрос - как лучше определить что мы выводим последний город, который начинается с К чтобы не ставить ему запятую в конце? 
 * */

echo '<br>';
echo '<br>';

foreach ($arr as $region => $cities) {

    echo $region . ":<br>";

    foreach ($cities as $cityIndex => $city){

        if (mb_substr($city, 0, 1, "UTF-8") == "К" || mb_substr($city, 0, 1, "UTF-8") == "к"){

          echo $city.", ";

        }
    }

    echo '<br>';
}

/*
 * Объявите массив, индексами которого являются буквы русского языка, а значениями
 *  – соответствующие латинские буквосочетания
 *  (‘а’=> ’a’, ‘б’ => ‘b’, ‘в’ => ‘v’, ‘г’ => ‘g’, ..., ‘э’ => ‘e’, ‘ю’ => ‘yu’, ‘я’ => ‘ya’).
 * Напишите функцию транслитерации строк.
 * */

echo '<br>';
echo '<br>';

$arrRusToLat = [  // создаем массив, индексы которого являются буквами русского языка, а значениями - соответствующие латинские
    'а' => 'a',
    'б' => 'b',
    'в' => 'v',
    'г' => 'g',
    'д' => 'd',
    'е' => 'e',
    'ж' => 'j',
    'з' => 'z',
    'и' => 'i',
    'й' => 'yi',
    'к' => 'k',
    'л' => 'l',
    'м' => 'm',
    'н' => 'n',
    'ё' => 'yo',
    'о' => 'o',
    'п' => 'p',
    'р' => 'r',
    'с' => 's',
    'т' => 't',
    'у' => 'u',
    'ф' => 'f',
    'ц' => 'ts',
    'ч' => 'ch',
    'ш' => 'sh',
    'щ' => 'sh',
    'ъ' => '',
    'ы' => 'ia',
    'ь' => '',
    'э' => 'e',
    'ю' => 'yu',
    'я' => 'ya',
    'х' => 'h',
    'А' => 'a',
    'Б' => 'b',
    'В' => 'v',
    'Г' => 'g',
    'Д' => 'd',
    'Е' => 'e',
    'Ж' => 'j',
    'З' => 'z',
    'И' => 'i',
    'Й' => 'yi',
    'К' => 'k',
    'Л' => 'l',
    'М' => 'm',
    'Н' => 'n',
    'Ё' => 'yo',
    'О' => 'o',
    'П' => 'p',
    'Р' => 'r',
    'С' => 's',
    'Т' => 't',
    'У' => 'u',
    'Ф' => 'f',
    'Ц' => 'ts',
    'Ч' => 'ch',
    'Ш' => 'sh',
    'Щ' => 'sh',
    'Ъ' => '',
    'Ы' => 'ia',
    'Ь' => '',
    'Э' => 'e',
    'Ю' => 'yu',
    'Я' => 'ya',
    'Х' => 'h'
];

// пишем функцию, которая принимает строку и массив, заменяет все встречающиеся индексы из массива в переданной строке на соответствующие значения в массиве

function getChangeStr($string, $arr){

    foreach ($arr as  $source => $change){

        $string = str_replace($source, $change, $string);

    }
    return $string;
}
echo getChangeStr("Наиболее ВероЯтный выХОД из СИТУАЦИИ 456654654", $arrRusToLat);

/*
 * Напишите функцию, которая заменяет в строке пробелы на подчеркивания и возвращает видоизмененную строчку.
 * */
echo '<br>';
echo '<br>';

// В этом задании я могу воспользоваться уже готовой функцией, мне достаточно лишь объявить другой массив замен
$arrSToP = [ // объявляю этот массив
    " " => "_"
];

echo getChangeStr("Наиболее ВероЯтный выХОД из СИТУАЦИИ 456654654", $arrSToP); // выводим результат

/*
 * Объедините две ранее написанные функции в одну, которая получает строку на русском языке,
 * производит транслитерацию и замену пробелов на подчеркивания
 *  (аналогичная задача решается при конструировании url-адресов на основе названия статьи в блогах).
 * */
echo '<br>';
echo '<br>';
echo getChangeStr("Наиболее ВероЯтный выХОД из СИТУАЦИИ 456654654", $arrSToP + $arrRusToLat); // а вот так мы соединяем 2 массива замен и в итоге меняем и на латиницу и на подчеркивания
