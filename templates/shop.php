<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="shopstyle.css">
  <link rel="icon" href="merc.svg">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Monofett&family=Montserrat+Alternates&family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
  <title>Shop of Automobile</title>
</head>
<body>
  <header>
    <div class="text">
      <h1> Choose your character </h1>
    </div>
  </header>
  <h3>
      Каталог супер автомобилей
    </h3>
    <div class="container">
<?php foreach ($goods as $good): ?>
    <div class="shopUnit" >
      <div class="image">
      <img src="<?php echo $good['img']; ?>" />
      </div>
      <div class="shopUnitName"><?php echo $good['name']; ?></div>
      <div class="shopUnitShortDesc"><?php echo $good['desc']; ?></div>
      <div class="shopUnitPrice">Цена: <?php echo $good['price']; ?></div>
      <a href="index.php?page=product&id=<?php   echo   $good['id'];   ?>" class="shopUnitMore">Подробнее</a>
    </div>
<?php endforeach; ?>
</div>
  
</body>
</html>
