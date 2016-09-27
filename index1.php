<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title></title>
</head>
<body>
  <form action="/" method="get">
    Поиск:
    <input type="text" name="query">
    <input type="submit" value="Найти">
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
        'name' => 'Iphone',
        'desc' => 'Описание для Iphone',
        'img' => 'iphone.jpg',
        'price' => 50000
      ],
      [
        'id' => 3,
        'name' => 'Samsung',
        'desc' => 'Описание для Samsung Описание для SamsungОписание для SamsungОписание для SamsungОписание для Samsung
        Описание для SamsungОписание для SamsungОписание для SamsungОписание для SamsungОписание для SamsungОписание для SamsungОписание для SamsungОписание для SamsungОписание для Samsung
        Описание для SamsungОписание для SamsungОписание для SamsungОписание для SamsungОписание для SamsungОписание для SamsungОписание для SamsungОписание для Samsung
        Описание для SamsungОписание для SamsungОписание для SamsungОписание для SamsungОписание для Samsung
        Описание для SamsungОписание для SamsungОписание для SamsungОписание для SamsungОписание для SamsungОписание для Samsung
        Описание для SamsungОписание для SamsungОписание для SamsungОписание для SamsungОписание для Samsung
        Описание для SamsungОписание для SamsungОписание для SamsungОписание для SamsungОписание для SamsungОписание для Samsung
        Описание для SamsungОписание для SamsungОписание для SamsungОписание для SamsungОписание для SamsungОписание для Samsung
        Описание для SamsungОписание для SamsungОписание для SamsungОписание для SamsungОписание для SamsungОписание для Samsung',
        'img' => 'samsung.jpg',
        'price' => 25000
      ],
    ];

    $page = $_GET['page'] ? $_GET['page'] : 'catalog';

    if ($page == 'catalog') {
      $selectedGoods = [];
      if (!empty($_GET['query'])) {
        foreach ($goods as $good) {
          if ($good['name'] == $_GET['query']) {
            $selectedGoods[] = $good;
          }
        }
      } else {
        $selectedGoods = $goods;
      }
      require_once ('catalog.php');
    } elseif ($page == 'good') {
      $selectedGood = [];
      foreach ($goods as $good) {
        if ($good['id'] == $_GET['id']) {
          $selectedGood = $good;
          break;
        }
      }
      if ($selectedGood) {
        require_once ('good.php');
      } else {
        echo "Ошибка, товара не существует.";
      }
    } else {
      echo "Ошибка, не верная страница.";
    }
  ?>
</body>
</html>