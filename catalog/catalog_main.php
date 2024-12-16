<?php
session_start();
require_once($_SERVER['DOCUMENT_ROOT'] . '/connect.php');
$pass = mysqli_query($link, "SELECT * FROM popular");
$promotions = mysqli_query($link, "SELECT * FROM promotions");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/catalog/catalog.css">
    <link rel="stylesheet" href="/header.css">
    <title>Document</title>
    <script type="text/javascript" src="/script.js"></script>
    <script type="text/javascript" src='./catalog_card.js'></script>
    <script type="text/javascript" src='./catalogOpen.js'></script>
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
            <p class="main__title main__active font700">Акции</p>
            <div class="first main__content main__active">
                <?php
                while ($roll = mysqli_fetch_row(result: $pass)) {
                    echo "<div class='main__card card-{$roll[0]}'>
                    <p class='card__title title-{$roll[0]} font700'>{$roll[1]}</p>
                    <img class='card__img img-{$roll[0]}' src={$roll[2]}>
                    <p class='card__money money-{$roll[0]} font500'>Цена: {$roll[5]}₽</p>
                    <button class='card__button button-{$roll[0]}' value='{$roll[0]}'>Подробнее</button>
                    <p class='card__compound compound-{$roll[0]} hidden'>{$roll[3]}</p>
                    <p class='card__description description-{$roll[0]} hidden'>{$roll[4]}</p>
                    </div>
                    <button class='hidden value-{$roll[0]}'>{$roll[0]}</button> ";
                }
                ?>
            </div>
            <p class="main__title main__title-center main__active font700">Популярное</p>
            <div class="second main__content main__active">
                <?php
                while ($roll = mysqli_fetch_row(result: $promotions)) {
                    echo "<div class='main__card card-{$roll[0]}'>
                    <p class='card__title title-{$roll[0]} font700'>{$roll[1]}</p>
                    <img class='card__img img-{$roll[0]}' src={$roll[2]}>
                    <p class='card__money money-{$roll[0]} font500'>Цена: {$roll[5]}₽</p>
                    <button class='card__button' button-{$roll[0]} value='{$roll[0]}'>Подробнее</button>
                    <p class='card__compound compound-{$roll[0]} hidden'>{$roll[3]}</p>
                    <p class='card__description description-{$roll[0]} hidden'>{$roll[4]}</p>
                    </div>
                    <p class='hidden value-{$roll[0]}'>{$roll[0]}</p>";
                } ?>
            </div>
        </div>
        <!-- <script>
            let retu = 0
            let button = document.querySelectorAll(".card__button")
            button.forEach(function (event) {
                event.addEventListener("click", () => {
                    retu = event.value
                    return retu
                })
            })
        </script> -->
        <div class="card__open-menu hidden">
            <?php
            echo "
                <div class='open-menu__left'>
                    <p class='open-menu__name'></p>
                    <img class='open-menu__img' src='./card-img/card1-1.svg' alt=''>
                </div>
                <div class='open-menu__right'>
                    <p class='open-menu__description'>vvvv</p>
                    <p class='open-menu__compound'>vvvv</p>
                    <p class='open-menu__money'>vvvvv</p>
                    <button class='open-menu__button' value='1'>Заказать</button>
                </div> " ?>
        </div>
    </main>
</body>

</html>