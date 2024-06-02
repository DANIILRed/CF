
<?php



try {
    $pdo = new PDO('mysql:host=localhost;dbname=cwa', 'root', '1111');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Запрос на выборку данных из таблицы shoese
    $result = $pdo->query("SELECT * FROM shoese");
    
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

    

    <!--Shose__Catalog-->
    <div class="container">
        <h2 class="Jersey__header">Обувь</h2>
        <div class="Jersey__Catalog">
        
       <?php foreach ($products as $product): ?>
        <div class="Jersey__item1">
        <a href="Product_shoese_1.html">
            <img class="features__img1" src='<?= $product['image'] ?>' alt="" />
        </a>
        <p class="Jersey__title"><?= $product['name'] ?></p>
        <p class="Jersey__text"><?= $product['price'] ?></p>
        </div>
        <?php endforeach ?>
        
        </div>
      </div>
      <!--Shose__Catalog-->
   

      
      

              <!--  <a href="Product_shoese_1.html">
                    <img class="features__img1" src="img/Shose/shose_catalog_1_1.avif" alt="" />
                </a>
                <p class="Jersey__title">Nike Sabrina 1 "Magnetic"</p>
                <p class="Jersey__text">9300 руб.</p>
            </div>

            <div class="Jersey__item1">
                <a href="Product_shoese_2.html">
                    <img class="features__img1" src="img/Shose/shose_catalog_1_1.avif" alt="" />
                </a>
                <p class="Jersey__title">Adidas Ultraboost</p>
                <p class="Jersey__text">8500 руб.</p>
            </div>

           <--! <div class="Jersey__item1">
                <a href="Product_shoese_2.html">
                    <img class="features__img1" src="img/Shose/shose_catalog_1_1.avif" alt="" />
                </a>
                <p class="Jersey__title">Adidas Harden Vol. 5</p>
                <p class="Jersey__text">8500 руб.</p>
            </div>
     
            <div class="Jersey__item1">
                <a href="Product_shoese_3.html">
                    <img class="features__img1" src="img/Shose/shose_catalog_1_1.avif" alt="" />
                </a>
                <p class="Jersey__title">Under Armour Curry 8</p>
                <p class="Jersey__text">7800 руб.</p>
            </div>
    
           
            <div class="Jersey__item1">
                <a href="Product_shoese_4.html">
                    <img class="features__img1" src="img/Shose/shoes_5.jpg" alt="" />
                </a>
                <p class="Jersey__title">Jordan Why Not Zer0.4</p>
                <p class="Jersey__text">9200 руб.</p>
            </div>
            <div class="Jersey__item1">
                <a href="Product_shoese_5.html">
                    <img class="features__img1" src="img/Shose/shose_catalog_1_1.avif" alt="" />
                </a>
                <p class="Jersey__title">Puma Clyde All-Pro</p>
                <p class="Jersey__text">7000 руб.</p>
            </div>
            
           
            <div class="Jersey__item1">
                <a href="Product_shoese_6.html">
                    <img class="features__img1" src="img/Shose/shose_catalog_1_1.avif" alt="" />
                </a>
                <p class="Jersey__title">New Balance Kawhi 2</p>
                <p class="Jersey__text">7500 руб.</p>
            </div>    
            <div class="Jersey__item1">
                <a href="Product_shoese_7.html">
                    <img class="features__img1" src="img/Shose/shose_catalog_1_1.avif" alt="" />
                </a>
                <p class="Jersey__title">Adidas Dame 8</p>
                <p class="Jersey__text">8200 руб.</p>
            </div>
            
            
            <div class="Jersey__item1">
                <a href="Product_shoese_8.html">
                    <img class="features__img1" src="img/Shose/shose_catalog_1_1.avif" alt="" />
                </a>
                <p class="Jersey__title">Under Armour Curry 9</p>
                <p class="Jersey__text">8900 руб.</p>
            </div>
            <div class="Jersey__item1">
                <a href="Product_shoese_9.html">
                    <img class="features__img1" src="img/Shose/shose_catalog_1_1.avif" alt="" />
                </a>
                <p class="Jersey__title">Nike LeBron 19</p>
                <p class="Jersey__text">9500 руб.</p>
            </div>
            
          
            <div class="Jersey__item1">
                <a href="Product_shoese_10.html">
                    <img class="features__img1" src="img/Shose/shose_catalog_1_1.avif" alt="" />
                </a>
                <p class="Jersey__title">Jordan Zion 3</p>
                <p class="Jersey__text">8800 руб.</p>
            </div>
            
            
            <div class="Jersey__item1">
                <a href="Product_shoese_11.html">
                    <img class="features__img1" src="img/Shose/shose_catalog_1_1.avif" alt="" />
                </a>
                <p class="Jersey__title">Adidas Harden Vol. 6</p>
                <p class="Jersey__text">8200 руб.</p>
            </div>
        </div>
    </div>
    -->

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