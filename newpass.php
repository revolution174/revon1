<?php
session_start();
if ($_SESSION['user']) {
    header('Location: profile.php');
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Revon 1.0</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>

    <div align="center">
        <form action="/index.php" method="post" class="login-btn">
            <h1>Новый пароль</h1>
            <input type="password" placeholder="Пароль"><br>
            <input type="password" name="password_confirm" placeholder="Повторите пароль"><br>
            <button type="submit" name="forgot">Изменить пароль</button>
        </form>
    </div>
</body>
</html>