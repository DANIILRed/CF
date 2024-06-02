<?php


try {
    $pdo = new PDO('mysql:host=localhost;dbname=cwa', 'root', '1111');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Запрос на выборку данных из таблицы shoese
    $result = $pdo->query("SELECT * FROM jersey");
    
    // Подготовка и выполнение запроса
    $products = array();
    
    // Обработка результатов запроса
    while ($productInfo = $result->fetch(PDO::FETCH_ASSOC)) {
        // Добавление данных в массив продуктов
        $products[] = $productInfo;
    }
} catch (PDOException $e) {
    echo "Ошибка: " . $e->getMessage();
}

/*
$sql = "
CREATE TABLE IF NOT EXISTS Jersey
(
 id int NOT NULL AUTO_INCREMENT,
 name varchar(255) NOT NULL,
 price varchar(255) NOT NULL,
 image varchar(255) NOT NULL,
 PRIMARY KEY(id)
) 
";

$sql = 
" INSERT INTO jersey (`name`, `price`, `image`) 
VALUES 
('Джерси Лос-Анджелес Лейкерс', '2300 руб.', 'img/block2/card4.png'),
('Джерси Миннесота Тимбервулвз', '3300 руб.', 'img/Jersey/jersey_2.avif'),
('Джерси Миннесоты Тимбервулвз Джордан', '3100 руб.', 'img/Jersey/jersey_3.avif'),
('Джерси Сан-Антонио Сперс', '2800 руб.', 'img/Jersey/jersey_5.avif'),
('Джерси Чикаго Буллз', '2500 руб.', 'img/Jersey/jersey_6.jpg'),
('Джерси Нью-Йорк Никс', '2900 руб.', 'img/Jersey/jersey_7.avif'),
('Джерси Шарлотт Хорнетс Джордан', '4100 руб.', 'img/Jersey/jersey_8.jpg'),
('Джерси Бренд Денвер Наггетс', '3600 руб.', 'img/Jersey/jersey_9.avif'),
('Джерси Орландо Мэджик', '3800 руб.', 'img/Jersey/jersey_10.avif')";

$res = $pdo->query($sql);

var_dump($res);
die();*/

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="css/Jersey.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

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
                    <a class="icon__link" href="">
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

    

    <!--Jersey__Catalog-->
    <div class="container">
        <h2 class="Jersey__header">Джерси</h2>
        <div class="Jersey__Catalog">
        <?php foreach ($products as $product): ?>
            <div class="Jersey__item1">
                <a href="Product1.html">
                    <img class="features__img1" src='<?= $product['image'] ?>' alt="" />
                </a>
                <p class="Jersey__title"><?= $product['name'] ?></p>
                <p class="Jersey__text"><?= $product['price'] ?></p>
            </div>
            <?php endforeach ?>

        </div>
    </div>


    <!--Slaider__Page-->
    <div class="container">
        <div class="Slaider__Page">
            <a class="Slaider__Page__number__choose" >1</a>
            <a class="Slaider__Page__number">2</a>
            <a class="Slaider__Page__number">3</a>
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


    


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <script src="js/script.js"></script>
    <script src="js/korz-01.js"></script>
</body>

</html>