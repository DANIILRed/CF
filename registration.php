<?php

require "db.php";
session_start();
// Перемещение на страницу регистарции
header('location:login.php');
// Вход в базу данных
$con = mysqli_connect('localhost', 'root', '1111');
mysqli_select_db($con, 'userregistration');
// Присвоение значений
$name = $_POST['user'];
$email = $_POST['email'];
$pass = $_POST['password'];

$s = " select * from usertable where name = '$name'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);
// Проверка пользователя
if ($num == 1) {
    echo "Username Already Taken";
} else {
    $reg = "insert into usertable(name , email, password) values ('$name' , '$email', '$pass')";
    mysqli_query($con, $reg);
    echo " Registration Successful";
}

?>

