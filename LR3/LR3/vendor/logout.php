<?php
session_start(); //запускаем сессию чтобы пользовать переменной session
unset($_SESSION['user']); //уничтожаем нашу переменную благодаря чему сессия заканчивается
header('Location: ../index.php'); //переадресация