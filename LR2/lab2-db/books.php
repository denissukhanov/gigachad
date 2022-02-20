 <form method="get"> 
    <div class="mb-3"> 
        <label for="cost" class="form-label">Фильтрация по цене</label> 
        <input type="number" class="form-control save mb-2" id="cost" placeholder="Введите точную цену" name="price">
    </div>
    <div class="mb-3">
        <label for="search" class="form-label">Фильтрация по названию</label>
        <input type="text" class="form-control save" id="search" placeholder="Введите наименование товара" name="search">
    </div>
    <div class="mb-3">
        <label for="author" class="form-label">Фильтрация по автору</label>
        <select class="form-select save" id="author" name="author">
            <option selected></option>
            <?php
            $connection = mysqli_connect('localhost', 'root', '', 'books');
            $authors = mysqli_query($connection, "select authors.name_author from authors");

            while ($article = mysqli_fetch_assoc($authors)) { ?>
                <option><?php echo $article['name_author'] ?></option>
            <?php } ?>
        </select>
    </div>
    <div class="mb-3">
        <label for="text" class="form-label">Фильтрация по описанию</label>
        <input type="text" class="form-control save" id="text" placeholder="Введите описание товара" name="text"
               value="">
    </div>


    <button type="submit" class="btn btn-primary">Применить фильтр</button>
    <button type="submit" class="btn btn-danger" id="clearButton">Очистить фильтр</button>

</form>


<table class="table">
    <thead>
    <tr>
        <th scope="col">Изображение</th> 
        <th scope="col">Наименование</th>
        <th scope="col">Автор</th>
        <th scope="col">Описание</th>
        <th scope="col">Стоимость</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $connection = mysqli_connect('localhost', 'root', '', 'books');
    if ($connection == false) {
        echo "Error!";
        echo mysqli_connect_errno();
        exit();
    }

    
    
        @$price = $_GET['price'];
        @$search = $_GET['search'];
        @$author = $_GET['author'];
        @$text = $_GET['text'];
    
    

    $query = mysqli_query($connection, "select books.img_path, books.name, authors.name_author, books.description, books.cost 
from books 
inner join authors on books.id_author=authors.id
where books.name like '%$search%' and authors.name_author like '%$author%' and books.description like '%$text%' 
and books.cost like '%$price%'");

    while ($article = mysqli_fetch_assoc($query)) {
        ?>
        <tr>
            <td><img style="width: 200px;" src="inc/<?php echo $article['img_path'] ?>" alt="points"></td>
            <td><?php echo $article['name'] ?></td>
            <td><?php echo $article['name_author'] ?></td>
            <td><?php echo $article['description'] ?></td>
            <td><?php echo $article['cost'] ?></td>
        </tr>
    <?php } ?>
    </tbody>
</table>

<script src="script.js"></script>