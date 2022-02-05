<?php

session_start();//запускаем сессию чтобы пользовать переменной session
require_once 'connect.php';

$full_name = $_POST['full_name']; //получаем ФИО и пароль с формы регистрации
$password = md5($_POST['password']);//шифруем пароль чтобы при сравнении его с паролем в бд он находил правильный

$check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `full_name` = '$full_name' AND `password` = '$password'"); //запрос в БД где ищем людей с таким же логином и паролем что мы ввели
if (mysqli_num_rows($check_user) > 0) { //если пользователей с верным логином и паролем больше 0 мы авторизировались

    $user = mysqli_fetch_assoc($check_user);//перменная юзер равна массиву в котором хранится информация о пользователе указанная при регистрации

    $_SESSION['user'] = [ //создаём ключ юзер в котором будет хранится вся информация
        "id" => $user['id'],
        "full_name" => $user['full_name'],
        "blood_group" => $user['blood_group'],
        "email" => $user['email']
        "rezus" => $user['rezus']
        "date" => $user['date']
        "sex" => $user['sex']
        "link_vk" => $user['link_vk']
        "interests" => $user['interests']
        ];

        header('Location: ../profile.php'); //переадресация

    } else {
    $_SESSION['message'] = 'Не верный логин или пароль';//сообщение и переадресация в случае если логин и пароль в бд не найдены
    header('Location: ../index.php');
}
?>
