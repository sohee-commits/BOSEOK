<?php
require_once "session.php";
?>
<!DOCTYPE html>
<html lang="ru">

  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
      "BOSEOK" официально открыт | BOSEOK - Серьги, Кольца и другие Ювелирные изделия
    </title>
    <link rel="shortcut icon" href="./assets/favicon.png" type="image/x-icon" />
    <!-- css -->
    <link rel="stylesheet" href="./css/main.css" />
    <link rel="stylesheet" href="./css/about.css" />
    <!-- js -->
    <script src="./js/news.js" defer></script>
  </head>

  <body>
    <section class="ad">
      <p class="small bold">
        СКОРО ЗАКОНЧИТСЯ! Бриллиантовые гвоздики при покупке на сумму более 10
        000 РУБ. >
      </p>
    </section>

    <?php require_once ('./header.php'); ?>

    <main>
      <main>
        <section class="about">
          <p class="h2 bold">Появление сайта "BOSEOK"</p>
          <p>29 марта 2024 года стало значимым моментом для компании BOSEOK с запуском своего официального сайта.
            Этот шаг открывает новые возможности для компании и ее клиентов, предоставляя удобную онлайн-платформу для
            ознакомления с продукцией и совершения покупок.
          </p>
          <p>
            На сайте BOSEOK представлен широкий ассортимент уникальных украшений, включая кольца, серьги, браслеты и
            другие изысканные товары. Каждый товар сопровождается детальным описанием и качественными фотографиями, что
            помогает клиентам получить полное представление о продукции компании.
          </p>
          <p>
            Наличие удобного поиска и категоризации товаров на сайте упрощает процесс выбора и сравнения изделий, а
            присутствие цен делает покупки прозрачными для потенциальных покупателей. Теперь клиенты могут комфортно и
            безопасно приобретать украшения, не выходя из дома.
          </p>
          <p>
            Запуск сайта BOSEOK подчеркивает стремление компании к инновациям и совершенствованию
            онлайн-присутствия. Это позволяет укрепить позиции компании на рынке ювелирных изделий и обеспечить высокий
            уровень сервиса для своих клиентов.
          </p>
        </section>

        <section class="where">
          <div class="image">
            <img src="./assets/index/where/1.png" alt="preview" />
          </div>
          <p class="h2 bold">Мы здесь для вас.</p>
          <p>
            Сделайте свой наряд более индивидуальным, чем когда-либо. Идеальный
            подарок себе или близкому человеку.
          </p>
          <a href="https://yandex.ru/maps/-/CDFvFIkT" target="_blank" class="btn-secondary">Посмотреть на карте</a>
        </section>

        <section class="inspo">
          <p class="h2 bold">Вдохновение</p>
          <div class="images"></div>
        </section>
      </main>
    </main>
    <?php require_once ('./footer.php'); ?>

    <section class="cr">
      <p class="small">&copy; BOSEOK, 2024</p>
      <a href="https://icons8.com" class="small">icons by icons8</a>
      <a href="https://github.com/sohee-commits" class="small">
        developer: sohee-commits
      </a>
    </section>
  </body>

</html>