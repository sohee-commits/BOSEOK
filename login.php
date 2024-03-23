<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>
    Войти в аккаунт | BOSEOK - Серьги, Кольца и другие Ювелирные изделия
  </title>
  <link rel="shortcut icon" href="./assets/favicon.png" type="image/x-icon" />
  <!-- css -->
  <link rel="stylesheet" href="./css/main.css" />
  <link rel="stylesheet" href="./css/login.css" />
  <!-- js -->
  <script src="./js/login.js" defer></script>
  <script src="./js/main.js" defer></script>
</head>

<body>
  <section class="ad">
    <p class="small bold">Бесплатная доставка и 30-дневный возврат</p>
  </section>

  <main>
    <section class="login">
      <p class="h2 bold">Вход</p>
      <p>Если у вас есть учетная запись, войдите в нее.</p>
      <form action="login.php" method="post">
        <!-- PHP CODE -->
        <?php
        if (isset ($_POST["login"])) {
          $email = $_POST["email"];
          $password = $_POST["password"];
          require_once "database.php";
          $sql = "SELECT * FROM users WHERE email = '$email'";
          $result = mysqli_query($conn, $sql);
          $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
          if ($user) {
            if (password_verify($password, $user["password"])) {
              session_start();
              $_SESSION["user"] = "yes";
              header("Location: index.php");
              die();
            } else {
              echo "<p class='error'>Пароли должны совпадать.</p>";
            }
          } else {
            echo "<p class='error'>Почта должна совпадать.</p>";
          }
        }
        ?>
        <label for="email"></label>
        <input type="email" id="email" name="email" placeholder="Email" autocomplete="email" />
        <input type="password" id="password" name="password" placeholder="Пароль" autocomplete="current-password" />
        <a href="./forgot-password.php" class="small link">Забыли пароль?</a>
        <button type="submit" id="login" class="btn-primary">Войти</button>
      </form>
    </section>

    <section class="or">
      <div></div>
      <p>ИЛИ</p>
      <div></div>
    </section>

    <section class="register">
      <p class="h2 bold">Регистрация</p>
      <p>Наслаждайтесь преимуществами учетной записи BOSEOK.</p>
      <form action="login.php" method="post">
        <!-- PHP CODE -->
        <?php
        if (isset ($_POST["register"])) {
          $r_name = $_POST["r-name"];
          $r_surname = $_POST["r-surname"];
          $r_parentName = $_POST["r-parent-name"];
          $r_email = $_POST["r-email"];
          $r_password = $_POST["r-password"];
          $r_passwordRepeat = $_POST["r-password-repeat"];

          $r_passwordHash = password_hash($r_password, PASSWORD_DEFAULT);

          $errors = array();

          // password length error handle
          if (strlen($r_password) < 8) {
            array_push($errors, "Пароль должен быть не меньше 8 символов.");
          }

          // password isn't equal password repeat handle
          if ($r_password !== $r_passwordRepeat) {
            array_push($errors, "Пароли должны совпадать.");
          }

          // display errors
          if (count($errors) > 0) {
            foreach ($errors as $error) {
              echo "<p class=\"error\">$error</p>";
            }
          } else {
            $sql = "INSERT INTO users (r_name, r_surname, r_parentName, r_email, r_password) VALUES (?, ?, ?, ?, ?)";
            $stmt = mysqli_stmt_init($conn);
            if (mysqli_stmt_prepare($stmt, $sql)) {
              mysqli_stmt_bind_param($stmt, "sssss", $r_name, $r_surname, $r_parentName, $r_email, $r_passwordHash);
              if (mysqli_stmt_execute($stmt)) {
                echo "<p>Вы зарегистрированы.</p>";
                echo "<script>console.log('Вы зарегистрированы.');</script>";
              } else {
                echo "Ошибка при регистрации.";
                echo "<script>console.log('Ошибка при регистрации.');</script>";
              }
            } else {
              echo "Ошибка в запросе.";
              echo "<script>console.log('Ошибка в запросе.');</script>";
            }
          }
        }
        ?>

        <!-- name -->
        <label for="r-name"></label>
        <input type="text" id="r-name" name="r-name" placeholder="Имя" autocomplete="name" required />
        <!-- surname -->
        <label for="r-surname"></label>
        <input type="text" id="r-surname" name="r-surname" placeholder="Фамилия" required />
        <!-- parent name -->
        <label for="r-parent-name"></label>
        <input type="text" id="r-parent-name" name="r-parent-name" placeholder="Отчество (необязательно)" />
        <!-- email -->
        <label for="r-email"></label>
        <input type="email" id="r-email" name="r-email" placeholder="Email" autocomplete="email" required />
        <!-- password -->
        <label for="r-password"></label>
        <input type="password" id="r-password" name="r-password" placeholder="Пароль" autocomplete="current-password"
          required />
        <!-- password-repeat -->
        <label for="r-password-repeat"></label>
        <input type="password" id="r-password-repeat" name="r-password-repeat" placeholder="Повторите пароль"
          autocomplete="current-password" required />
        <p>
          Пароль должен состоять из восьми или более символов латинского
          алфавита, содержать заглавные и строчные буквы, цифры.
        </p>
        <label for="send-ads">
          <input type="checkbox" name="send-ads" id="send-ads" />
          Присылайте мне на электронную почту новости и предложения BOSEOK.
        </label>
        <button type="submit" name="register" id="register" class="btn-primary">
          Зарегистрироваться
        </button>
      </form>
    </section>
  </main>

  <section class="cr">
    <p class="small">&copy; BOSEOK, 2024</p>
    <a href="https://icons8.com" class="small">icons by icons8</a>
    <a href="https://github.com/sohee-commits" class="small">
      developer: sohee-commits
    </a>
  </section>
</body>

</html>