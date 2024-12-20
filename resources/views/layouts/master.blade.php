<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
          content="@yield('seo_description', 'Наша компания специализируется на организации сопровождения услуг по проведению плановых видов ремонта и текуще-отцепочного ремонта грузовых вагонов, в том числе ремонт запасных частей и колесных пар на территории Республики Казахстан.')">
    <meta name="keywords"
          content="@yield('seo_tags', 'Ремонт вагонов, вагоноремонтные работы, вагоны, колесные пары, грузоперевозки, ремонт колесных пар, сервисное обслуживание вагонов')">
    <title>@yield('title', 'Ремонт вагонов') | Rem Trans KZ</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css"/>
    <link rel="stylesheet" href="assets/css/app.min.css"/>
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/images/favicon-16x16.png">

</head>

<body>

<header class="header container">
    <div class="header__logo">
        <a href="/">
            <img src="assets/images/logo.svg" alt="logo"/>
        </a>
    </div>
    <ul class="header__menu">
        <li class="header__menu-item"><a href="/">Главная</a>
        </li>
        <li class="header__menu-item">
            <span>Услуги</span>
            <ul class="header__submenu">
                <li class="header__subitem">
                    <a href="/postavka">Поставка запчастей</a>
                </li>
                <li class="header__subitem">
                    <a href="/servisnoe-obsluzhivanie">Сервисное обслуживание</a>
                </li>
                <li class="header__subitem">
                    <a href="/transportnye-uslugi">Транспортно-экспедиционные услуги</a>
                </li>

            </ul>

        </li>

        <li class="header__menu-item"><a href="/about">О компании</a>
        </li>
        <li class="header__menu-item"><a href="/documents">Документы</a>
        </li>
        <li class="header__menu-item"><a href="/reviews">Отзывы</a>
        </li>
        <li class="header__menu-item"><a href="/contacts">Контакты</a>
        </li>
    </ul>
    <div class="header__mobile-btn">
        <i class="fa-solid fa-bars"></i>
    </div>
</header>

<div class="mobile-navbar">
    <div class="mobile-navbar__header">
        <div class="mobile-navbar__close">
            <i class="fa-solid fa-circle-xmark"></i>
        </div>
    </div>
    <ul class="mobile-menu">
        <li class="mobile-menu__item"><a href="/">Главная</a>
        </li>
        <li class="mobile-menu__item">
            <span>Услуги</span>
            <ul class="mobile-menu__submenu">
                <li class="mobile-menu__subitem">
                    <a href="/postavka">Поставка запчастей</a>
                </li>
                <li class="mobile-menu__subitem">
                    <a href="/servisnoe-obsluzhivanie">Сервисное обслуживание</a>
                </li>
                <li class="mobile-menu__subitem">
                    <a href="/transportnye-uslugi">Транспортно-экспедиционные услуги</a>

                </li>

            </ul>

        </li>

        <li class="mobile-menu__item"><a href="/about">О компании</a>
        </li>
        <li class="mobile-menu__item"><a href="/documents">Документы</a>
        </li>
        <li class="mobile-menu__item"><a href="/reviews">Отзывы</a>
        </li>
        <li class="mobile-menu__item"><a href="/contacts">Контакты</a>
        </li>
    </ul>
</div>


<main>
    @yield('content')
</main>

<div id="modal_feedback" class="modal add-review">
    <form id="feedback" class="add-review__form" action="/add-feedback" method="post">
        @csrf
        <input type="text" name="fullname" id="fullname" placeholder="ФИО"/>
        <input type="text" name="phone" id="phone" placeholder="Телефон"/>
        <input type="email" name="email" id="email" placeholder="Email"/>
        <textarea placeholder="Текст сообщения" name="message" id="message" cols="30" rows="10"></textarea>
        <button type="submit">Отправить письмо</button>
    </form>
</div>

<div class="btn-up btn-up__hide"><i class="fa-solid fa-chevron-up"></i>
</div>

<div class="btn-feedback">
    <a href="#modal_feedback" rel="modal:open">
        <i class="fa-solid fa-envelope"></i>
    </a>
</div>
<footer class='footer container'>
    <div class="footer__logo">
        <img src="assets/images/logo.svg" alt="logo">
        <p>Полный комплекс услуг по ремонту грузовых вагонов и поставке запасных частей для их ремонта.</p>
        <div class="developer">
            Разработка сайта <a href="https://s-webs.kz">s-webs</a>
        </div>
    </div>
    <div class="footer__contacts">
        <p><strong>Контакты</strong>
        </p>
        <p><a href="tel:+77172980032">+7 7172 98 00 32</a>
        </p>
        <p><a href="tel:+77172920032">+7 7172 92 00 32</a>
        </p>
        <p><a href="mailto:remtranskz@mail.ru">remtranskz@mail.ru</a>
        </p>
        <p>г. Астана,ул. Сыганак, д. 47, «Евроцентр» офис 1205</p>
    </div>
    <div class="footer__social">
        <p><strong>Социальные сети</strong>
        </p>
        <div class="footer__social-items">
            <div class="footer__social-item">
                <a href="##"><i class="fa-brands fa-instagram"></i></a>
            </div>
            <div class="footer__social-item">
                <a href="mailto:remtranskz@mail.ru"><i class="fa-regular fa-envelope"></i></a>
            </div>
        </div>
        <div class="developer-mobile">
            Разработка сайта <a href="https://s-webs.kz">s-webs</a>
        </div>
    </div>

</footer>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"
        integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/fae53a5af9.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
<script src="assets/js/app.min.js"></script>

</body>

</html>
