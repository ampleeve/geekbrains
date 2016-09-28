<?php   // блок для описания функций, используемых в задании к 4 уроку


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
}

?>

<?php   // Блок для первого калькулятора

 if(isset($_POST['arg1']) && isset($_POST['arg2']) && isset($_POST['operation'])){

        // Проверка - передались ли в пост все 3 необходимых значения

    switch($_POST['operation']){
        case '+':$result = $_POST['arg1']*1 + $_POST['arg2']*1;break;
        case '-':$result = $_POST['arg1']*1 - $_POST['arg2']*1;break;
        case '*':$result = $_POST['arg1']*1 * $_POST['arg2']*1;break;
        case '/':
            if ($_POST['arg2']*1 == '0'){
                $result =  'Делить на ноль нельзя.';
            }
            else {
                $result = $_POST['arg1']*1 / $_POST['arg2']*1;
            }

        break;
    }

        // Если передались, то смотрим значение $_POST['operation'] и, в зависимости от него выполняем операцию
        // необходимую и записываем значение в переменную $result

 }
 else {
    $result = "";
 }

        // Если в пост не передались все 3 значения, то присвоить переменной $result ничего
        // чтобы при обращении к ней в выводе не возникало ошибки

?>

<?php   // Блок для второго калькулятора

if(isset($_POST['arg3']) && isset($_POST['arg4'])){

        // Проверка - передались ли в пост значения, необхоимые для вывода результата во втором калькуляторе
        // Если передались, в зависимости от нажатой кнопки посчитать результат и записать
        // в $result2

    if(isset($_POST['btnsum'])){
        $result2 = $_POST['arg3']*1 + $_POST['arg4']*1;
    }
    else if (isset($_POST['btnsub'])){
        $result2 = $_POST['arg3']*1 - $_POST['arg4']*1;
    }
    else if(isset($_POST['btnmult'])){
        $result2 = $_POST['arg3']*1 * $_POST['arg4']*1;
    }
    else if(isset($_POST['btndiv'])){
        if($_POST['arg4']*1==0) {
            $result2 = "Делить на ноль нельзя";
        }
        else {
            $result2 = $_POST['arg3']*1 / $_POST['arg4']*1;
        }
    }
}
else {
    $result2 = "";
}
?>

<html>
    <head>
<title>Домашнее задание к уроку 4</title> </head>
<body>
<form method="post">
    <input type="text" name="arg1" <?= checkArgInput('arg1'); ?> />
    <select name="operation">

        <option <?= checkSelectChange('operation', '+'); ?> >+</option>
        <option <?= checkSelectChange('operation', '-'); ?> >-</option>
        <option <?= checkSelectChange('operation', '*'); ?> >*</option>
        <option <?= checkSelectChange('operation', '/'); ?> >/</option>

    </select>
    <input type="text" name="arg2" <?= checkArgInput('arg2'); ?> />
    <input type="submit" value="=">
    <?= $result ?>
</form>
<br>
<br>
<form method="post">
    <input type="text" name="arg3" <?= checkArgInput('arg3'); ?> />


    <?php
    if(isset($_POST['btnsum'])){
        echo '+';
    }else if(isset($_POST['btnsub'])){
        echo '-';
    }else if(isset($_POST['btnmult'])){
        echo '*';
    }else if(isset($_POST['btndiv'])){
        echo '/';
    }
    ?>


    <input type="text" name="arg4" <?= checkArgInput('arg4'); ?> />

    =


    <?php
    echo $result2;
    ?>


    <br>
    <input name="btnsum" type="submit" value="+" />
    <input name="btnsub" type="submit" value="-" />
    <input name="btnmult" type="submit" value="*" />
    <input name="btndiv" type="submit" value="/" />
</form>
</body>
</html>
