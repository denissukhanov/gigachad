<?php
session_start();
require_once 'connect.php';

$full_name = $_POST['full_name'];
$date = $_POST['date'];
$address = $_POST['address'];
$sex = $_POST['sex'];
$hobby = $_POST['hobby'];
$link = $_POST['link'];
$blood = $_POST['blood'];
$factor = $_POST['factor'];
$email = $_POST['email'];
$password = $_POST['password'];
$password_confirm = $_POST['password_confirm'];

if ($password === $password_confirm && strlen($password) >= 6 ) {

    $password = md5($password);

    mysqli_query($connection, "INSERT INTO `users` (`id`, `full_name`, `date`, `address`, `sex`, `hobby`, 
                     `link`, `blood`, `factor`, `email`, `password`) VALUES 
                            (NULL, '$full_name', '$date', '$address', '$sex', '$hobby', '$link', '$blood', '$factor', '$email', '$password')");
    $_SESSION['message'] = 'Регистрация прошла успешно';
    header('Location: ../auth.php');

} else {
    $_SESSION['message'] = 'Пароли не совпадают или введен пароль менее 6 символов';
    header('Location: ../register.php');
}