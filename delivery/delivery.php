<?php
session_start();
require_once($_SERVER['DOCUMENT_ROOT'] . '/connect.php');
$name = $_POST['name'];
$street = $_POST['street'];
$homeAdress = $_POST['homeadress'];
$none = $_POST['none'];
$phone = $_POST['phone'];
$promo = $_POST['promo'];
$usermail = "<usermail@mail.ru>";
$subject = "У вас заказ";
$text = "Заказ на имя " . $name . "Адрес " . $homeAdress;
$email = "gorechoff@mail.ru";
$post = mysqli_query($link, "INSERT INTO delivery (name, street, homeAdress,none,phone,promo) VALUES ('$name','$street','$homeAdress','$none','$phone','$promo' )");
mail($usermail, $subject, $text, $email);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./delivery.css">
    <link rel="stylesheet" href="/header.css">
    <title>delivery</title>
</head>

<body>
    <header class="header">
        <div class="header__container container">
            <div class="header__logo">
                <a href="/index.html">
                    <img src="/img/логотип.svg" alt="">
                </a>
            </div>
            <ul class="header__list">
                <li class="elem"><a href="/news/news.php" class="font500">Наш блог</a></li>
                <li class="elem"><a href="/catalog/catalog_main.php" class="font500">Каталог</a></li>
                <li class="elem"><a href="/delivery/delivery.php" class="font500">Доставка курьером</a></li>
            </ul>
            <div class="header__bucket">
                <img src="/img/bucket.png" alt="">
            </div>
            <div class="header__burger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </header>
    <main class="main">
        <div class="main__container">
            <div class="main__bucket hidden">
                <p class="bucket__title">Корзина</p>
                <div class="bucket__item bucket__item1">
                    <p class="add"></p>
                    <script>
                        let get = localStorage.getItem("post")
                        document.querySelector(".add").innerHTML += get
                    </script>
                </div>
            </div>
            <p class="main__title font700">Оставить заявку</p>
            <form action="delivery.php" name="form" method="post" enctype="multipart/form-data" class="main__form">
                <div>
                    <p class="height">Ваше имя</p>
                    <input type="text" placeholder="Ваше имя..." name="name" class="name height" required>
                </div>
                <div>
                    <p class="height">Улица</p>
                    <input type="text" placeholder="Улица..." name="street" class="street height" required>
                </div>
                <div>
                    <p class="height">Дом</p>
                    <input type="text" placeholder="Дом..." name="homeadress" class="home-adress height" required>
                </div>
                <div>
                    <p class="height">Подъезд (если есть)</p>
                    <input type="text" placeholder="Подъезд (если есть)..." name="none" class="none height">
                </div>
                <div>
                    <p class="height">Номер телефона</p>
                    <input type="tel" placeholder="Номер телефона..." name="phone" class="phone height" required>
                </div>
                <div>
                    <p class="height">Промокод ( если есть)</p>
                    <input type="text" placeholder="Промокод ( если есть)..." name="promo" class="promo height">
                </div>
                <div>
                    <input class="form__button" type="submit" value="Заказать" onclick="Complete();">
                </div>
            </form>
    
        <div class="busket__block">
            <p class="main__title font700">Ваша корзина</p>
            <div class="bucket__item bucket__item1">
                <div class="takee"></div>
                <script>
                    let take = localStorage.getItem("post")
                    document.querySelector(".takee").innerHTML += take
                </script>
            </div>
            <a href="/error/error.html"><button class="main__button">Добавить</button></a>
            <button class="main__button delete-button">Очистить</button>
        </div>
        </div>
        <!-- <div class="extra hidden"></div>
            <script> let takee = document.querySelectorAll(".takee")
                let arr = []
                let result = arr.push(takee)
                console.log(arr)
            </script> -->
    </main>
    <footer class="footer">
        <div class="footer__container container padding-left">
            <p class="footer__title white">ГОРЯЧЁФФ</p>
            <div class="footer__logo">
                <a href="https://vk.com/club225188291"><img src="/img/logo2.svg" alt=""></a>
                <a href="https://ok.ru/group/70000005612038"><img src="/img/logo3.svg" alt=""></a>
            </div>
            <p class="footer__avt white">© 2023 авторская пекарня и кондитерская "ГОРЯЧЁФФ"</p>
        </div>
    </footer>
</body>
<script src="/script.js"></script>
<script src="/delivery/delivery.js"></script>

</html>