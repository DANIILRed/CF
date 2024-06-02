<?php

require "db.php";

unset($_SESSION['user']);

session_start();
//session_destroy();

header('location:signin.php');

?>