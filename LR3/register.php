<?php
session_start(); //запускаем сессию чтобы пользовать переменной session
if ($_SESSION['user']) {
    header('Location: profile.php');
}
?>
<?php
include 'header.html';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация и регистрация</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>

<!-- Форма регистрации -->

<form action="vendor/signup.php" method="post">
    <label>ФИО</label>
    <input type="text" name="full_name" placeholder="Введите свое полное имя">
    <label>Дата рождения</label>
    <input type="date" name="date" placeholder="Введите дату рождения">
    <label>Почта</label>
    <input type="email" name="email" placeholder="Введите адрес своей почты">
    <label>Пол</label>
    <input type="text" name="sex" placeholder="Введите свой пол">
    <label>Интересы</label>
    <input type="text" name="interests" placeholder="Введите ваши интересы">
    <label>ФИО</label>
    <input type="text" name="link_vk" placeholder="ссылка на страницу вк">
    <label>Группа крови</label>
    <input type="text" name="blood-group" placeholder="Введите свое полное имя">
    <label>резус фактор</label>
    <input type="text" name="rezus" placeholder="Введите свое полное имя">
    <label>Пароль</label>
    <input type="password" name="password" placeholder="Введите пароль">
    <label>Подтверждение пароля</label>
    <input type="password" name="password_confirm" placeholder="Подтвердите пароль">
    <button type="submit" class="register-btn">Зарегистрироваться</button>
    <p>
        У вас уже есть аккаунт? - <a href="/">авторизируйтесь</a>!
    </p>
    <?php
    if ($_SESSION['message']) {
        echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';//сообщение при ошибке регистрации котороебудет удаляться при обновлении страницы
    }
    unset($_SESSION['message']);//удоляем сообщение при обновлении страницы
    ?>
</form>
<script src="assets/js/jquery-3.4.1.min.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>