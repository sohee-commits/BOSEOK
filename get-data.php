<?php
require_once "session.php";
if (!isset($_SESSION["user"])) {
  header("Location: not-authorized.php");
}

// подключение бд файла для $conn(ection)
require_once "database.php";

$cartData = json_decode(file_get_contents('php://input'), true);

// получение user id для получения данных корзины
$stmt = $conn->prepare("SELECT * FROM users WHERE id = ?");
$stmt->bind_param("s", $_SESSION["user"]);

$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();

$userId = $user['id'];

$sql = "SELECT cart FROM users WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $userId);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();
$currentCart = json_decode($row['cart'], true);

$currentCart = json_encode($currentCart);
