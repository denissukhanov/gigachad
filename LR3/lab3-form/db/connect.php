<?php
$connection = mysqli_connect('localhost', 'root', '', 'books');
if ($connection == false) {
    echo "Error!";
    echo mysqli_connect_errno();
    exit();
}
