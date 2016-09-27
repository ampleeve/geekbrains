<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title></title>
</head>
<body>
<form action="/geekbrains/" method="get">
    Поиск:
    <input type = "text" name = "query">
    <input type ="submit" value="Найти">
</form>
  <?php

  $goods = [

    [
        'id' => 1,
        'name' => 'HTC',
        'desc' => 'Описание для HTC',
        'img' => 'htc.jpg',
        'price' => 10000

    ],

    [
        'id' => 2,
        'name' => 'iPhone',
        'desc' => 'Описание для iPhone',
        'img' => 'iphone.jpg',
        'price' => 50000

    ],

    [
        'id' => 3,
        'name' => 'SAMSUNG',
        'desc' => 'В 2015 году внутри Samsung случились перестановки, которые сказались на позиционировании устройств, графике их выхода и том, что компания делает. В частности, для флагманов пошли на эксперимент, когда отказались от карт памяти (у Apple нет, и никто не жалуется!), сделали корпуса монолитными, и это многих потребителей отпугнуло. То, что на рынке появилось сразу две модели – S6 и S6 EDGE, в одинаковом размере корпуса, но один с боковой гранью, а второй без, запутало ситуацию еще больше.Первые же продажи показали, что имиджевый EDGE пользуется ошеломляющим спросом, в то время как простой S6 не так популярен. Разница в спросе сказалась не на общем объеме продаж, а именно на их распределении в паре S6/S6 EDGE. Дефицит на EDGE был заметным в течение трех первых месяцев, компания не успевала производить матрицы для них и была вынуждена запустить дополнительное производство.',
        'img' => 'samsung.jpg',
        'price' => 25000

    ],


  ];

  $page = $_GET['page'] ? $_GET['page'] :  'catalog';

  if ($page == 'catalog') {

      $selectedGoods = [];

      if(!empty($_GET['query'])){

          foreach ($goods as $good){

              if($good['name'] == $_GET['query']){

                  $selectedGoods [] = $good;

              }

          }

      }
      else {
          $selectedGoods = $goods;
      }

      require_once ('catalog.php');

  }
  else if ($page == 'good'){

      $selectedGood = [];

      foreach ($goods as $good){

          if($good['id'] == $_GET['id']) {

              $selectedGood = $good;
              break;
          }
      }

      if(!$selectedGood){

          echo 'Товар не найден';

      }

      else {

      require_once ('good.php');

      }

  } else {

      echo "Ошибка, не верная страница.";
  }
  ?>

</body>
</html>