<?php
ini_set("display_errors", 1);
error_reporting(E_ALL);

function checkCondition($name, $op)
{
  // проверяем условие, если true ----> ставим галочку над операцией
  return isset($_GET[$name]) && $_GET[$name] == $op ? "selected='selected'" : '';
}

function installVar($name)
{
  // проверяю ввели ли какое-то значение и присваиваю;
  return isset($_GET[$name]) ? $_GET[$name] : '';
}

function getOp($a, $b, $op)
{
  // если строка пустая, то возвращаем пустую строку;
  if ($a == null || $b == null) {
    return '';
  }

  // Приводим к числу с точкой.
  $a = floatval($a);
  $b = floatval($b);

  switch ($op) {
    case '+':
      return $a + $b;
    case '-':
      return $a - $b;
    case '*':
      return $a * $b;
    case '/':
      if ($b == 0) {
        return '<img src=http://arcanumclub.ru/smiles/smile2.gif>' . ' - НЕЛЬЗЯ делить на ноль!';
      }
      return $a / $b;
    default:
      return 'Ошибка - нет такой операции';
  }
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
      form {
        border: 5px solid #2F4F4F;
        border-radius: 15px;
        width: 500px;
        padding: 10px;
        margin: 0 auto;
      }

      .oneForm {
        margin-bottom: 50px;
      }
    </style>
  </head>
  <body>
    <form action="#" method="get" class="oneForm">
      <input type="text" name="varA" value="<?= installVar('varA'); ?>">
      <select name="op">
        <option value="+" <?= checkCondition('op', '+'); ?> >+</option>
        <option value="-" <?= checkCondition('op', '-'); ?> >-</option>
        <option value="*" <?= checkCondition('op', '*'); ?> >*</option>
        <option value="/" <?= checkCondition('op', '/'); ?> >/</option>
      </select>
      <input type="text" name="varB" value="<?= installVar('varB'); ?>">
      <input type="submit" value="=">
      <?php
        echo getOp(installVar('varA'), installVar('varB'), installVar('op'));
      ?>
    </form>
    <br><br>
    <form action="#" method="get" class="twoForm">
      <input type="text" name="varC" value="<?= installVar('varC'); ?>">
      <?= installVar('op2') ?>
      <input type="text" name="varD" value="<?= installVar('varD'); ?>">
      <?= '= ' . getOp(installVar('varC'), installVar('varD'), installVar('op2')); ?>
      <div>
        <input type="submit" name="op2" value="+">
        <input type="submit" name="op2" value="-">
        <input type="submit" name="op2" value="*">
        <input type="submit" name="op2" value="/">
      </div>
    </form>
  </body>
</html>