<?php
    require_once "logic/text_logic.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>LR4</title>

</head>

<body>

<h1 class="text-center">Обработчик текста</h1>

<form class="container w-50 h-50 mt-3" action="text.php" method="post">

    <div>
        <div class="text-center">
            <textarea class="form-control" name="text" rows="10"><?=htmlspecialchars($html ?? ''); ?></textarea>
        </div>
    </div>

    <div class="text-center mt-3">
        <button class="btn btn-primary center-block" type="submit">Отправить</button>
        <a href="index.php">
            <button class="btn btn-warning center-block" type="button">На главную</button>
        </a>
    </div>

</form>

<div class="container mt-3">
    <h2>Варианты заданий</h2>
    <p>Задание 3. Вывести прямую речь : </p>

    <div class="container bg-light">

        <?php
        if (isset($directSpeech) and count($directSpeech) > 0 and count($directSpeech[0]) > 0) //существует ли в массиве элементы с прямой речью, то вывести
        {
            for($i = 0; $i < count($directSpeech[0]) ; $i++) :
                ?>
                <p><?=$directSpeech[0][$i]?></p>
            <?php
            endfor;
        }
        else if ($_SERVER['REQUEST_METHOD'] == 'POST' and empty($html))
        {
            ?>
            <p>Вы ничего не ввели</p>
            <?php
        }
        else if ($_SERVER['REQUEST_METHOD'] == 'POST' and !empty($html))
        {
            ?>
            <p>В данном тексте отсутствует прямая речь</p>
            <?php
        }
        ?>

    </div>

    <p>
        Задание 9. Удалить лишние пробелы между дефисом в местоимениях и наречиях (напр.: кто- то, заменится на кто-то).
        Удаление пробелов перед точками, запятыми и двоеточиями в тексте.
        Добавить пробел после этих знаков препинания (если его нет).
    </p>

    <p>Задание 14. Автоматически сформировать "указатель" ссылок : </p>

    <?php
        if (isset ($linksText) and count($linksText) > 0){
            for($i = 0; $i < count($linksText) ; $i++) {
    ?>
                <a href="#<?=$i?>">
                    <p><?=($i+1) . ") " . $linksText[$i]?></p>
                </a>
    <?php
            }
        }
    ?>

    <p>Задание 19. Чистка форматирования .</p>
</div>

<div class="container mt-3">
    <h2>Введенный текст после преобразования</h2>
</div>

<div class="container bg-light">
    <?php
    if (isset($result_html))
        echo $result_html;
    ?>
</div>

</body>

</html>