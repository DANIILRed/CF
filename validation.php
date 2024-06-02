<?php

require "db.php";

session_start();
// Вход в базу данных
$con = mysqli_connect('localhost', 'root', '1111');
mysqli_select_db($con, 'userregistration');
// Присвоение значений
$name = $_POST['user'];
$pass = $_POST['password'];

$s = " select * from usertable where name = '$name' && password = '$pass'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);
// Проверка водимых значений
if ($num == 1) {
    $_SESSION['username'] = $name;
   header('location:account.php');
} else {
    header('location:login.php');
}

?>