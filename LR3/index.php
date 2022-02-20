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

    <!-- Форма авторизации -->

    <form>
        <label>ФИО</label>
        <input type="text" name="full_name" placeholder="Введите своё ФИО`">
        <label>Пароль</label>
        <input type="password" name="password" placeholder="Введите пароль">
        <button type="submit" class="login-btn">Войти</button>
        <p>
            У вас нет аккаунта? - <a href="/register.php">зарегистрируйтесь</a>!
        </p>
        <?php
        if ($_SESSION['message']) {
            echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';//выводит сообщение при ошибке входа
        }
        unset($_SESSION['message']);//удоляем сообщение при обновлении страницы
        ?>
    </form>

    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <script src="assets/js/main.js"></script>

</body>
</html>