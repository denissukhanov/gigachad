<?php
session_start(); //запускаем сессию чтобы пользовать переменной session
if (!$_SESSION['user']) {
    header('Location: /');
}
?>
<?php
include 'header.html';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>

    <!-- Профиль -->

    <form>
        <h2 style="margin: 10px 0;"><?= $_SESSION['user']['full_name'] ?></h2> //на этой странице будет выводится информация о пользователе
        <a href="#"><?= $_SESSION['user']['email'] ?></a> //достаём эти данные из сессии обращаясь к юзер
        <a href="#"><?= $_SESSION['user']['interests'] ?></a>
        <a href="#"><?= $_SESSION['user']['birthday'] ?></a>
        <a href="#"><?= $_SESSION['user']['blood_group'] ?></a>
        <a href="#"><?= $_SESSION['user']['rezus'] ?></a>
        <a href="vendor/logout.php" class="logout">Выход</a>
    </form>

</body>
</html>