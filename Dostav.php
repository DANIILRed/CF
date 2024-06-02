<?php


/*// Вход в базу данных
$mysgl= new mysqli('localhost', 'root', '1111', 'userregistration');
$mysgl->query("INSERT INTO `dannie` (`Имя`, `Фамилия`, `Отчество`,`Город`, `Телефон`, `Адрес`, `'Способдоставки`)
VALUES('$Name', '$Familia', '$Otchestvo', '$City', '$Phone', '$Adress', '$Dostavka')");

// Присвоение значений
$Name = filter_var(trim($_POST['Name']),
FILTER_SANITIZE_STRING);

$Familia = filter_var(trim($_POST['familia']),
FILTER_SANITIZE_STRING);

$Otchestvo = filter_var(trim($_POST['otchestvo']),
FILTER_SANITIZE_STRING);

$City = filter_var(trim($_POST['city']),
FILTER_SANITIZE_STRING);

$Phone = filter_var(trim($_POST['number']),
FILTER_SANITIZE_STRING);

$Dostavka = filter_var(trim($_POST['dostavka']),
FILTER_SANITIZE_STRING);

$Adress = filter_var(trim($_POST['adress']),
FILTER_SANITIZE_STRING);

// Проверка условий
if(mb_strlen($Name) < 1 || mb_strlen($Name) > 90) {
    echo "Не допустимая длина";
    exit();
} else if(mb_strlen($Familia) < 2 || mb_strlen($Familia) > 90) {
    echo "Не допустимая Фамилии";
    exit();
} else if(mb_strlen($Otchestvo) < 3 || mb_strlen($Otchestvo) > 90) {
    echo "Не допустимая Отчетсва";
    exit();
}
else if(mb_strlen($City ) < 3 || mb_strlen($City) > 90) {
    echo "Не допустимый город";
    exit();
}
else if(mb_strlen($Phone) < 10 || mb_strlen($Phone) > 90) {
    echo "Не допустимый Номер Телефона";
    exit();
}else if(mb_strlen($Dostavka) <  5 || mb_strlen($Dostavka) > 90) {
    echo "Не допустимый способ Доставки";
    exit();
}else if(mb_strlen($Adress) < 10 || mb_strlen($Adress) > 90) {
    echo "Не допустимый Адресс";
    exit();
}



$mysgl->close();
// Перемещение на страницу
header('Location: http://localhost/userregistration/Курсач/Dostavka.php');
*/

?> 

