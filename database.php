<?php
$hostName = "localhost";
$dbUser = "1is-a12_1is-a12";
$dbPassword = "DN1J1JSHLe";
$dbName = "1is-a12_1is-a12"; // НАЗВАТЬ SQL ФАЙЛ ТАК ЖЕ

$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);

if (!$conn) {
  die ("Something went wrong;");
}
