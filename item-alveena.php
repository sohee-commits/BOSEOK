<?php
session_start();
if (isset ($_SESSION["user"])) {
	header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>
			Ожерелье Alveena | BOSEOK - Серьги, Кольца и другие Ювелирные изделия
		</title>
		<link rel="shortcut icon" href="./assets/favicon.png" type="image/x-icon" />
		<!-- css -->
		<link rel="stylesheet" href="./css/main.css" />
		<link rel="stylesheet" href="./css/item.css" />
		<!-- js -->
		<script src="./js/main.js" defer></script>
	</head>
	<body>
		<section class="ad">
			<p class="small bold">
				СКОРО ЗАКОНЧИТСЯ! Бриллиантовые гвоздики при покупке на сумму более 10
				000 РУБ. >
			</p>
		</section>

		<main>
			<section class="item-container">
				<p class="small">HwaYang > Alveena</p>
				<section class="item">
					<section class="item-preview">
						<div class="image">
							<img src="./assets/jewerly/Alveena.jpg" alt="preview" />
						</div>
					</section>
					<section class="text">
						<p>☆☆☆☆☆ (0)</p>
						<p class="h3 bold" id="item-name">Alveena</p>
						<p>
							Это ожерелье с завораживающим кулоном из лунного камня, окруженным
							тонкой цепочкой, которая переливается блеском. Его дизайн не
							только приятен на ощупь, но и притягивает взгляд.
						</p>
						<p class="h2">$ 1, 050</p>
						<section class="sale">
							<div class="image">
								<img src="./assets/index/sale/1.png" alt="preview" />
							</div>
							<p class="small">
								СКОРО ЗАКОНЧИТСЯ! <br />
								<span class="bold">Получите бриллиантовые шпильки</span> при
								покупке на сумму более 1000 долларов США.
							</p>
						</section>
						<button class="btn-primary">Добавить в корзину</button>
						<hr />
						<div class="delivery">
							<img
								src="./assets/icons/delivery.png"
								width="16"
								height="16"
								alt="delivery > "
							/>
							<p>Бесплатная доставка, бесплатный 30-дневный возврат</p>
						</div>
					</section>
				</section>
			</section>

			<section class="reviews">
				<section class="reviews-preview">
					<div class="text">
						<p class="h2">Отзывы</p>
						<p class="h1">0.0</p>
						<p class="h1">☆☆☆☆☆</p>
						<p class="small">0 отзывов</p>
					</div>
					<div class="image"></div>
				</section>
				<section class="cards">
					<!-- reactive -->
				</section>
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
				<a
					href="https://yandex.ru/maps/-/CDFvFIkT"
					target="_blank"
					class="btn-secondary"
					>Посмотреть на карте</a
				>
			</section>
		</main>

		<section class="cr">
			<p class="small">&copy; BOSEOK, 2024</p>
			<a href="https://icons8.com" class="small">icons by icons8</a>
			<a href="https://github.com/sohee-commits" class="small">
				developer: sohee-commits
			</a>
		</section>
	</body>
</html>
