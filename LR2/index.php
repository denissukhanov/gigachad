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
        <div class="row">
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
            <a href="#" class="col-3 d-flex flex-row-reverse text-light fw-bold text-decoration-none">
                Войти
            </a>
        </div>
    </div>
</div>

<nav class="navbar navbar-light bg-primary">
    <div class="container-fluid container">
        <img src="./images/main_logo_white.svg" alt="logo">
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

<!--book-->
<div class="container pt-4">
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page"><a href="#" class="text-secondary">Книжный
                магазин</a></li>
            <li class="breadcrumb-item active text-secondary" aria-current="page"><a href="#" class="text-secondary">Книги</a>
            </li>
            <li class="breadcrumb-item active text-secondary" aria-current="page"><a href="#" class="text-secondary">Наука
                и техника</a></li>
            <li class="breadcrumb-item active text-secondary" aria-current="page"><a href="#" class="text-secondary">Технические
                науки</a></li>
            <li class="breadcrumb-item active text-secondary" aria-current="page"><a href="#" class="text-secondary">Информатика.
                Компьютерная техника</a></li>
            <li class="breadcrumb-item"><a href="#">Программирование</a></li>
        </ol>
    </nav>
    <div class="container mt-4">
        <div class="row pt-4">
            <figure class="figure col-sm-4">
                <img src="./images/2838218_detail.jpg" class="figure-img img-fluid rounded" alt="...">
            </figure>
            <div class="col-sm-8">
                <h2>Web на практике. CSS, HTML, JavaScript, MySQL, PHP для fullstack-разработчиков</h2>
                <a href="#">Кириченко А., Никольский А., Дубовик Е.</a>
                <div class="row">
                    <div class="col">
                        <div class="row mt-4 pt-4">
                            <div class="col-sm-4">
                                <p class="text-secondary">ID товара</p>
                            </div>
                            <div class="col-sm-6">
                                <p>2838218</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <p class="text-secondary">Издательство</p>
                            </div>
                            <div class="col-sm-6">
                                <p>Наука и Техника СПб</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <p class="text-secondary">Год издания</p>
                            </div>
                            <div class="col-sm-6">
                                <p>2021</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 mt-4">
                        <div class="card w-100 bg-success text-dark bg-opacity-25">
                            <div class="card-body">
                                <p class="card-text text-success">В наличии: <span class="text-dark">8 шт.</span></p>
                                <h5 class="card-title fw-bold">764 ₽</h5>
                                <div class="d-flex flex-column mt-4">
                                    <a href="#" class="btn btn-primary mb-2">Купить</a>
                                    <a href="#" class="btn btn-light">Закладки</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <p class="text-start text-secondary">Аннотация</p>
            <p class="text-start col-8">Разработка многофункционального сайта, как правило, требует нескольких разных
                специалистов, но в данной книге мы расскажем, как все сделать самому! Fullstack-разработчик — это
                разработчик, который обладает знаниями всех технологий (полным стеком) для создания полноценных
                многофункциональных веб-сайтов. Данная книга посвящена Fullstack-разработке сайта. </p>
        </div>
    </div>
</div>
<!--end_book-->

<!--new-->
<div class="container mt-4 pb-4">
    <div class="d-flex justify-content-between mb-4">
        <h5 class="text-primary">Новинки раздела</h5>
        <a href="#">Смотреть все</a>
    </div>
    <div class="d-flex justify-content-center flex-wrap">
        <div class="card m-2" style="width: 15rem;">
            <img src="./images/2878104_preview.jpg" class="p-4 mx-auto" alt="..." style="height: 15rem; width: 12rem;">
            <div class="card-body">
                <h5 class="card-title">Писать нельзя молчать</h5>
                <p class="card-text text-secondary">Окунев Ю.</p>
                <p class="card-text fw-bold">478 ₽</p>
                <a href="#" class="btn btn-primary">Купить</a>
            </div>
        </div>

        <div class="card m-2" style="width: 15rem;">
            <img src="./images/2894837_preview.jpg" class="p-4 mx-auto" alt="..." style="height: 15rem; width: 12rem;">
            <div class="card-body">
                <h5 class="card-title">Тайная жизнь ветеринара</h5>
                <p class="card-text text-secondary">Коулэм Р.</p>
                <p class="card-text fw-bold">490 ₽</p>
                <a href="#" class="btn btn-primary">Купить</a>
            </div>
        </div>

        <div class="card m-2" style="width: 15rem;">
            <img src="./images/2895091_preview.jpg" class="p-4 mx-auto" alt="..." style="height: 15rem; width: 12rem;">
            <div class="card-body">
                <h5 class="card-title">Планета муравьев</h5>
                <p class="card-text text-secondary">Уилсон Э.</p>
                <p class="card-text fw-bold">491 ₽</p>
                <a href="#" class="btn btn-primary">Купить</a>
            </div>
        </div>

        <div class="card m-2" style="width: 15rem;">
            <img src="./images/2783642_preview.jpg" class="p-4 mx-auto" alt="..." style="height: 15rem; width: 12rem;">
            <div class="card-body">
                <h5 class="card-title">Голос земли. Легендарный бестселлер</h5>
                <p class="card-text text-secondary">Уолл Киммерер Р.</p>
                <p class="card-text fw-bold">734 ₽</p>
                <a href="#" class="btn btn-primary">Купить</a>
            </div>
        </div>
    </div>
</div>
<!--end_new-->

<div class="container">
    <h5 class="text-primary">Лучшие продажи раздела</h5>
    <?php
    include 'books.php';
    ?>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>
</html>
