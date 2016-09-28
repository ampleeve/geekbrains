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

 echo $result;

?>

<html>
    <head>
<title>Домашнее задание к уроку 4</title> </head>
<body>
<form method="post">
    <input type="text" name="arg1" />
    <select name="operation">
        <option>+</option>
        <option>-</option>
        <option>*</option>
        <option>/</option>
    </select>
    <input type="text" name="arg2" />
    <input type="submit" value="=">
</form>
</body>
</html>


<?php /*
  */
?>