<?php
$hostName = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "login";

$mysqli = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);

if (!$mysqli) {
  die ("Something went wrong;");
}