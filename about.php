<?php
require_once "session.php";
?>
<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BOSEOK - Серьги, Кольца и другие Ювелирные изделия</title>
    <link rel="shortcut icon" href="./assets/favicon.png" type="image/x-icon" />
    <!-- css -->
    <link rel="stylesheet" href="./css/main.css" />
    <link rel="stylesheet" href="./css/about.css" />
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
      <section class="about">
        <p class="h2 bold">О нас</p>
        <p>BOSEOK - это онлайн-платформа, предлагающая уникальные коллекции ювелирных изделий, включая ожерелья и
          серьги. Бренд отличается высоким качеством и индивидуальным подходом к каждому изделию, что делает его
          идеальным выбором для тех, кто ценит изысканность и уникальность.
        </p>
        <p>
          На сайте представлены две коллекции: HwaYang и YeonHwa, каждая из которых отражает уникальные стилистические
          особенности и материалы. HwaYang - это коллекция ожерелий, в которой каждое украшение создано с учетом
          современных тенденций и традиционных элементов, создавая гармоничное сочетание изысканности и доступности.
          YeonHwa - это коллекция серьг, где каждое изделие отражает индивидуальность и уникальность, подчеркивая
          красоту и изысканность.
        </p>
        <p>BOSEOK предлагает не только красивые и качественные изделия, но и удобный интернет-магазин, где каждое
          изделие представлено с множеством фотографий, позволяющих покупателям полностью оценить каждый элемент
          украшения. Бренд также акцентирует внимание на этическом подходе к производству, гарантируя, что каждое
          изделие создано с учетом экологической ответственности и уважения к природе.
        </p>
        <p>BOSEOK - это не просто онлайн-магазин ювелирных изделий, это место, где каждый покупатель может найти
          идеальное украшение, которое будет отражать его индивидуальность и стиль. Бренд предлагает не только красивые
          и качественные изделия, но и уникальный опыт покупки, который отличается от того, что предлагают многие другие
          онлайн-магазины.</p>
        <p>BOSEOK - это место, где каждый покупатель может найти идеальное украшение, которое будет отражать его
          индивидуальность и стиль. Бренд предлагает не только красивые и качественные изделия, но и уникальный опыт
          покупки, который отличается от того, что предлагают многие другие онлайн-магазины.
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