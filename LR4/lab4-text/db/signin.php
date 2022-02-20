<?php
session_start();
require_once 'connect.php';

$login = $_POST['login'];
$password = md5($_POST['password']);

$check_user = mysqli_query($connection, "SELECT * FROM `users` WHERE `email` = '$login' AND `password` = '$password'");
if (mysqli_num_rows($check_user) > 0) {

    $user = mysqli_fetch_assoc($check_user); //преобразование в массив

    $_SESSION['user'] = [
        "id" => $user['id'],
        "login" => $user['email']
    ];

    header('Location: ../index.php');
} else {
    $_SESSION['message'] = 'Неверный логин или пароль';
    header('Location: ../auth.php');
}