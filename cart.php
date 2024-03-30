<?php
require_once "session.php";
if (!isset($_SESSION["user"])) {
	header("Location: not-authorized.php");
}

// подключение бд файла для $conn(ection)
require_once "database.php";

// получение user id для получения данных корзины 
$stmt = $conn->prepare("SELECT * FROM users WHERE id = ?");
$stmt->bind_param("s", $_SESSION["user"]);

$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();

$userId = $user['id'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	// чтение входных данных из тела запроса
	// и преобразование строки JSON в массив PHP
	$data = json_decode(file_get_contents('php://input'), true);

	// преобразование в json
	$cartData = json_encode($data);
	// вот здесь полученный массив отправляется в бд
	$sql = "UPDATE users SET cart = '$cartData' WHERE id = $userId";

	//  результат - успех или ошибка
	if ($conn->query($sql) === TRUE) {
		echo json_encode(array("status" => "success"));
	} else {
		echo json_encode(array("status" => "error", "message" => $conn->error));
	}
}

// вот это уже отправляется на эту страницу в тег script
$sql = "SELECT cart FROM users WHERE id = $userId";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	$row = $result->fetch_assoc();
	$response = json_encode($row['cart']);
	// Сохранение данных в сессии
	$_SESSION['response'] = $response;
} else {
	echo json_encode(array("status" => "error", "message" => "No data found"));
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
		// тут все принимается
		// и в window.___ сохраняется для следующего script-тега
		echo "
		<script>
    	window.userId = " . json_encode($userId) . ";
    	window.responseData = " . json_encode($response) . ";
			console.log(`data recieved >> ` + responseData);
		</script>
		";
		?>
		<script>
			// принимаем и обрабатываем
			let jewerlyCart = JSON.parse(window.responseData); // str
			if (jewerlyCart) {
				jewerlyCart = JSON.parse(jewerlyCart); // arr obj
				console.log(jewerlyCart);
				console.log(typeof jewerlyCart);

				// форматируем 
				jewerlyCart = jewerlyCart.map(item => ({
					...item,
					price: item.price.replaceAll('u20bd', '₽'),
				}));

				// вычисляем тип украшения
				jewerlyCart.forEach(jewerly => {
					if (
						['Petite Elodie', 'Demi', 'Petite', 'Petite Comfort Fit Solitaire', 'Camellia Milgrain', 'Nadia', 'Luxe Viviana', 'Aria Three'].includes(jewerly.name)
					) {
						jewerly.type = 'Кольцо';
					} else if (
						['Lunette', 'Versailles', 'Marseille', 'Flair', 'Sienna', 'Yvette', 'Ballad', 'Eternity'].includes(jewerly.name)
					) {
						jewerly.type = 'Серьги';
					} else {
						jewerly.type = 'Ожерелье';
					}
				});

				var cartNode = document.querySelector(`#cart-items`);

				function renderCart() {
					// выводим
					cartNode.innerHTML = '';

					for (let item of jewerlyCart) {
						cartNode.innerHTML += `
						<article class="item">
							<div class="image">
								<img src="./assets/jewerly/${item.name}.jpg" alt="preview" />
							</div>
							<div class="info">
								<div class="text">
									<a 
										href="./item-${item.name.toLowerCase()}.php" 
										id="item-name" 
										class="bold h2">${item.name}
									</a>
									<p class="h2" id="item-price">${item.price}</p>
								</div>
								<div>
									<span class="bold">Тип:</span>
									<span id="item-type">${item.type}</span>
									<span class="hidden">${item.id}</span>
								</div>
								<button id="del-item">
									<img src="./assets/icons/delete.png" alt="delete" width="32" height="32" />
								</button>
							</div>
						</article>
				`;
					}
				}
			}

			renderCart();

			// удаление всего на кнопку офомрление
			let checkout = document.querySelector(`#checkout`);

			checkout.addEventListener(`click`, () => {
				checkout.classList.toggle(`done`);
				let cartNode = document.querySelector(`#cart-items`);

				if (checkout.classList.contains(`done`)) {
					checkout.innerHTML = `Оформлено`;
					cartNode.innerHTML = ``;
					fetch('clean-cart.php', {
						method: 'POST',
						headers: {
							'Content-Type': 'application/json',
						},
						body: JSON.stringify({ userId: window.userId }),
					})
						.then(response => response.json())
						.then(data => {
							if (data.status === 'success') {
								console.log('Cart cleared successfully');
							} else {
								console.error('Failed to clear cart:', data.message);
							}
						})
						.catch(error => console.error('Error:', error));
				} else {
					checkout.innerHTML = `Оформить`;
				}
			});


			cartNode.addEventListener('click', function (event) {
				if (event.target.matches('#del-item')) {
					let delEl = event.target.closest('.info').querySelector('.hidden');
					let delID = delEl.textContent;

					// удаляем из массива jewerlyCart объект который содержит delID
					// jewerlyCart...
					// отправляем этот массив в базу данных

					// 
					renderCart();
				}
			});
		</script>
	</body>

</html>