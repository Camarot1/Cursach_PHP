<?php
session_start();
require_once($_SERVER['DOCUMENT_ROOT'] . '/connect.php');
$name = $_POST['name'];
$street = $_POST['street'];
$homeAdress = $_POST['home-adress'];
$none = $_POST['none'];
$phone = $_POST['phone'];
$promo = $_POST['promo'];
$post = mysqli_query($link, "INSERT INTO delivery (name, street, homeAdress,none,phone,promo) VALUES ('$name','$street','$homeAdress','$none','$phone','$promo' )");
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
                <li class="elem"><a href="/news/news.html" class="font500">Наш блог</a></li>
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
            <p class="main__title font700">Форма доставки</p>
            <form action="delivery.php" name="form" method="post" enctype="multipart/form-data" class="main__form">
                <input type="text" placeholder="Ваше имя..." name="name" class="name height" required>
                <input type="text" placeholder="Улица..." name="street" class="street height" required>
                <input type="text" placeholder="Дом..." name="homeadress" class="home-adress height" required>
                <input type="text" placeholder="Подъезд (если есть)..." name="none" class="none height">
                <input type="tel" placeholder="Номер телефона..." name="phone" class="phone height" required>
                <input type="text" placeholder="Промокод ( если есть)..." name="promo" class="promo height">
                <input type="submit" value="Заказать" onclick="Complete();">
            </form>
            <p class="main__title font700">Ваша корзина</p>
            <div class="bucket__item bucket__item1">
                <p class="takee"></p>
                <script>
                    let take = localStorage.getItem("post")
                    document.querySelector(".takee").innerHTML += take
                </script>
            </div>
            <a href="/error/error.html"><button class="main__button">Добавить</button></a>
        </div>
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