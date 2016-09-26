<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title></title>
</head>
<body>
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
        'desc' => 'Описание для SUMSUNG',
        'img' => 'samsung.jpg',
        'price' => 25000

    ],


  ];
echo '<pre>';
  foreach ($goods as $good){
    var_dump($good);
  }

  ?>
</body>
</html>