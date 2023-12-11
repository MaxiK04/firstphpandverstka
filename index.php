<!-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link rel="icon" href="merc.svg">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Monofett&family=Montserrat+Alternates&family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
  <title>Automobile Empire</title>
</head>
<body>
  <header>
    <div class="container">
      <div class="head">
      <h1>Automobile Empire Shop</h1>
      </div>
      <div class="header__block">
        <nav>
          <a href="shop.html">
            Магазин автомобилей
          </a>
          <a href="#">
            Личный кабинет
          </a>
        </nav>
      </div>
      </div>
  </header>

  <div class="group">
    <div class="text">
      <h3>Хочешь себе наводить страх и ужас на ближайших СТО? Выделяться? Быть индивидуалом? Тогда бери тачку у нас! Гарантия как говориться до ворот</h3>
      <div id="square" onclick="location.href='shop.html'">
        <div class="text2"  onclick="location.href='shop.html'">
          <h5 > Хочу </h5>
        </div>
      </div>
    </div>
  
  
    <div class="images">
      <img src="mers.svg">
    </div>
  </div>
</body>
</html> -->
<?php
$goods= [
	['id' => 1,
	'name' => 'Мark 2 TOURER_V',
	'desc'  =>  'Данный аппарат не оставит вас без внимания, а женщин без криков на соседнем сиденье, ведь когда вы летите на второй в отсечку турбина делает "Тутут",а блоу офф сигнализирует о ближайшей шиномонтажке и резины с мусорки. Редкий аппарат в нынешних реалях, раньше было лучше, раньше было больше, как говориться зачем понаставили столько столбов',
	'img' => '/mark2.jpg',
	'price' => 'Две филадельфии с лососем'
	],
	[
	'id' => 2,
	'name' => 'M5E60',
	'desc'  =>  'Легенда в автомобильной мире сколько покрышек ссожено, сколько масло влито и все живы, жаль что позерские двухлитровые на автомате все заполонили',
	'img' => '/m5e60.jpg',
	'price' => 'Баррель масла 10в40'
	],
	[
	'id' => 3,
	'name' => 'СLS 63AMGS БАНАН',
	'desc'  =>  'Ты молодой банан и ты покупаешь себе банан, кто-то у тебя спрашивает, что у тебя за машина, а ты отвечаешь у меня мерседес банан',
	'img' => 'cls.jpg',
	'price' => 'Две шашки в потоке'
	],
];
//echo '<pre>';
//var_dump($_GET);
//echo"<pre>";
//	var_dump($goods);
//	echo$goods[1]['name'] . '<br>';
//	echo$goods[2]['desc'] . '<br>';
//	echo $goods[0]['price'] . '<br>';
// foreach ($goods as $key => $good) {
// 	echo 'Ключ массива: ' . $key . '<br>';
// 	echo $good['id'] . '<br>';
// 	echo $good['name'] . '<br>';
// 	echo $good['desc'] . '<br>';
// 	echo $good['img'] . '<br>';
// 	echo$good['price'] . '<br>';
// echo '<hr>';
//echo $_GET['page'];
//echo $_GET['id'];
$page = $_GET['page'];
if (!isset($page)) {

} elseif ($page == 'shop') {

} elseif ($page == 'product') {

}
if (!isset($page)) {
	require('templates/main.php'); 
}
elseif ($page == 'shop') {require('templates/shop.php');
}
elseif ($page == 'product') {
  $id= $_GET['id']; // получаемidпродукта
  $good= []; //созданиеконтейнерадлятовара
  foreach ($goods as $product) {// получениезначенийтовара
    if ($product['id'] == $id) {
      $good = $product;
      break;
    }
  }
  require('templates/openedProduct.php');}
?>