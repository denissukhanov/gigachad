<?php

session_start();//запускаем сессию чтобы пользовать переменной session
require_once 'connect.php';//подключаем коннект

$full_name = $_POST['full_name'];//все данные из регистр заносим в отдельные переменные
$login = $_POST['login'];
$email = $_POST['email'];
$password = $_POST['password'];
$password_confirm = $_POST['password_confirm'];

if ($password === $password_confirm) {//проверяем совпадают ли пароли

    $password = md5($password);//хэшируем пароль чтобы он не показывался в бд обычным

    mysqli_query($connect, "INSERT INTO `users` (`id`, `full_name`, `date`, `email`, `sex`, `interests`, `link_vk`, `blood-group`, `rezus`, `password`, ) VALUES (NULL, '$full_name', '$date', '$email', '$sex','$interests','$link_vk','$blood_group', '$rezus', '$password')"); //вносим наши значения, указанные при регистрации в базу данных

    $_SESSION['message'] = 'Регистрация прошла успешно!';
    header('Location: ../index.php');


} else {
    $_SESSION['message'] = 'Пароли не совпадают';
    header('Location: ../register.php');
}

?>