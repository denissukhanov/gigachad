<?php
session_start();
include('header.php');
?>

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

<?php
if (isset($_SESSION['user']['login'])) { ?>
<div class="container">
    <h5 class="text-primary">Лучшие продажи раздела</h5>
    <?php
    include 'books.php';
    ?>
</div>
<?php } else { ?>
<p class="container text-danger">Авторизуйтесь или зарегестрируйтесь для получения возможности - фильтровать книги!</p>
<?php } ?>

<?php include('footer.php'); ?>
