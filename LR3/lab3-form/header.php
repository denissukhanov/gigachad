<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Лаб. 1</title>
</head>
<body>

<!--header-->
<div class="border-bottom bg-primary pt-2 pb-2">
    <div class="container">
        <div class="row d-flex align-items-center">
            <a href="#" class="col-3 text-light fw-bold text-decoration-none">
                Россия, Город М...
            </a>
            <a href="#" class="col-2 text-light text-decoration-none">
                Адреса магазинов
            </a>
            <a href="#" class="col-2 text-light text-decoration-none">
                Доставка и оплата
            </a>
            <a href="#" class="col-2 text-light text-decoration-none">
                Бонусная программа
            </a>
            <div class="col-3">
                <?php
                if (isset($_SESSION['user']['login'])) { ?>
                    Вы уже авторизованы как <h5><?= $_SESSION['user']['login'] ?></h5>
                    <a href="db/logout.php" class="row d-flex flex-row-reverse text-light fw-bold text-decoration-none">
                        Выйти
                    </a><?php } else { ?>
                <span>Вы не авторизованы</span>
                <a href="auth.php" class="row d-flex flex-row-reverse text-light fw-bold text-decoration-none">
                    Ввести логин и пароль
                </a>или
                <a href="register.php" class="row d-flex flex-row-reverse text-light fw-bold text-decoration-none">
                    Зарегистрироваться
                    <?php } ?>
            </div>
        </div>
    </div>
</div>

<nav class="navbar navbar-light bg-primary">
    <div class="container-fluid container">
        <a href="index.php">
            <img src="./images/main_logo_white.svg" alt="logo">
        </a>
        <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Поиск" aria-label="Search">
            <button class="btn btn-primary active text-light" type="submit">Искать</button>
        </form>
        <div>
            <div class="row">
                <div class="col">
                    <img src="./images/basket.svg" alt="basket">
                </div>
                <a href="#" class="col fs-6 text text-light text-decoration-none">
                    Корзина: 0
                </a>
            </div>
        </div>
    </div>
</nav>

<div class="border-bottom pt-2 pb-2 mb-4">
    <div class="container">
        <div class="row">
            <div class="btn-group col">
                <a href="#" class="dropdown-toggle text-dark fw-bold text-decoration-none" data-bs-toggle="dropdown"
                   aria-expanded="false">
                    Книги
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item fw-bold" href="#">Жанры</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">Художественная литература</a></li>
                    <li><a class="dropdown-item" href="#">Книги для детей</a></li>
                    <li><a class="dropdown-item" href="#">Образование</a></li>
                </ul>
            </div>
            <div class="btn-group col">
                <a href="#" class="dropdown-toggle text-dark fw-bold text-decoration-none" data-bs-toggle="dropdown"
                   aria-expanded="false">
                    Канцтовары
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Бумажные изделия</a></li>
                    <li><a class="dropdown-item" href="#">Галантерея</a></li>
                    <li><a class="dropdown-item" href="#">Прочие канцтовары</a></li>
                    <li><a class="dropdown-item" href="#">Упаковка</a></li>
                </ul>
            </div>
            <div class="btn-group col">
                <a href="#" class="dropdown-toggle text-dark fw-bold text-decoration-none" data-bs-toggle="dropdown"
                   aria-expanded="false">
                    Сувениры
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Сувениры к празднику</a></li>
                    <li><a class="dropdown-item" href="#">Дом, Быт, Декор</a></li>
                    <li><a class="dropdown-item" href="#">Игры и Игрушки</a></li>
                    <li><a class="dropdown-item" href="#">Личные вещи</a></li>
                </ul>
            </div>
            <div class="btn-group col">
                <a href="#" class="dropdown-toggle text-dark fw-bold text-decoration-none" data-bs-toggle="dropdown"
                   aria-expanded="false">
                    Игры и игрушки
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Игры</a></li>
                    <li><a class="dropdown-item" href="#">Игрушки</a></li>
                </ul>
            </div>
            <div class="btn-group col">
                <a href="#" class="dropdown-toggle text-dark fw-bold text-decoration-none" data-bs-toggle="dropdown"
                   aria-expanded="false">
                    Творчество
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Наборы для детского творчества</a></li>
                    <li><a class="dropdown-item" href="#">Наборы для взрослого творчества</a></li>
                    <li><a class="dropdown-item" href="#">Заготовки</a></li>
                    <li><a class="dropdown-item" href="#">Инструменты и приспособления</a></li>
                </ul>
            </div>
            <div class="btn-group col">
                <a href="#" class="dropdown-toggle text-dark fw-bold text-decoration-none" data-bs-toggle="dropdown"
                   aria-expanded="false">
                    Распродажа
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Художественная литература</a></li>
                    <li><a class="dropdown-item" href="#">Книги для детей</a></li>
                    <li><a class="dropdown-item" href="#">Образование</a></li>
                    <li><a class="dropdown-item" href="#">Наука и техника</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--end_header-->



