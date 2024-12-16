<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./header.css">
    <link rel="stylesheet" href="/style.css">
    <link rel="stylesheet" href="./css/login.css">
    <title>Main</title>
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
                <img src="./img/bucket.png" alt="">
            </div>
            <div class="header__burger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </header>
    <main class="main">
        <div class="main__container container">
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
            <p class="main__title">
                Вход
            </p>
            <div class="main__login">
                <input type="text"  placeholder="Логин">
                <input type="text" placeholder="Пароль">
                <button class="button__check">Вход</button>
            </div>
        </div>
    </main>
    <footer class="footer">
        <div class="footer__container container padding-left">
            <p class="footer__title white">ГОРЯЧЁФФ</p>
            <div class="footer__logo">
                <a href="https://vk.com/club225188291"><img src="/img/logo2.svg" alt=""></a>
                <a href="https://ok.ru/group/70000005612038"><img src="/img/logo3.svg" alt=""></a>
            </div>
            <p class="footer__avt white">© 2023 авторская пиццерия "ГОРЯЧЁФФ"</p>
        </div>
    </footer>
</body>
<script src="./script.js"></script>

</html>