<?php
require_once "database.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['userId'])) {
  $userId = $_POST['userId'];
  $sql = "UPDATE users SET cart = '' WHERE id = ?";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("s", $userId);

  if ($stmt->execute()) {
    echo json_encode(array("status" => "success"));
  } else {
    echo json_encode(array("status" => "error", "message" => $conn->error));
  }
}
