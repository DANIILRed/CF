<?php
require "libs/rb.php";
R::setup( 'mysql:host=localhost;dbname=cwa', 'root', '1111' ); //for both mysql or mariaDB

$site_url = "http://localhost/userregistration/%D0%9A%D1%83%D1%80%D1%81%D0%B0%D1%87/index.html";

session_start();


function showError($errors){
    return array_shift($errors);
}




?>