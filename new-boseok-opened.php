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
          <p class="h2 bold">"BOSEOK" официально открыт</p>
          <p>1 марта 2024 года стал великолепным днем для компании BOSEOK, поскольку она с гордостью объявила об
            открытии официального магазина. Этот важный шаг отмечает новую эру для бренда, предлагая клиентам уникальный
            опыт покупок и возможность ознакомиться с полным ассортиментом изделий непосредственно в магазине.
          </p>
          <p>
            Новый магазин BOSEOK является местом, где каждое украшение оживает, представляя собой искусно выполненные
            шедевры ювелирного искусства. Клиенты могут насладиться близким знакомством с каждым изделием, оценить его
            красоту и утонченность, а затем выбрать то, что отвечает их вкусу и предпочтениям.
          </p>
          <p>
            Открытие официального магазина BOSEOK открывает новые горизонты возможностей для всех ценителей изысканных
            украшений. Теперь каждый желающий может посетить магазин и найти украшение своей мечты, получив при этом
            высококлассное обслуживание и консультацию от профессионалов в области ювелирного искусства.
          </p>
          <p>
            Этот важный этап подчеркивает постоянную преданность компании BOSEOK качеству, инновациям и удовлетворению
            потребностей своих клиентов. Открытие официального магазина является еще одним шагом в развитии бренда и
            углублении взаимоотношений с поклонниками его уникального стиля и качества.
          </p>
        </section>

        <section class="where">
          <div class="image">
            <img src="./assets/index/where/1.png" alt="preview" />
          </div>
          <p class="h2 bold">Мы здесь для вас</p>
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