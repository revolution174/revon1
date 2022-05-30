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
        <label>ФИО</label>
        <input type="text" name="full_name" placeholder="Введите свое полное имя">
        <label>Почта</label>
        <input type="email" name="email" placeholder="Введите адрес своей почты">
        <label>Серия и номер паспорта</label>
        <input type="pass" name="pass" placeholder="Введите серию и номер паспорта">
        <label>Кем выдан?</label>
        <input type="pass_name" name="pass_name" placeholder="Кем выдан паспорт?">
        <label>Изображение профиля</label>
        <input type="file" name="avatar">
        <label>Пароль</label>
        <input type="password" name="password" placeholder="Введите пароль">
        <label>Подтверждение пароля</label>
        <input type="password" name="password_confirm" placeholder="Подтвердите пароль">
        <button type="submit" class="register-btn">Зарегистрироваться</button>
        <p>
            У вас уже есть аккаунт? - <a href="/">Авторизируйтесь</a>!
        </p>
        <p class="msg none">Ошибка</p>
    </form>
    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>