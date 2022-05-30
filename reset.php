<?php
session_start();
if ($_SESSION['user']) {
    header('Location: profile.php');
}


if(isset($data['forgot'])) {
    $user = R::findOne('users', 'email = ?', array($data['email']));
}
    if($user){
         $key = md5($user->login.rand(1000, 9999));
         $user->change_key = $key;
         R::store($user);

         $url = $site_url. 'newpass.php?key='.$key;
         $message = $user->login.",был выполнен запрос на изменение вашего пароля. \n\n Для изменения перейдите по ссылке: ".$url."\n\n Если это были не вы, то мы советуем вам изменить ваш пароль!";

         mail($data['email'], 'Подтвердите действие!', $message);
         header('Location: /');
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Revon 1.0</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body style="background-image:url(https://sun9-46.userapi.com/s/v1/if2/GMvQeT59mnuUhn8EiLUUj2RfRpH2kVUwTQiztjCMkcRs23iA5d43SyUqy8gJfkK9YAEazd0gd9Wvuu68T9sxzgB8.jpg?size=1920x1080&quality=96&type=album); background-repeat:no-repeat; background-color:#FFFFFF">
    <form>
        <label>Почта</label>
        <input type="email" name="email" placeholder="Введите свой адрес почты">
        <button type="submit" class="reset-btn">Продолжить</button>
		<p>
		<div id="submit">
        <a href="/">Назад</a>
        </div>
		</p>
        <p class="msg none">Ошибка</p>
    </form>
    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>