<?php
require "db.php";
$data = $_GET;

if($_SESSION['user'] !=NULL) header('Location:index.html');
if($data['key'] ==NULL) header('Location:index.html');


$user = R::findOne('users', 'change_key = ?', array($data['key']));
if(!$user) header('Location:index.html');


if(isset($data['change'])){
    $user->password = password_hash($data['password'], PASSWORD_DEFAULT);
    $user->change_key = NULL;
    R::store($user);
    header('Location:signin.php');
}
?>


<html>
<!--http://localhost/userregistration/%D0%9A%D1%83%D1%80%D1%81%D0%B0%D1%87/login.php !-->

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="login.css" />
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
                    <a class="nav__link" href="#">O нас</a>
                    <a class="nav__link" href="#">Каталог</a>
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
                    <a class="icon__link" href="">
                        <img src="img/account.png" alt="" />
                    </a>
                    <a class="icon__link" href="">
                        <img src="img/like.png" alt="" />
                    </a>
                    <a class="icon__link" href="">
                        <img src="img/Corzina.png" alt="" />
                    </a>
                </nav>
            </div>
        </div>

    </header>


    <!--Login-->

    <div class="container">
        <div class="col-md-6 login-left">
            <h2 class="header_log" >Новый пароль</h2>
            <form action="newpass.php" method="get">
                <div class="input-group">
                    
                        <input type="hidden" name="key" value="<?php echo $data['key'];?>">
                    
                    <div class="form-group" >
                        <input type="text" placeholder="password" name="password" class="form-control" required>
                    </div>
                    
                </div>
                <div class="btn-field">
                    <button ><a href="signin.php">Войти</a></button>
                    <button  class="disable" type="submit" name="change">Изменить пароль</a></button>
                </div>
            </form>
        </div>


       

    </div>


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

</html>