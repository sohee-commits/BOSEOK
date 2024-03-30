<?php
require_once "session.php";
?>
<!DOCTYPE html>
<html lang="ru">

	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>BOSEOK - Серьги, Кольца и другие Ювелирные изделия</title>
		<link rel="shortcut icon" href="./assets/favicon.png" type="image/x-icon" />
		<!-- css -->
		<link rel="stylesheet" href="./css/main.css" />
		<link rel="stylesheet" href="./css/index.css" />
		<!-- js -->
		<script src="./js/index.js" defer></script>
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
			<section class="intr">
				<p class="intr-h">Ваше отражение</p>
				<p>
					Воплотите свою индивидуальность с помощью нашей коллекции ювелирных
					изделий.
				</p>
				<div class="btns">
					<a href="./hwayang.php" class="btn-primary">Коллекция HwaYang</a>
					<a href="./yeonhwa.php" class="btn-secondary">Коллекция YeonHwa</a>
				</div>
			</section>

			<section class="categories">
				<p class="h2 bold">Категории</p>
				<section class="cards">
					<!-- card -->
					<a href="./rings.php" class="card">
						<div class="image">
							<img src="./assets/index/categories/1.png" alt="rings" />
						</div>
						<p class="bold">Кольца</p>
					</a>
					<!-- card -->
					<a href="./earrings.php" class="card">
						<div class="image">
							<img src="./assets/index/categories/2.png" alt="earrings" />
						</div>
						<p class="bold">Серьги</p>
					</a>
					<!-- card -->
					<a href="./jewerly.php" class="card">
						<div class="image">
							<img src="./assets/index/categories/3.png" alt="jewerly" />
						</div>
						<p class="bold">Ювелирные изделия</p>
					</a>
					<!-- card -->
					<a href="#collections" class="card">
						<div class="image">
							<img src="./assets/index/categories/4.png" alt="rings" />
						</div>
						<p class="bold">Коллекции</p>
					</a>
				</section>
			</section>

			<section class="sale">
				<img src="./assets/index/sale/1.png" alt="sale" />
				<div class="text">
					<p>ПОСЛЕДНИЙ ДЕНЬ!</p>
					<p>
						<span class="bold">Получите бриллиантовые шпильки</span> при покупке
						на сумму более 1000 долларов США.
					</p>
					<p class="small">Стоимость 30 000 РУБ.</p>
				</div>
			</section>

			<section class="collections" id="collections">
				<!-- collection -->
				<section class="coll">
					<div class="image">
						<img src="./assets/index/collections/1.png" alt="preview" />
					</div>
					<p class="h2 bold">Коллекция YeonHwa</p>
					<p>
						Пришло время обновить свою шкатулку с украшениями, добавив в нее
						самые актуальные вещи.
					</p>
					<a href="./yeonhwa.php" class="btn-secondary">Смотреть</a>
				</section>
				<!-- collection -->
				<section class="coll">
					<div class="image">
						<img src="./assets/index/collections/2.png" alt="preview" />
					</div>
					<p class="h2 bold">Коллекция HwaYang</p>
					<p>
						Откройте для себя изысканные ювелирные украшения, созданные для
						того, чтобы передать особый стиль и историю.
					</p>
					<a href="./hwayang.php" class="btn-secondary">Смотреть</a>
				</section>
			</section>

			<section class="gift">
				<div class="text">
					<p class="small">Держите своих близких рядом.</p>
					<p class="h3 bold">Оригинальные ювелирные изделия</p>
					<p>
						Сделайте свой наряд более индивидуальным, чем когда-либо. Идеальный
						подарок себе или близкому человеку.
					</p>
					<a href="./jewerly.php" class="btn bold">Открыть</a>
				</div>
				<div class="image">
					<img src="./assets/index/gift/1.png" alt="image" />
				</div>
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