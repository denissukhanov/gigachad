<?php
session_start();

if (isset($_SESSION['user'])) {
    header('Location: index.php');
}

include ('header.php');
?>
<div class="container d-flex justify-content-center mt-4 mb-4">
    <form class="col-4" action="db/signin.php" method="post">
        <h2>Вход</h2>
        <div class="mb-3">
            <label for="login" class="form-label">Логин</label>
            <input type="text" class="form-control" id="login" name="login">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Пароль</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>

        <button type="submit" class="btn btn-primary">Войти</button>
        <a href="register.php">Ещё нет аккаунта?</a>

        <?php
        if (isset($_SESSION['message'])) {
            echo '<p class="text-danger"> ' . $_SESSION['message'] . '</p> ';
        }
        unset($_SESSION['message']);
        ?>
    </form>
</div>
<?php include ('footer.php'); ?>
