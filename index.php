<?php
function checkCondition($name, $op)
{
    return isset($_POST[$name]) && $_POST[$name] == $op ? "selected='selected'" : '';
}

function checkArg($name)
{
    return isset($_POST[$name]) ? "value=\"$_POST[$name]\"" : '';
}

?>

<?php

$result = "";
 if(isset($_POST['arg1']) && isset($_POST['arg2']) && isset($_POST['operation'])){

    switch($_POST['operation']){
        case '+':$result = $_POST['arg1'] + $_POST['arg2'];break;
        case '-':$result = $_POST['arg1'] - $_POST['arg2'];break;
        case '*':$result = $_POST['arg1'] * $_POST['arg2'];break;
        case '/':
            if ($_POST['arg2']=='0'){
                echo 'Делить на ноль нельзя.';
            }
            else {
                $result = $_POST['arg1'] / $_POST['arg2'];
            }

        break;
    }

 }
 else {
    $result = "";
 }

?>

<?php

$result2 = "";
if(isset($_POST['arg3']) && isset($_POST['arg4'])){

    if(isset($_POST['btnsum'])){
        $result2 = $_POST['arg3'] + $_POST['arg4'];
    }
    else if (isset($_POST['btnsub'])){
        $result2 = $_POST['arg3'] - $_POST['arg4'];
    }
    else if(isset($_POST['btnmult'])){
        $result2 = $_POST['arg3'] * $_POST['arg4'];
    }
    else if(isset($_POST['btndiv'])){
        if($_POST['arg4']==0) {
            $result2 = "Делить на ноль нельзя";
        }
        else {
            $result2 = $_POST['arg3'] / $_POST['arg4'];
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
    <input type="text" name="arg1" <?= checkArg('arg1'); ?> />
    <select name="operation">

        <option <?= checkCondition('operation', '+'); ?> >+</option>
        <option <?= checkCondition('operation', '-'); ?> >-</option>
        <option <?= checkCondition('operation', '*'); ?> >*</option>
        <option <?= checkCondition('operation', '/'); ?> >/</option>

    </select>
    <input type="text" name="arg2" <?= checkArg('arg2'); ?> />
    <input type="submit" value="=">
    <?= $result ?>
</form>
<br>
<br>
<form method="post">
    <input type="text" name="arg3" />


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


    <input type="text" name="arg4" />

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