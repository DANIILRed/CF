<?php

require "db.php";
$data =  $_POST;
$showError = false;

if(isset($data['Dostavka'])){
    $errors = array();
    $showError = true;

    if(trim($data['Name']) == '')
    {
        $errors[] = 'Укажите Имя!';
    }
    if(trim($data['familia']) == '')
    {
        $errors[] = 'Укажите Фамилию!';
    }
    if(trim($data['otchestvo']) == '')
    {
        $errors[] = 'Укажите Отчество!';
    }
    if(trim($data['city']) == '')
    {
        $errors[] = 'Укажите Город!';
    }
    if(trim($data['number']) == '')
    {
        $errors[] = 'Укажите Номер телефона!';
    }
    if(trim($data['dostavka']) == '')
    {
        $errors[] = 'Укажите Способ доставки!';
    }
    if(trim($data['adress']) == '')
    {
        $errors[] = 'Укажите Адресс!';
    }

    
    if(empty($errors)){
       


        $user = R::dispense('dostavka');
        $user->Name = $data['Name'];
        $user->familia = $data['familia'];
        $user->otchestvo = $data['otchestvo'];
        $user->city = $data['city'];
        $user->number = $data['number'];
        $user->dostavka= $data['dostavka'];
        $user->adress= $data['adress'];
        R::store($user);
    }
}
?>

<html>

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="css/Dostava.css" />
    

</head>

<body>
    <!--Header-->
    <header class="header" id="header">
        <div class="container">
            <div class="header__inner">
                <div class="header__logo">
                    <a class="logo" href="index.html">
                        <img class="logo-img" src="img/Logo.png" alt="logo" />
                    </a>
                </div>

                <nav class="nav">
                    <a class="nav__link" href="index.html">O нас</a>
                    <a class="nav__link" href="Catalog.html">Каталог</a>
                    <a class="nav__link" href="#">Новая коллекция</a>
                    <a class="nav__link" href="#">Блог</a>
                </nav>

                <div class="Search__box">
                    <input class="Search__text " type="text" name="" placeholder="Поиск">
                    <a class="Search__btn" href="#">
                        <img src="img/Search.png">
                    </a>

                </div>

                <nav class="icon">
                    <a class="icon__link" href="account.php">
                        <img src="img/account.png" alt="" />
                    </a>
                    <a class="icon__link" href="">
                        <img src="img/like.png" alt="" />
                    </a>
                    <a class="icon__link" href="Korzina.html">
                        <img src="img/Corzina.png" alt="" />
                        <span>0</span>
                    </a>
                </nav>
            </div>
        </div>

    </header>

    <!--Dannie-->
    <div class="container">
        <div class="Dannie">
            <h2 class="Dannie__header">Ваши Данные</h2>
            <form class="Dannie__f" action="Dostavka.php" method="post">
                <div class="form-group">
                  <p class="Dannie__text">Имя</p>
                  <input type="text" name="Name" class="form-control" id="inputName" placeholder="Введите ваше имя" required>
                </div>
                <div class="form-group">
                    <p class="Dannie__text">Фамилию</p>
                  <input type="text" name="familia" class="form-control" id="inputSurname" placeholder="Введите вашу фамилию" required>
                </div>
                <div class="form-group">
                    <p class="Dannie__text">Отчество</p>
                  <input type="text" name="otchestvo" class="form-control" id="inputPatronymic" placeholder="Введите ваше отчество" require>
                </div>
                <div class="form-group">
                    <p class="Dannie__text">Город</p>
                  <input type="text" name="city" class="form-control" id="inputCity" placeholder="Введите ваш город" require>
                </div>
                <div class="form-group">
                    <p class="Dannie__text">Телефон</p>
                  <input type="text" name="number" class="form-control" id="inputPhone" placeholder="Введите ваш номер телефона" require>
                </div>
                <h2 class="Dannie__header">Доставка</h2>
                <div class="form-group">
                  <p class="Dannie__text">Способ</p>
                  <input type="text" name="dostavka" class="form-control" id="inputName" placeholder="Введите ваше" required>
                </div>
                <div class="form-group">
                    <p class="Dannie__text">Адрес</p>
                  <input type="text" name="adress" class="form-control" id="inputSurname" placeholder="Введите ваш адрес" required>
                </div>

                <button type="submit" name="Dostavka" class="Oplata">Оплатить</button>

              </form>
              <p><?php if($showError) { echo showError($errors); } ?></p>
            </div>
        </div>
    </div>

<!--http://localhost/userregistration/Курсач/Dostavka.php-->
   

    <!--Footer-->

    <div class="Footer">

        <div class="container3">
            <a href="index.html">
                <h1 class="Footer__header">BasketShop</h1>
            </a>
            <div class="Footer__item">
                <div class="Footer__menu__left">
                    <a><a>
                            <p class="Footer__menu__header">Аккаунт</p>
                        </a>
                        <a>
                            <p class="Footer__menu__text">Профиль</p>
                        </a></a>
                    <a>
                        <p class="Footer__menu__text">Заказы</p>
                    </a></a>
                    <a>
                        <p class="Footer__menu__text">Корзина</p>
                    </a></a>
                </div>

                <div class="Footer__menu__center">
                    <a>
                        <p class="Footer__menu__header">Коллекция</p>
                    </a>
                    <a>
                        <p class="Footer__menu__text">Men</p>
                    </a>
                    <a>
                        <p class="Footer__menu__text">Women</p>
                    </a>
                    <a>
                        <p class="Footer__menu__text">Kids</p>
                    </a>
                    <a>
                        <p class="Footer__menu__text">Скидки</p>
                    </a>
                </div>

                <div class="Footer__menu__right">
                    <a>
                        <p class="Footer__menu__header">О нас</p>
                    </a>
                    <a>
                        <p class="Footer__menu__text">Контакты</p>
                    </a>
                    <a>
                        <p class="Footer__menu__text">Блог</p>
                    </a>
                    <a>
                        <p class="Footer__menu__text">FAQ</p>
                    </a>
                </div>

                <div class="Footer__icon">
                    <a>
                        <img class="Footer__icon__social" src="img/Footer/iconfacebook.png">
                    </a>
                    <a>
                        <img class="Footer__icon__social" src="img/Footer/iconVK.png">
                    </a>
                    <a>
                        <img class="Footer__icon__social" src="img/Footer/iconinstagram.png">
                    </a>
                    <a>
                        <img class="Footer__icon__social" src="img/Footer/icontwitter.png">
                    </a>
                </div>
            </div>

        </div>
    </div>


    <!--End-->
    <div class="End">
        <div class="container2">
            <div class="End__item">
                <a class="End__menu" href="#">Юридическая информация</a>
                <a class="End__menu" href="#">Политика конфиденциальности</a>
                <a class="End__menu1" href="#">@2022 BasketShop.ru</a>
            </div>
        </div>
    </div>


</body>

<script src="js/korz-01.js"></script>

</html>