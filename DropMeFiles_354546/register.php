<?php
require_once('bd.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Проверка наличия данных перед их обработкой
    if (isset($_POST['login'], $_POST['pass'], $_POST['name'], $_POST['repeatpass'], $_POST['age'], $_POST['date'])) {
        $login = $_POST['login'];
        $pass = $_POST['pass'];
        $name = $_POST['name'];
        $repeatpass = $_POST['repeatpass'];
        $age = $_POST['age'];
        $date = $_POST['date'];
        $class=$_POST['class'];

        // Вставка данных в базу данных
        $sql = "INSERT INTO `database` (login, pass, name, age, date,class) VALUES ('$login', '$pass', '$name','$age', '$date','$class')";
        $conn->query($sql);

        // Перенаправление на страницу vhod.html
        header("Location: vhod.html");
        exit; // Убедитесь, что скрипт останавливается после перенаправления
    }
}
?>