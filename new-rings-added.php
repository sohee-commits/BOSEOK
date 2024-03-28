<?php
require_once "session.php";
?>
<!DOCTYPE html>
<html lang="ru">

  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
      Добавлен раздел "Кольца" | BOSEOK - Серьги, Кольца и другие Ювелирные изделия
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
          <p class="h2 bold">Добавлен раздел "Кольца"</p>
          <p>15 марта 2024 года важным шагом для компании BOSEOK стало добавление нового раздела на своем сайте под
            названием "Кольца". Этот раздел представляет собой удобный каталог, где представлены все имеющиеся у
            компании модели колец. Каждое изделие в каталоге снабжено качественной фотографией, позволяющей
            потенциальным покупателям получить ясное представление о внешнем виде товара.
          </p>
          <p>

            Наличие цены прикрепленной к каждому товару в каталоге делает процесс выбора и сравнения товаров удобным и
            прозрачным для клиентов. Покупатели могут легко оценить доступные им варианты и выбрать подходящий по
            дизайну и цене продукт.
          </p>
          <p>
            Добавление раздела "Кольца" на сайте BOSEOK открывает новые возможности как для компании, так и для ее
            клиентов. Клиенты теперь могут легко просматривать полный ассортимент колец, не покидая дома, а компания, в
            свою очередь, может привлечь больше потенциальных покупателей через онлайн-платформу.
          </p>
          <p>
            Этот шаг подчеркивает стремление компании к развитию и совершенствованию своего онлайн-присутствия, облегчая
            процесс покупки для своих клиентов. Важно отметить, что такое обновление сайта способствует укреплению
            позиций BOSEOK на рынке ювелирных изделий и повышению уровня сервиса для своих покупателей.
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