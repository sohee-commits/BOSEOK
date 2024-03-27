<?php
require_once "session.php";
if (!isset($_SESSION["user"])) {
	header("Location: not-authorized.php");
}
?>
<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Корзина | BOSEOK - Серьги, Кольца и другие Ювелирные изделия</title>
		<link rel="shortcut icon" href="./assets/favicon.png" type="image/x-icon" />
		<!-- css -->
		<link rel="stylesheet" href="./css/main.css" />
		<link rel="stylesheet" href="./css/cart.css" />
		<!-- js -->
		<script src="./js/cart.js" defer></script>
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
			<section class="cart" id="cart">
				<section class="cart-action">
					<p class="bold">Корзина</p>
					<button class="btn-primary" id="checkout">Оформить</button>
				</section>
				<hr />
				<section class="items" id="cart-items">
					<a href="./item-alveena.php" class="item">
						<div class="image">
							<img src="./assets/jewerly/Alveena.jpg" alt="preview" />
						</div>
						<div class="info">
							<div class="text">
								<p id="item-name" class="bold h2">Alveena</p>
								<p class="h2" id="item-price"> ₽ 10 500 </p>
							</div>
							<div>
								<span class="bold">Тип:</span>
								<span id="item-type">Ожерелье</span>
							</div>
							<button>
								<img src="./assets/icons/delete.png" alt="delete" width="32" height="32" />
							</button>
						</div>
					</a>
					<a href="./item-demi.php" class="item">
						<div class="image">
							<img src="./assets/jewerly/Demi.jpg" alt="preview" />
						</div>
						<div class="info">
							<div class="text">
								<p id="item-name" class="bold h2">Demi</p>
								<p class="h2" id="item-price"> ₽ 17 900 </p>
							</div>
							<div>
								<span class="bold">Тип:</span>
								<span id="item-type">Ожерелье</span>
							</div>
							<button>
								<img src="./assets/icons/delete.png" alt="delete" width="32" height="32" />
							</button>
						</div>
					</a>
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
				<a href="https://yandex.ru/maps/-/CDFvFIkT" target="_blank" class="btn-secondary">Посмотреть на карте</a>
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