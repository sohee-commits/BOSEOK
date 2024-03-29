<?php
require_once "session.php";
if (!isset($_SESSION["user"])) {
  header("Location: not-authorized.php");
}
// ОБРАБОТКА КОРЗИНЫ 

// подключение бд файла для $conn(ection)
require_once "database.php";

// получение user id для получения данных корзины
$stmt = $conn->prepare("SELECT * FROM users WHERE id = ?");
$stmt->bind_param("s", $_SESSION["user"]);

$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();

$userId = $user['id'];

// проверяет, является ли текущий HTTP-запрос POST-запросом
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // чтение входных данных из тела запроса
  // и преобразование строки JSON в массив PHP
  $data = json_decode(file_get_contents('php://input'), true);

  // преобразование в json
  $cartData = json_encode($data);
  // обновление данных 
  $sql = "UPDATE users SET cart = CONCAT(COALESCE(cart, ''), '$cartData') WHERE id = $userId";

  //  true, если таблица обновилась
  if ($conn->query($sql) === TRUE) {
    echo json_encode(array("status" => "success"));
  } else {
    echo json_encode(array("status" => "error", "message" => $conn->error));
  }
}

// получение данных из базы данных
$sql = "SELECT cart FROM users WHERE id = $userId";
$result = $conn->query($sql);

//  нашелся ли юзер с его корзиной
if ($result->num_rows > 0) {
  // fetch_assoc извлекает данные из колонки cart для пользователя 
  $row = $result->fetch_assoc();
  // преобразует строку JSON, содержащуюся в $row['cart'],
  // обратно в массив PHP
  // echo json_encode(json_decode($row['cart']));

  $response = json_encode($row['cart']);

  // Сохранение данных в сессии
  $_SESSION['response'] = $response;
  echo var_dump($response);
} else {
  echo json_encode(array("status" => "error", "message" => "No data found"));
}
// закрывает соединение с базой данных <-- мне это точно надо?
// $conn->close();

exit;