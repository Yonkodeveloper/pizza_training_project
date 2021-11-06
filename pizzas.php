<?php
$products = [
    [
        'title' => 'Мясная Делюкс',
        'text' => 'Пепперони, лук, бекон, томатная паста, колбаски, перец, грибы, соус чили, ананасы',
        'image' => 'images\Layer2.png'
    ],
    [
        'title' => 'Морская Премиум',
        'text' => 'Перец, сыр, креветки, кальмары, мидии, лосось',
        'image' => 'images/Layer3.png'
    ],
    [
        'title' => 'Бекон и Сосиски',
        'text' => 'Бекон, сыр, сосиски, ананас, томатная паста',
        'image' => 'images/Layer4.png'
    ],
    [
        'title' => 'Куриная Делюкс',
        'text' => 'Курица, ананас, сыр Пепперони, соус для пиццы, томатная паста',
        'image' => 'images/Layer5.png'
    ],
    [
        'title' => 'Барбекю Премиум',
        'text' => 'Свинина BBQ, соус Барбкею, сыр, курица, соус для пиццы, соус чили',
        'image' => 'images/Layer6.png'
    ],
    [
        'title' => 'Пепперони Дабл',
        'text' => 'Пепперони, сыр, колбаса 2 видов: обжаренная и вареная',
        'image' => 'images/Layer7.png'
    ],
    [
        'title' => 'Куриное трио',
        'text' => 'Жареная курица, Тушеная курица, Куриные наггетсы, перец, сыр, грибы, соус для пиццы',
        'image' => 'images/Layer8.png'
    ],
    [
        'title' => 'Сырная',
        'text' => 'Сыр Джюгас, Сыр с плесенью, Сыр Моцарелла, Сыр секретный',
        'image' => 'images/Layer9.png'
    ],
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PIZZAAAA</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/hover-min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet/less" type="text/css" href="css/style.less">
    <script src="https://cdn.jsdelivr.net/npm/less@4.1.1"></script>
</head>
<body>
<header>
    <div class="header__container">
        <div class="header__burger">
            <svg  enable-background="new 0 0 512 512" height="512" viewBox="0 0 512 512" width="512" xmlns="http://www.w3.org/2000/svg"><path d="m464.883 64.267h-417.766c-25.98 0-47.117 21.136-47.117 47.149 0 25.98 21.137 47.117 47.117 47.117h417.766c25.98 0 47.117-21.137 47.117-47.117 0-26.013-21.137-47.149-47.117-47.149z"/><path d="m464.883 208.867h-417.766c-25.98 0-47.117 21.136-47.117 47.149 0 25.98 21.137 47.117 47.117 47.117h417.766c25.98 0 47.117-21.137 47.117-47.117 0-26.013-21.137-47.149-47.117-47.149z"/><path d="m464.883 353.467h-417.766c-25.98 0-47.117 21.137-47.117 47.149 0 25.98 21.137 47.117 47.117 47.117h417.766c25.98 0 47.117-21.137 47.117-47.117 0-26.012-21.137-47.149-47.117-47.149z"/></svg>
        </div>
        <a href="index.php" class="logo">
            <img src="images/pizza.png" alt="#">
            <span class="logo__text">Pizza cheff</span>
        </a>
        <div class="menu header__menu">
            <svg class="menu__close" height="329pt" viewBox="0 0 329.26933 329" width="329pt" xmlns="http://www.w3.org/2000/svg"><path d="m194.800781 164.769531 128.210938-128.214843c8.34375-8.339844 8.34375-21.824219 0-30.164063-8.339844-8.339844-21.824219-8.339844-30.164063 0l-128.214844 128.214844-128.210937-128.214844c-8.34375-8.339844-21.824219-8.339844-30.164063 0-8.34375 8.339844-8.34375 21.824219 0 30.164063l128.210938 128.214843-128.210938 128.214844c-8.34375 8.339844-8.34375 21.824219 0 30.164063 4.15625 4.160156 9.621094 6.25 15.082032 6.25 5.460937 0 10.921875-2.089844 15.082031-6.25l128.210937-128.214844 128.214844 128.214844c4.160156 4.160156 9.621094 6.25 15.082032 6.25 5.460937 0 10.921874-2.089844 15.082031-6.25 8.34375-8.339844 8.34375-21.824219 0-30.164063zm0 0"/></svg>
            <a class="menu__item" href="#">Пицца</a>
            <a class="menu__item menu__item_active" href="#">Напитки</a>
            <a class="menu__item" href="#">Доставка и оплата</a>
            <a class="menu__item" href="#">Контакты</a>
        </div>
        <div id="cart">
            <img src="images/cart.png" alt="#">
        </div>
    </div>
</header>
<main class="wow animate__fadeInRight">
    <div id="main-container">
        <div id="main-info">
            <h1>
                Самая вкусная пицца в мире
                <span>только в Pizza Cheff </span>
            </h1>
            <div id="main-advantages">
                <div class="advantage">
                    <div class="advantage-image">
                        <img src="images/hop.png" alt="#">
                    </div>
                    <div class="advantage-text">
                        <div class="advantage-title">
                            Лучшее тесто
                        </div>
                        <div class="advantage-description">
                            Мы создаем тесто только из отборной итальянской муки наивысшего качества
                        </div>
                    </div>
                </div>
                <div class="advantage">
                    <div class="advantage-image">
                        <img src="images/kitchen-pack.png" alt="#">
                    </div>
                    <div class="advantage-text">
                        <div class="advantage-title">
                            Лучшие Повара
                        </div>
                        <div class="advantage-description">
                            Пиццы готовят самые профессиональные итальянские повара
                        </div>
                    </div>
                </div>
                <div class="advantage">
                    <div class="advantage-image">
                        <img src="images/seo-and-web.png" alt="#">
                    </div>
                    <div class="advantage-text">
                        <div class="advantage-title">
                            гарантия качества
                        </div>
                        <div class="advantage-description">
                            Наша пиццерия получила множество наград и признаний по всему миру
                        </div>
                    </div>
                </div>
                <div class="advantage">
                    <div class="advantage-image">
                        <img src="images/holidays.png" alt="#">
                    </div>
                    <div class="advantage-text">
                        <div class="advantage-title">
                            Отборные рецепты
                        </div>
                        <div class="advantage-description">
                            Мы используем рецепты от мировых лидеров в изготовлении пиццы
                        </div>
                    </div>
                </div>
            </div>
            <div id="main-action">
                <a class="btn hvr-float-shadow" href="#">Выбрать пиццу</a>
            </div>
        </div>
        <div id="main-image">
            <img src="images/pizza_big.png" alt="#">
        </div>
    </div>
</main>
<div id="products">
    <div id="products-container">
        <div id="products-title">
            Выберите свою любимую пиццу
        </div>
        <div id="products-items">
            <?php foreach ($products as $product) : ?>
                <div class="product wow animate__flipInX">
                    <div class="product-image">
                        <a class="image-popup" href="<?= $product['image'] ?>" >
                            <img src="<?= $product['image'] ?>" alt="#">
                        </a>
                    </div>
                    <div class="products-title">
                        <?= $product['title'] ?>
                    </div>
                    <div class="product-text">
                        <?= $product['text'] ?>
                    </div>
                    <a class="product-button btn hvr-bubble-float-bottom">В корзину</a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <footer>
        <div id="footer-container">
            <div class="logo">
                <img src="images/pizza.png" alt="#">
                <span class="logo__text">Pizza cheff</span>
            </div>
            <div id="rights">
                Все права защищены, 2020
            </div>
        </div>
    </footer>

    <div id="loader">
        <div class="lds-roller"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
    </div>


    <div id="My-popup" class="myPopup mfp-hide">
        <p>Спасибо за заказ. Мы свяжемся с вами в ближайшее время!</p>
    </div>


    <script src="js/wow.min.js"></script>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/main.js"></script>
    <script>

        $(document).ready(function() {

            document.getElementsByClassName('header__burger')[0].onclick = function () {
                document.getElementsByClassName('menu')[0].classList.add('open');
            }
            document.querySelectorAll('.menu > *').forEach((item) => {
                item.onclick = () => {
                    document.getElementsByClassName('menu')[0].classList.remove('open');
                }
            });

            new WOW({
                animateClass: 'animate__animated',
            }).init();

            $('.image-popup').magnificPopup({
                type:'image'
            });

            $('.open-popup-link').magnificPopup({
                type:'inline',
                midClick: true
            });

        });


    </script>

</body>
</html>



