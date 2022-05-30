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
<body style="background-image:url(https://sun9-46.userapi.com/s/v1/if2/GMvQeT59mnuUhn8EiLUUj2RfRpH2kVUwTQiztjCMkcRs23iA5d43SyUqy8gJfkK9YAEazd0gd9Wvuu68T9sxzgB8.jpg?size=1920x1080&quality=96&type=album); background-repeat:no-repeat; background-color:#FFFFFF">

    <form>
        <label>Почта</label>
        <input type="email" name="email" placeholder="Введите свой адрес почты">
        <label>Пароль</label>
        <input type="password" name="password" placeholder="Введите пароль">
        <button type="submit" class="login-btn">Войти</button>
		<p>
		    Забыли пароль? - <a href="reset.php">Восстановите его!</a>
		</p>
		<p>
            У вас нет аккаунта? - <a href="register.php">Зарегистрируйтесь!</a>
        </p>
        <p class="msg none">Ошибка</p>
    </form>

    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <script src="assets/js/main.js"></script>

</body>
</html>