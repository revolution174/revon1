<?php
    $connect = mysqli_connect('localhost', 'root', '', 'revon');

    if (!$connect) {
        die('Error connect to DB');
    }