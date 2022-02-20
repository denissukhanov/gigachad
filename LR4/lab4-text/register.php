<?php
session_start();
if (isset($_SESSION['user'])) {
    header('Location: index.php'); //если зайдёт авторизованный, то перенапрвит на главную страницу(index.php)
}

include ('header.php');
?>
<div class="container d-flex justify-content-center mt-4 mb-4">
    <form class="col-4" action="db/signup.php" method="post"> <!-- если жму зарегестрироваться, запускается action="db/signup.php" -->
        <h2>Регистрация</h2>
        <div class="mb-3">
            <label for="full_name" class="form-label">ФИО</label>
            <input type="text" class="form-control save" id="full_name" name="full_name" required>
        </div>
        <div class="mb-3">
            <label for="date" class="form-label">Дата рождения</label>
            <input type="text" class="form-control save" id="date" name="date" required>
        </div>
        <div class="mb-3">
            <label for="address" class="form-label">Адрес</label>
            <input type="text" class="form-control save" id="address" name="address" required>
        </div>
        <div class="mb-3">
            <label for="sex" class="form-label">Пол</label>
            <select id="sex" name="sex save" required>
                <option selected></option>
                <option>ж</option>
                <option>м</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="text" class="form-label">Интересы</label>
            <textarea class="form-control save" id="text" name="hobby" required></textarea>
        </div>
        <div class="mb-3">
            <label for="vk" class="form-label">Сссылка на профиль ВК</label>
            <input type="text" class="form-control save" id="vk" name="link" required>
        </div>
        <div class="mb-3">
            <label for="group" class="form-label">Группа крови</label>
            <select id="group" name="blood" class="save" required>
                <option selected>Группа крови</option>
                <option>0 (I)</option>
                <option>A (II)</option>
                <option>B (III)</option>
                <option>AB (IV)</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="factor" class="form-label">Резус фактор</label>
            <select id="factor" name="factor" class="save" required>
                <option selected>Резус фактор</option>
                <option>Положительный(+)</option>
                <option>Отрицательный(-)</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Почта(Логин)</label>
            <input type="email" class="form-control save" id="email" name="email" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Пароль</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <div class="mb-3">
            <label for="passwordConfirm" class="form-label">Подтвердите пароль</label>
            <input type="password" class="form-control" id="passwordConfirm" name="password_confirm" required>
        </div>
        <button type="submit" class="btn btn-primary">Зарегистрироваться</button>
        <a href="auth.php">Уже есть аккаунт?</a>

        <?php
         if (isset($_SESSION['message'])) {
             echo '<p class="text-danger"> ' . $_SESSION['message'] . '</p> ';
         
         unset($_SESSION['message']);
         }
        ?>

    </form>
</div>
<?php include ('footer.php'); ?>
