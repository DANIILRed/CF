// Создание массива для товара
let carts = document.querySelectorAll('.btn-in_bag');
let carts2 = document.querySelectorAll('.btn-in_bag-2');
let carts3 = document.querySelectorAll('.btn-in_bag-3');
let carts4 = document.querySelectorAll('.btn-in_bag-4');
let carts5 = document.querySelectorAll('.btn-in_bag-5');
let carts6 = document.querySelectorAll('.btn-in_bag-6');
// Информация о товаре в массиве
let products = [
    {
        name: 'Джерси Бостон Селтикс Джордан',
        tag: 'Артикул: WF880',
        img: 'img/Product/Boston.png',
        price: 3600,
        inCart: 0

    }



];

let products2 = [
    {
        name: 'Джерси Голден Стэйт Уорриорз',
        tag: 'Артикул: WF879',
        img: 'img/Product/Golden_State.png',
        price: 3400,
        inCart: 0
    }

];

let products3 = [
    {
        name: 'Джерси Феникс Санз',
        tag: 'Артикул: WF881',
        img: 'img/Product/Suns.png',
        price: 2900,
        inCart: 0
    }

];

let products4 = [
    {
        name: 'Джерси Лос-Анджелес Лейкерс',
        tag: 'Артикул: WF882',
        img: 'img/Product/Lakers.png',
        price: 3100,
        inCart: 0
    }

];

let products5 = [
    {
        name: 'Футболка Голден Стэйт',
        tag: 'Артикул: BL345',
        img: 'img/Product/T-short-Golden.png',
        price: 1400,
        inCart: 0
    }

]

let products6 = [
    {
        name: 'Nike Sabrina 1 "Magnetic"',
        tag: 'Артикул: WF867',
        img: 'img/Shose/shose_catalog_1_1.avif',
        price: 9800,
        inCart: 0
    }
]

// Нахождение товара в массиве при нажатии
for (let i = 0; i < carts.length; i++) {
    carts[i].addEventListener('click', () => {
        cartNumbers(products[i]);
        totalCost(products[i]);
    })
};

for (let i = 0; i < carts2.length; i++) {
    carts2[i].addEventListener('click', () => {
        cartNumbers(products2[i]);
        totalCost(products2[i]);
    })
};

for (let i = 0; i < carts3.length; i++) {
    carts3[i].addEventListener('click', () => {
        cartNumbers(products3[i]);
        totalCost(products3[i]);
    })
};
for (let i = 0; i < carts4.length; i++) {
    carts4[i].addEventListener('click', () => {
        cartNumbers(products4[i]);
        totalCost(products4[i]);
    })
};
for (let i = 0; i < carts5.length; i++) {
    carts5[i].addEventListener('click', () => {
        cartNumbers(products5[i]);
        totalCost(products5[i]);
    })
};
for (let i = 0; i < carts6.length; i++) {
    carts6[i].addEventListener('click', () => {
        cartNumbers(products6[i]);
        totalCost(products6[i]);
    })
};

// Присвоение номера для товара
function onLoadCartNumbers() {

    let productNumbers = localStorage.getItem('cartNumbers');

    if (productNumbers) {
        document.querySelector('.icon span').textContent = productNumbers;
    }
}

function cartNumbers(product) {

    let productNumbers = localStorage.getItem('cartNumbers');

    productNumbers = parseInt(productNumbers);

    if (productNumbers) {
        localStorage.setItem('cartNumbers', productNumbers + 1);
        document.querySelector('.icon span').textContent = productNumbers + 1;
    } else {
        localStorage.setItem('cartNumbers', 1);
        document.querySelector('.icon span').textContent = 1;
    }

    setItem(product);
}
// Опредедение количество товара
function setItem(product) {
    let cartItems = localStorage.getItem('productsInCart');
    cartItems = JSON.parse(cartItems);


    if (cartItems != null) {


        if (cartItems[product.tag] == undefined) {
            cartItems = {
                ...cartItems,
                [product.tag]: product


            }
        }
        cartItems[product.tag].inCart += 1;
    } else {
        product.inCart = 1;
        cartItems = {
            [product.tag]: product
        }

    }

    localStorage.setItem("productsInCart", JSON.stringify
        (cartItems));
}
// Расчет цены товара
function totalCost(product) {
    let cartCost = localStorage.getItem('totalCost');

    console.log("jkkjksfsd", cartCost);
    console.log(typeof cartCost);

    if (cartCost != null) {
        cartCost = parseInt(cartCost);
        localStorage.setItem("totalCost", cartCost + product.price);
    } else {
        localStorage.setItem("totalCost", product.price);
    }

}

// Занесения товара находящийся в корзине в базу данных 
function displayCart() {
    let cartItems = localStorage.getItem("productsInCart");
    cartItems = JSON.parse(cartItems)
    let productContainer = document.querySelector("#card");
    let cartCost = localStorage.getItem('totalCost');
    console.log(cartItems);
    if (cartItems && productContainer) {
        productContainer.innerHTML = '';
        Object.values(cartItems).filter(item => item.tag.startsWith('Артикул: WF8')).map(item => {
            productContainer.innerHTML += `
            <div class="container">
        <section id="card" class="section-p1">
            <table width="100%">
                
                <tbody>
                    <tr>
                    <td>
    <button class="remove-btn" onclick="removeItem('${item.tag}')">✖</button>
</td>
                        <td><img class="img_korzina" src="${item.img}" ></td>
                        <td >${item.name}</td>
                        <td>${item.price}руб.</td>
                        <td><input type="number" value="${item.inCart}"></input></td>
                        <td>${item.inCart * item.price}руб.</td>
                    </tr>
            
                </tbody>
            </table>
        </section>
    </div>
          
      `;
        });
        productContainer.innerHTML += `
        <div class="container">
        <section id="card-add" class="section-p2">
            <div id="coupon">
                <h3>Воспользуйтесь купоном</h3>
                <div>
                    <input type="text" placeholder="Введите ваш купон">
                    <button class="normal">Применить</button>
                </div>
            </div>

            <div id="subtotal">
                <h3>Оформление заказа</h3>
                <table>
                    <tr>
                        <td>Итого</td>
                        <td>${cartCost}руб.</td>
                    </tr>
                    <tr>
                        <td>Доставка</td>
                        <td>Бесплатно</td>
                    </tr>
                    <tr>
                        <td><strong>Итого</strong></td>
                        <td><strong>${cartCost}руб.</strong></td>
                    </tr>
                </table>
                <a href="Dostavka.php"" class="normal">Перейти к оформлению заказа</a>
            </div>
        </section>
    </div>

        `

    }
}
// Удаление товара из коризины
function removeItem(tag) {
    let cartItems = localStorage.getItem('productsInCart');
    cartItems = JSON.parse(cartItems);
// Выбор количество товара
    let product = cartItems[tag];
    product.inCart -= 1;
    if (product.inCart === 0) {
        delete cartItems[tag];
    }
// Переращет цены заказа
    let cartCost = localStorage.getItem('totalCost');
    cartCost = parseInt(cartCost);
    localStorage.setItem('totalCost', cartCost - product.price);

    localStorage.setItem('productsInCart', JSON.stringify(cartItems));

    displayCart();
    onLoadCartNumbers();
    if (cartCost != null && cartCost > 0) {
        let cartQuantity = localStorage.getItem('cartNumbers');
        cartQuantity = parseInt(cartQuantity);
        let productPrice = parseFloat(product.price);

        // Изменяем количество и стоимость в локальном хранилище
        localStorage.setItem('totalCost', (cartCost - productPrice).toFixed(2));
        localStorage.setItem('cartNumbers', cartQuantity - 1);

        // Обновляем количество товаров в иконке корзины на странице
        carts.forEach(cart => {
            let cartNumber = cart.querySelector('.cart-number');
            let cartCount = parseInt(cartNumber.innerText);
            if (cartCount > 0) {
                cartNumber.innerText = cartCount - 1;
            }
        });

    }


    displayCart();
    onLoadCartNumbers();


}




onLoadCartNumbers();
displayCart();