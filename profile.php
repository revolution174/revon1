<?php
session_start();
if (!$_SESSION['user']) {
    header('Location: /');
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Revom 1.0</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
<body style="background-image:url(https://sun9-46.userapi.com/s/v1/if2/GMvQeT59mnuUhn8EiLUUj2RfRpH2kVUwTQiztjCMkcRs23iA5d43SyUqy8gJfkK9YAEazd0gd9Wvuu68T9sxzgB8.jpg?size=1920x1080&quality=96&type=album); background-repeat:no-repeat; background-color:#FFFFFF">

    <form>
        <img src="<?= $_SESSION['user']['avatar'] ?>" width="200" alt="">
        <h2 style="margin: 10px 0;"><?= $_SESSION['user']['full_name'] ?></h2>
        <a href="#"><?= $_SESSION['user']['email'] ?></a>
        <a href="vendor/logout.php" class="logout">Выход</a>
    </form>

</body>
</html>