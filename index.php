<?php

<?php   // блок для описания функций, используемых в задании к 4 уроку

/**
 * @param $nameSelect
 * @param $operation
 * @return string
 */
function checkSelectChange($nameSelect, $operation)

        // Проврка - передавалось ли методом Пост $nameSelect и ровно ли оно $operation.
        // Если да, то надо селект по умолчанию выставить в $operation

{
    return isset($_POST[$nameSelect]) && $_POST[$nameSelect] == $operation ? "selected='selected'" : '';
}

function checkArgInput($name)

        //Проверка - передавался ли в пост $name. Если да, то вернуть его значение как параметр value

{
    return isset($_POST[$name]) ? "value=\"$_POST[$name]\"" : '';
>>>>>>> Stashed changes
}
?>

<br>
<br>
<pre>
<?php
var_dump($_COOKIE);
?>*/