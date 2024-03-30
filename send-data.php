<?php
require_once "session.php";
if (!isset($_SESSION["user"])) {
  header("Location: not-authorized.php");
}

// подключение бд файла для $conn(ection)
require_once "database.php";

// принимаем массив
$data = json_decode(file_get_contents('php://input'), true);
// выводим что получили из cart.php <script>
echo $data;

// получение user id 
$stmt = $conn->prepare("SELECT * FROM users WHERE id = ?");
$stmt->bind_param("s", $_SESSION["user"]);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();
$userId = $user['id'];

// преобразование в json
$cartData = json_encode($data);
// вот здесь полученный массив отправляется в бд
$sql = "UPDATE users SET cart = '$cartData' WHERE id = $userId";

// а вот здесь снова получаем его и возвращаем в cart.php <script>
$sql = "SELECT cart FROM users WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $userId);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();

echo $row['cart']; // что получили из бд

$currentCart = json_decode($row['cart'], true); // получаем user[cart]
$currentCart = json_encode($currentCart); // возвращаем