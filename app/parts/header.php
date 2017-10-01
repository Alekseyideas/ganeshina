<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ganeshina</title>
    <link rel="apple-touch-icon" sizes="180x180" href="img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicons/favicon-16x16.png">
    <link rel="manifest" href="img/favicons/manifest.json">
    <link rel="mask-icon" href="img/favicons/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="img/favicons/favicon.ico">
    <meta name="msapplication-config" content="img/favicons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
  <!--  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">-->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="css/stylesheet.css?<?php echo rand()?>">
</head>
<body>

<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/ru_RU/sdk.js#xfbml=1&version=v2.10";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>





<header>
    <div class="container">
        <div class="row">
            <div class="col-md-2 col-sm-3 col-sm-6 col-xs-4">
                <div id="logo">
                    <a href="/">
                        <img src="img/logo.png" alt="logo">
                    </a>
                </div>
            </div>
            <div class="col-md-8 col-sm-9  col-sm-6 col-xs-8">
                <div class="phone-callBack-search">
                    <div class="flex flex--aCenter">
                        <div class="flex flex--aCenter">
                            <div class="phones">
                                <div class="flex flex--aCenter">
                                    <a href="tel:+380501747511" class="phone">(050) 174 75 11</a>
                                    <button class="btn btn--phone"><i class="fa fa-angle-down" aria-hidden="true"></i></button>
                                </div>

                                <div class="more-phones">
                                    <ul class="list-unstyled">
                                        <li><a href="tel:+380501747511">(050) 174 75 11</a></li>
                                        <li><a href="tel:+380501747511">(050) 174 75 11</a></li>
                                        <li><a href="tel:+380501747511">(050) 174 75 11</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="callBack">
                                <div class="flex flex--aCenter">
                                    <img src="img/callBack.svg" alt="callBack">
                                    <span>Перезвоните мне</span>
                                </div>
                            </div>
                        </div>
                        <div id="search" class="input-group hidden-xs">
                            <input type="text" name="search" value="" placeholder="Поиск по сайту" class="form-control input-lg">
                            <button type="button" class="btn search-btn"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-2 col-xs-12">
                <div id="cart" >
                    <button class="btn flex flex--aCenter">
                        <svg
                                width="43px" height="43px">
                            <path fill-rule="evenodd"  fill="rgb(66, 133, 244)"
                                  d="M36.857,1.834 L26.344,31.109 L4.563,31.109 L-0.000,10.153 L21.035,10.153 L21.035,11.891 L2.238,11.891 L6.046,29.372 L25.036,29.372 L35.558,-0.000 L43.000,-0.000 L43.000,1.834 L36.857,1.834 ZM8.565,33.487 C11.171,33.487 13.312,35.593 13.312,38.244 C13.312,40.894 11.171,43.000 8.565,43.000 C5.959,43.000 3.817,40.894 3.817,38.244 C3.817,35.593 5.959,33.487 8.565,33.487 ZM8.565,41.175 C10.241,41.175 11.540,39.806 11.540,38.244 C11.452,36.594 10.145,35.313 8.565,35.313 C6.889,35.313 5.590,36.681 5.590,38.244 C5.590,39.893 6.889,41.175 8.565,41.175 ZM22.062,33.487 C24.668,33.487 26.809,35.593 26.809,38.244 C26.809,40.894 24.668,43.000 22.062,43.000 C19.455,43.000 17.314,40.894 17.314,38.244 C17.314,35.593 19.455,33.487 22.062,33.487 ZM22.062,41.175 C23.738,41.175 25.036,39.806 25.036,38.244 C25.036,36.594 23.641,35.313 22.062,35.313 C20.385,35.313 19.087,36.681 19.087,38.244 C19.087,39.893 20.385,41.175 22.062,41.175 Z"/>
                        </svg>

                        <div class="cart-info">
                            <div class="title-cart">
                                Корзина
                            </div>
                            <div class="empty-cart">
                                Товаров нет
                            </div>
                        </div>

                    </button>



                </div>
            </div>
        </div>

    </div>

    <div class="menu-wrapper">
        <div class="container">
            <div class="col-sm-12">
                <div class="mobile-menu">
                    <span class="mobile-menu-text">Меню</span>
                    <button class="btn btn-mob-menu">
                        <span class="line"></span>
                        <span class="line"></span>
                        <span class="line"></span>
                        <span class="line"></span>
                    </button>

                </div>
                <nav id="menu" >
                    <button class="btn btn-close hidden-md hidden-lg"><i class="fa fa-times" aria-hidden="true"></i></button>
                    <ul class="list-unstyled flex flex--jBetween flex--aCenter">
                        <li><a href="#">Шины</a></li>
                        <li><a href="#">Диски</a></li>
                        <li><a href="#">Автострахование</a></li>
                        <li><a href="#">Акции</a></li>
                        <li><a href="#">Контакты</a></li>
                        <li><a href="#">Отзывы</a></li>
                        <li><a href="#">Доставка и оплата</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

</header>
