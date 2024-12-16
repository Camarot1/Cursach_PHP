<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/connect.php');
$popular = mysqli_query($link, "SELECT * FROM popular");
$popularList = mysqli_query($link, "SELECT * FROM popular");
$promotions = mysqli_query($link, "SELECT * FROM promotions");
$promotionsList = mysqli_query($link, "SELECT * FROM promotions");
?>
<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./header.css">
    <link rel="stylesheet" href="/style.css">
    <link rel="stylesheet" href="./css/login.css">
    <script src="./admin.js"></script>
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
            <select name="choose" class="main__select" id="">
                <option value=" "></option>
                <option value="2">Акции</option>
                <option value="1">Популярное</option>
            </select>
            <div class="popular">
                <div class="popular__cards cards">
                    <?php
                    while ($roll = mysqli_fetch_row(result: $popular)) {
                        echo "<div class='main__card card-{$roll[0]}'>
                         <p> {$roll[0]}</p>
                    <p class='card__title title-{$roll[0]} font700'>{$roll[1]} <input type='text' placeholder='изменить'></p>
                    <p>{$roll[2]} <input type='text' placeholder='изменить'></p>
                    <p class='card__money money-{$roll[0]} font500'>Цена: {$roll[5]}₽ <input type='text' placeholder='изменить'></p>
                    <p class='card__compound compound-{$roll[0]} hidden'>{$roll[3]} <input type='text' placeholder='изменить'></p>
                    <p class='card__description description-{$roll[0]} hidden'>{$roll[4]} <input type='text' placeholder='изменить'></p>
                    </div>";
                    }
                    ?>
                </div>
                <button class="submit" type="submit">Обновить</button>
            </div>
            <div class="promotion">
                <div class="promotion">
                    <div class="promotion__cards cards">
                        <?php
                        while ($roll = mysqli_fetch_row(result: $promotions)) {
                            echo "<div  class=' promotion main__card card-{$roll[0]}'>
                            <p> {$roll[0]}</p>
                    <p class='card__title title-{$roll[0]} font700'>{$roll[1]}<input type='text' placeholder='изменить'></p>
                    <p>{$roll[2]}<input type='text' placeholder='изменить'></p>
                    <p class='card__money money-{$roll[0]} font500'>Цена: {$roll[5]}₽<input type='text' placeholder='изменить'></p>
                    <p class='card__compound compound-{$roll[0]} hidden'>{$roll[3]}<input type='text' placeholder='изменить'></p>
                    <p class='card__description description-{$roll[0]} hidden'>{$roll[4]}<input type='text' placeholder='изменить'></p>
                    </div>";
                        } ?>
                    </div>
                    <button class="submit" type="submit">Обновить</button>
                </div>
            </div>
        </div>
        </div>
    </main>
</body>
<script src="./script.js"></script>

</html>