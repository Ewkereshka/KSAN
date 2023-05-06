<?php
require_once('db.php');
$login = $_POST['login'];
$password = $_POST['password'];



if(empty($login)|| empty ($password)){
    echo "Заполните все поля";
} else
{
    $sql - "INSERT INTO 'users' (login,pass) VALUES ('$login', '$password')";
   if ($conn -> query($sql) === TRUE){
    echo "Успешная авторизация";
   }
   else{
    echo "Ошибка: " . $conn->error;
   }
}



