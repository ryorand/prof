<?php
require __DIR__.'/generate-key.php';
?>
<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-widht, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
  <title>Scissors and thread</title>
</head>

<body>
  <?php
	$dbconn3 = pg_connect("hostaddr=127.0.0.1 port=5432 dbname='Scissors and thread' user='Scissors and thread' password='Scissors and thread'");
  if ($dbconn3) {
    echo "Подключение к базе данных успешно установлено!";
  } else {
    echo "Ошибка подключения к базе данных!";
    exit;
  }
  ?>

  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <?php require "blocks/header.php" ?>
  </nav>

  <div class="container mt-5">
    <h3 class="mb-5">О нас</h3>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading fw-normal lh-1">Лучшее качество работы <span class="text-body-secondary"></span></h2>
        <p class="lead">Мы предлагаем нашим клиентам лучшее качество тканей из которых мы создаем изделия. Премиальные ткани залог чудесного образа.</p>
      </div>
      <div class="col-md-5">
        <img src="img/1.jpg" class="img-thumbnail" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
        <title>Placeholder</title>
        <rect width="100%" height="100%" fill="var(--bs-secondary-bg)"></rect>
        <text x="50%" y="50%" fill="var(--bs-secondary-color)">
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading fw-normal lh-1">Работа в срок заказа <span class="text-body-secondary"></span></h2>
        <p class="lead">Мы выполняем заказ клиента строго в срок. Клиент всегда может быть уверенным в планировании своих событий.</p>
      </div>
      <div class="col-md-5 order-md-1">
        <img src="img/2.jpg" class="img-thumbnail" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
        <title>Placeholder</title>
        <rect width="100%" height="100%" fill="var(--bs-secondary-bg)"></rect>
        <text x="50%" y="50%" fill="var(--bs-secondary-color)" dy=".3em"></text>
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading fw-normal lh-1">Лучшие цены на рынке <span class="text-body-secondary"></span></h2>
        <p class="lead">Наша компания предлагает лучшие цены на рынке среди других. Можно сказать вы оплачиваете только работу мастера и саму стоимость тканей.</p>
      </div>
      <div class="col-md-5">
        <img src="img/3.jpg" class="img-thumbnail" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
        <title>Placeholder</title>
        <rect width="100%" height="100%" fill="var(--bs-secondary-bg)"></rect>
        <text x="50%" y="50%" fill="var(--bs-secondary-color)">
      </div>
    </div>

    <hr class="featurette-divider">

  </div>

  <?php require "blocks/footer.php" ?>
</body>

</html>
