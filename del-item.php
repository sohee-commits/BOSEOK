<?php
session_start(); // Start the session

require_once "database.php";

$userId = $_SESSION["user"];
if (isset($_POST["itemName"])) {
  parse_str(file_get_contents('php://input'), $_POST);
  $itemName = $_POST["itemName"];

  // Prepare the SQL statement to find the index of the item to remove
  $sql = "SELECT JSON_SEARCH(cart, 'one', ?) AS itemPath FROM users WHERE id = ?";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("ss", $itemName, $userId);
  $stmt->execute();
  $result = $stmt->get_result();
  $row = $result->fetch_assoc();

  if ($row['itemPath']) {
    // Remove the item from the cart
    $sql = "UPDATE users SET cart = JSON_REMOVE(cart, ?) WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $row['itemPath'], $userId);

    if ($stmt->execute()) {
      echo json_encode(array("status" => "success"));
    } else {
      echo json_encode(array("status" => "error", "message" => $conn->error));
    }
  } else {
    echo json_encode(array("status" => "error", "message" => "Item not found in cart"));
  }
}