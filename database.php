<?php

$hostName = "localhost";
$dbUser = "1is-a12_1is-a12";
$dbPassword = "DN1J1JSHLe";
$dbName = "1is-a12_1is-a12";

$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
