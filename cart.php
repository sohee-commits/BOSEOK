<?php
require_once "session.php";
if (!isset($_SESSION["user"])) {
	header("Location: not-authorized.php");
}

if (isset($_SESSION['response'])) {
	$response = $_SESSION['response']; // Извлечение данных из сессии
}

if (isset($_GET['setResponseToNull']) && $_GET['setResponseToNull'] === 'true') {
	$_SESSION['response'] = null;
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

		<?php
		echo "
		<script>
    	window.responseData = " . json_encode($response) . ";
			console.log(responseData);
		</script>
		";
		?>
		<script>
			let jewerlyObj = JSON.parse(window.responseData); // str
			if (jewerlyObj) {
				jewerlyObj = jewerlyObj.replace('u20bd', '₽');
				jewerlyObj = JSON.parse(jewerlyObj); // obj
				console.log(jewerlyObj);


				let type;

				if (Object.values(jewerlyObj).some(value => [
					'Petite Elodie',
					'Demi',
					'Petite',
					'Petite Comfort Fit Solitaire',
					'Camellia Milgrain',
					'Nadia',
					'Luxe Viviana',
					'Aria Three',
				].includes(value))) {
					type = 'Кольцо';
				} else if (Object.values(jewerlyObj).some(value => [
					'Lunette',
					'Versailles',
					'Marseille',
					'Flair',
					'Sienna',
					'Yvette',
					'Ballad',
					'Eternity',
				].includes(value))) {
					type = 'Серьги';
				} else {
					type = 'Ожерелье';
				}

				let cartNode = document.querySelector(`#cart-items`);

				cartNode.innerHTML += `
			<a href="./item-${jewerlyObj['name'].toLowerCase()}.php" class="item">
				<div class="image">
					<img src="./assets/jewerly/${jewerlyObj['name']}.jpg" alt="preview" />
				</div>
				<div class="info">
					<div class="text">
						<p id="item-name" class="bold h2">${jewerlyObj['name']}</p>
						<p class="h2" id="item-price"> ${jewerlyObj['price']} </p>
					</div>
					<div>
						<span class="bold">Тип:</span>
						<span id="item-type">${type}</span>
					</div>
					<button>
						<img src="./assets/icons/delete.png" alt="delete" width="32" height="32" />
					</button>
				</div>
			</a>
			`;

				let checkout = document.querySelector(`#checkout`);

				checkout.addEventListener(`click`, () => {
					checkout.classList.toggle(`done`);
					let cartNode = document.querySelector(`#cart-items`);

					if (checkout.classList.contains(`done`)) {
						checkout.innerHTML = `Оформлено`;
						cartNode.innerHTML = ``;
						// Send a request to the same PHP script with a parameter
						var xhr = new XMLHttpRequest();
						xhr.open('GET', '?setResponseToNull=true', true);
						xhr.send();
					} else {
						checkout.innerHTML = `Оформить`;
					}
				});
			}
		</script>
	</body>

</html>