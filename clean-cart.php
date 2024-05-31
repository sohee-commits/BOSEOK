<?php
session_start(); // Start the session

require_once "database.php";

$userId = $_SESSION["user"];

$sql = "UPDATE users SET cart = '' WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $userId);

if ($stmt->execute()) {
  echo json_encode(array("status" => "success"));
} else {
  echo json_encode(array("status" => "error", "message" => $conn->error));
}
