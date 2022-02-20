<?php


$link = mysqli_connect('localhost', 'root', '', 'book1');
include 'logic.php';
$sql1="SELECT id, author from `authors`";
$result1 = mysqli_query($link1,$sql1);
if ($_SERVER["REQUEST_METHOD"] == "GET") $SO = $_GET['auth'];
if( isset($_GET['clearFilter']) )$SO= " ";
if (!$link) {
    echo 'Не могу соединиться с БД. Код ошибки: ' . mysqli_connect_errno() . ', ошибка: ' . mysqli_connect_error();
    exit;
}
?>
<?php
include 'header.html';

?>

<div class="main py-5">
    <div class="container text-center">
        <div style="background-color: dodgerblue;" class="card text-center" ><br>
            <form action="books.php" method="get">
                <div class="container text-center"  style="max-width: 1200px;">
                    <label>Фильтрация результата поиска</label><br>
                    <div class="mb-3">
                        <label>Фильтрация по стоимости:</label>
                        <input type="number" name="costFrom" placeholder="Цена от" value="" class="form-control">
                        <input type="number" name="costTo" placeholder="Цена до" value="" class="form-control mt-3">
                    </div>
                    <div class="mb-3">
                        <label>Фильтрация по автору:</label>
                        <select name="auth" class="form-control">
                            <option value= " " selected="">Выберите автора</option>
                            <?php
                            while($name1 = mysqli_fetch_assoc($result1))
                            {
                                ?>
                                <option value="<?php echo $name1['author'];?>"<?php if ($SO == $name1['author']) echo "selected"; ?>><?php echo $name1['author'];?></option>

                                <?php
                            }
                            ?>

                        </select>
                    </div>
                    <div class="mb-3">
                        <label>Фильтрация по описанию:</label>
                        <textarea class="form-control" placeholder="Введите описание" name="desc"></textarea>
                    </div>
                    <div class="mb-3">
                        <label>Фильтрация по названию:</label>
                        <input type="text" name="name" placeholder="Введите название" value="" class="form-control">
                    </div>
                    <input type="submit" name="filter" value="Применить фильтр" class="btn btn-outline-light me-2">
                    <input type="submit" name="clearFilter" value="Очистить фильтр" class="btn btn-outline-light me-2">
            </form><br>
        </div>
        <br>
    </div>
</div>
<div class="container text-center mt-3">
    <table class="table">
        <tbody>
        <tr>
            <th>Изображение</th>
            <th>Название</th>
            <th>Автор</th>
            <th>Описание</th>
            <th>Цена</th>
        </tr>
        <?php
        while($name = mysqli_fetch_assoc($result))
        {
            ?>
            <tr>
                <th scope="row"> <img src="cat_img/<?php echo $name['img_path'];?>" style="max-width: 150px;"></th>
                <td><?php   echo $name['name'];?>       </td>
                <td><?php   echo $name['author'];?>  </td>
                <td><?php   echo $name['description'];?>  </td>
                <td><?php   echo $name['cost'];?>  </td>
            </tr>
            <?php
        }

        ?>
        </tbody>
    </table>
</div>
</div>

<?php
include 'footer.html';
?>





    
  
  
  




