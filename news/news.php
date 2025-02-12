<?php
session_start();
require_once($_SERVER['DOCUMENT_ROOT'] . '/connect.php');
$news = mysqli_query($link, "SELECT * FROM news");
?>
<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/header.css">
    <link rel="stylesheet" href="./news.css">
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
            <div class="main__content">
                <div class="main__news">
                    <div class="main__left">
                        <div class="left__img">
                            <img src="https://yandex-images.clstorage.net/o9BR63t85/b64083lvUMQ/9ZIwUQ6KmKBCnMPnpklhib3-gw-aeitLMxXfn6pNoSJT_RogIwERjzRZkHGMWg7wIMoFi0SoNtRSHO_j9vjCFHTD40Hez080kFvRdKeLII5vOdEPi70_yfbTC4lvzqMhhz2Ubv4IzBa-1ButkwWdcfUexFjBeKeOCJh-dbrmB1N2W_nZzhUTr8hNhWUoSaCEL_6JD0l8tUC3xAlP75pqtFhrXqB1xc5VedKV6tHN3rP0XYgWULipwYtIMr77qo5cNNox2EeTkmdHQgEnI8ZhjCw_AEYCdvcIekEBguZeJvfYo59vO0wIV3ubmWJfzJ_8NB8IHVE_4o_FTHewemLCnPUd8t-J1BjhCwVEb2PEbQ3g-ElLzHH-SjpAxY6oXeg1VitXqr-FQRCwlNxvX8PXMDrWQV-WuqZIRkm3d_9tBVQ1E_pcQ9Ae7AwEjK6pDO6G7LAOA4oy_EC3yEZP5tvkv5lhGWM4CwKSMNwXrdzLkLR4lE5SG_psTckL-HT7b4Ld_1Qy1MKdmOxOBoTmIIupCuj8DsNP_f6K9ENCiO6SpreSbFAvtgqFn3GZ1-Zchpg5M1PIUxj_ZwWJwfc3tq-Inz9VMdlE1JChjwyGZqUCbQIqtY6Pwvz3CvuByA6h2-m1W6dSInDNyFH7Wpon3c-dOTOVgVRQ_m8EDEFxMH7kjlT-GrnVDBSQbUjMTW3rTWgP5zjASMTxfoJ4CUJEKpTkfxIpEaN6CgoSsNTQ5ZDCW7CyFA8SGbBpyYeI-rY7rc0d89K2W8EYEGzAS8kkbULiA-swyE8L_XDDP0_IiqsUq3ZZbxnoP4yF0LgYWOpZgln4dBpOn9S2acUBA_jwdqXN3jBReVkK2hcnTs8HbmcApkLt_4xOTLR1AbJAQo_lWiByGW3aoPDGzhc03hVhk4vYODNZT1CZNWSIDoH-Nfzix1Y-mbTfQp1fJ0VBy6mswSULKDyOC8f6uE1_QIeOKw"
                                alt="" class="img padding">
                        </div>
                    </div>
                    <div class="main__right">
                        <div class="right__title title font500">Ежегодный день пиццы</div>
                        <div class="right__text">
                            <p class="text">9 Февраля празднуется ежегодный день пиццы.</p>
                            <br>
                            <p class="text">Мы приглашаем всех посетить наши пиццерии в этот день и отпраздновать этот
                                праздник вместе с нами</p>
                            <br>
                            <p class="text">На весь ассортимент пицц в наших пиццериях скидка -15%</p>
                        </div>
                    </div>
                </div>
                <div class="main__watch">
                    <h1 class="watch__title">Другие новости</h1>
                    <div class="news__extra">
                        <?php
                            while ($roll = mysqli_fetch_row(result: $news)) {
                            echo "<div class='main__card card-{$roll[0]}'>
                            <p> {$roll[0]}</p>
                            <p class='card__title title-{$roll[0]} font700'>{$roll[1]}</p>
                            <p>{$roll[2]}</p>
                            </div>";
                            }
                        ?>
                    </div>
                </div>
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
            <p class="footer__avt white">© 2023 авторская пекарня и кондитерская "ГОРЯЧЁФФ"</p>
        </div>
    </footer>
</body>
<script src="/script.js"></script>

</html>