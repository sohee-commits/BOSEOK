<?php
session_start();
if (!isset ($_SESSION["user"])) {
	header("Location: login.php");
	exit();
}
require_once "database.php";

$stmt = $conn->prepare("SELECT * FROM users WHERE id = ?");
$stmt->bind_param("s", $_SESSION["user"]);

$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Профиль | BOSEOK - Серьги, Кольца и другие Ювелирные изделия</title>
		<link rel="shortcut icon" href="./assets/favicon.png" type="image/x-icon" />
		<!-- css -->
		<link rel="stylesheet" href="./css/main.css" />
		<link rel="stylesheet" href="./css/user.css" />
		<!-- js -->
		<script src="./js/main.js" defer></script>
	</head>

	<body>
		<section class="ad">
			<p class="small bold">Бесплатная доставка и 30-дневный возврат</p>
		</section>

		<main>
			<section class="user" id="user">
				<p class="h2 bold">Профиль</p>
				<section class="user-info" id="user-info">
					<p class="input" id="name">
						<?php echo $user["name"]; ?>
					</p>
					<p class="input" id="surname">Здесь будет Фамилия</p>
					<p class="input" id="parent">Здесь будет Отчество</p>
					<p class="input" id="email">Здесь будет почта</p>
					<p class="input" id="parent">Здесь будет адрес</p>
					<label for="send-ads">
						<input type="checkbox" name="send-ads" id="send-ads" checked />
						Присылайте мне на электронную почту новости и предложения BOSEOK.
					</label>
					<a href="./logout.php" class="btn-primary">
						Выйти
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

		<section class="cr">
			<p class="small">&copy; BOSEOK, 2024</p>
			<a href="https://icons8.com" class="small">icons by icons8</a>
			<a href="https://github.com/sohee-commits" class="small">
				developer: sohee-commits
			</a>
		</section>
	</body>

</html>