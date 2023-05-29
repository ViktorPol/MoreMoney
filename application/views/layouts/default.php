<!doctype html>
<html lang="ru">

<head>
    <!-- add global css -->
    <link rel="stylesheet" href="/public/styles/global.css?v2222">
    <link rel="stylesheet" href="/public/styles/lightgallery.css?v2235">
    <link rel="stylesheet" href="/public/styles/lg-medium-zoom.css?v2235">
    <link rel="stylesheet" href="/public/assets/dist/css/bootstrap.min.css?52556">
    <!-- <link rel="stylesheet" href="/public/assets/dist/css/bootstrap.rtl.min.css"> -->
    <!-- <link rel="stylesheet" href="/public/assets/dist/css/font-awesome.min.css"> -->
    <!-- <link rel="stylesheet" href="https://unpkg.com/swiper@8.2.3/swiper-bundle.css"> -->

    <!-- add custom css -->
    <?php if (isset($cssArr)): ?>
        <?php foreach ($cssArr as $css) { ?>
            <link rel="stylesheet" href="/public/styles/<?php
            if (!is_array($css)):
                echo $css;
            else:
                echo $css['name'];
            endif;
            ?>.css?v1.121565365" <?php if (isset($css['attribute'])):
                foreach ($css['attribute'] as $attr => $attrVal) {
                    echo $attr; ?>="<?php echo $attrVal; ?>" <?php }
            endif; ?>>
        <?php }
    endif; ?>

    <style>
        @font-face {
            font-family: "Century20";
            src: url('/public/fonts/20th_century_font/20thCenturyFont.ttf');
        }

        @font-face {
            font-family: "Ubuntu";
            src: url('/public/fonts/Ubuntu/Ubuntu-Regular.ttf');
            font-weight: 400;
        }

        @font-face {
            font-family: "Ubuntu";
            src: url('/public/fonts/Ubuntu/Ubuntu-Medium.ttf');
            font-weight: 500;
        }

        @font-face {
            font-family: "Ubuntu";
            src: url('/public/fonts/Ubuntu/Ubuntu-Bold.ttf');
            font-weight: 700;
        }

        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>

    <!-- add global js -->
    <script src="/public/assets/dist/js/anime.js"></script>
    <script src="/public/assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/public/assets/dist/js/jquery.js"></script>
    <script src="/public/assets/dist/js/jquery-csv.js"></script>
    <script src="/public/scripts/form.js"></script>
    <script src="/public/scripts/lightgallery.min.js"></script>
    <script src="/public/scripts/lg-medium-zoom.min.js"></script>

</head>

<body>

    <!-- Block for modal (оповещения) -->
    <div class="modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-modal="true"
        role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <p class="text-center">Заполнены не все обязательные поля</p>
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-primary shadow-none px-5"
                        data-bs-dismiss="modal">Хорошо</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Block for alert -->
    <!-- <div class="alert" role="alert"></div> -->

    <header id="uptohome">

        <!-- Navbar -->
        <nav class="navbar navbar-expand-xl navbar-light m-0 pt-0 pb-3">
            <!-- Container wrapper -->
            <div class="d-flex flex-wrap justify-content-between col-12 col-xxl-11 mx-auto px-2 pt-2 pt-xl-0">
                <!-- Navbar brand -->
                <a class="navbar-brand me-2" href="/">
                    <img src="/public/images/logo/logo5.png" height="50" alt="MM Logo" loading="lazy" class="MM_logo_navbar">
                </a>

                <!-- Toggle button -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarButtonsExample" aria-controls="navbarButtonsExample" aria-expanded="true"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Collapsible wrapper -->
                <div class="navbar-collapse collapse" id="navbarButtonsExample" style="margin-top: 0rem;">
                    <div class="col w-100 pt-0 pt-xl-4">
                        <!-- Second links  -->
                        <div class="col navbar-nav">

                            <!-- Mobile menu -->
                            <div class="row accordion d-flex d-xl-none" id="accordionMobileMenu">
                                <div class="accordion-item border-0 bg-transparent">
                                    <h2 class="accordion-header " id="headingOneMobileMenu">
                                        <button class="ps-0 accordion-button shadow-none bg-transparent collapsed"
                                            type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOneMobileMenu" aria-expanded="true"
                                            aria-controls="collapseOneMobileMenu"
                                            style="font-size: calc(1.2rem + 0.3vw);">
                                            Сервис
                                        </button>
                                    </h2>
                                    <div id="collapseOneMobileMenu" class="accordion-collapse collapse show"
                                        aria-labelledby="headingOneMobileMenu">
                                        <div class="accordion-body py-0">
                                            <li class="nav-item">
                                                <a class="nav-link ps-3" href="/servicedescription">Описание
                                                    сервиса</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link ps-3" href="/appforregister">Заявка на
                                                    регистрацию</a>
                                            </li>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item border-0 bg-transparent">
                                    <h2 class="accordion-header" id="headingTwoMobileMenu">
                                        <button class="ps-0 accordion-button shadow-none bg-transparent collapsed"
                                            type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseTwoMobileMenu" aria-expanded="false"
                                            aria-controls="collapseTwoMobileMenu"
                                            style="font-size: calc(1.2rem + 0.3vw);">
                                            Маркетинг
                                        </button>
                                    </h2>
                                    <div id="collapseTwoMobileMenu" class="accordion-collapse collapse show"
                                        aria-labelledby="headingTwoMobileMenu">
                                        <div class="accordion-body py-0">
                                            <li class="d-flex d-xl-none nav-item">
                                                <a class="nav-link ps-3" href="/advertising">Автоматизация рекламы</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link ps-3" href="/appforregister">Заявка на
                                                    регистрацию</a>
                                            </li>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item border-0 bg-transparent">
                                    <h2 class="accordion-header" id="headingThreeMobileMenu">
                                        <button class="ps-0 accordion-button shadow-none bg-transparent collapsed"
                                            type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseThreeMobileMenu" aria-expanded="false"
                                            aria-controls="collapseThreeMobileMenu"
                                            style="font-size: calc(1.2rem + 0.3vw);">
                                            О компании
                                        </button>
                                    </h2>
                                    <div id="collapseThreeMobileMenu" class="accordion-collapse collapse show"
                                        aria-labelledby="headingThreeMobileMenu">
                                        <div class="accordion-body py-0">
                                            <li class="d-flex d-xl-none nav-item">
                                                <a class="nav-link ps-3" href="/requisites">Реквизиты</a>
                                            </li>

                                        </div>
                                    </div>
                                </div>
                            </div>


                            <!-- Desktop menu -->
                            <div class="col">
                                <div class="row m-0">
                                    <div class="col-auto d-none d-xl-flex desktop-menu m-0 pe-3 ps-xl-4"
                                        style="font-size: 18px; height: 24px;">
                                        <a href="/servicedescription">Сервис</a>
                                        <div class="desktop-menu-content">
                                            <a href="/servicedescription" style="font-size: 18px;">Описание
                                                сервиса</a>
                                            <a href="/appforregister" style="font-size: 18px;">Заявка на регистрацию</a>
                                        </div>
                                    </div>
                                    <div class="col-auto d-none d-xl-flex desktop-menu m-0 px-3"
                                        style="font-size: 18px; height: 24px;">
                                        <a href="/advertising">Маркетинг</a>
                                        <div class="desktop-menu-content">
                                            <a href="/advertising" style="font-size: 18px;">Автоматизация рекламы</a>
                                            <a href="/appforregister" style="font-size: 18px;">Заявка на регистрацию</a>

                                        </div>
                                    </div>
                                    <div class="col-auto d-none d-xl-flex desktop-menu m-0 px-3"
                                        style="font-size: 18px; height: 24px;">
                                        <a href="/contacts">
                                            <nobr>О компании</nobr>
                                        </a>
                                        <div class="desktop-menu-content">
                                            <a href="/requisites" style="font-size: 18px;">Реквизиты</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="row"> -->
                                <!-- <div class="col d-flex ps-2 ps-xl-5 align-items-end flex-wrap">
                                            <a class="d-flex align-items-end text-decoration-none" style="font-size: 20px;" href="tel:+78005502533"><nobr>8 800 550-25-33</nobr></a>&nbsp
                                            <span class="p-0 text-black-50" style="font-size: 20px;">ПН-ПТ 07:00-15:30 МСК</span>
                                        </div> -->
                                <!-- <div class="col pt-2 pt-xl-0 d-flex">
                                            <a class="text-decoration-none p-0 text-black-50"><nobr>ПН-ПТ 07:00-15:30 МСК</nobr></a>
                                        </div> -->
                                <!-- </div> -->
                            </div>

                        </div>

                    </div>

                    <div class="col-auto pt-4">
                        <!-- Third column -->
                        <div class="row m-0">
                            <div class="col d-flex align-items-center p-0 m-0 mb-2 mb-xl-0">
                                <div class="row m-0 p-0 d-flex justify-content-start flex-wrap">
                                    <div class="col ps-0 d-flex justify-content-start justify-content-xl-end">
                                        <a class="m-0 p-0 text-decoration-none" style="font-size: 20px; color: #78bebe;"
                                            href="tel:+79533644159">
                                            <nobr>8 953 364 41 59</nobr>
                                        </a>
                                    </div>
                                    <div
                                        class="col p-0 pe-0 pe-xxl-5 d-flex justify-content-start justify-content-xl-end align-items-center">
                                        <span class="p-0 text-black-50" style="font-size: 13px;">
                                            <nobr>ПН-ПТ 06:30-15:00 МСК</nobr>
                                        </span>
                                    </div>
                                </div>
                                <!-- <div class="col-12 px-0 d-flex justify-content-start justify-content-xl-end">
                                    <span class="p-0 text-black-50" style="font-size: 13px;"><nobr>support@yourich.ru</nobr></span>
                                </div> -->
                            </div>
                            <div class="col-auto p-0 m-0 my-auto">
                                <div class="d-flex align-item-center">
                                    <a href="/appforregister" target="_blank"><button type="button"
                                            class="btn btn-primary shadow-none"
                                            style="font-size: 18px; font-weight: 500;" id="btn_reg">Зарегистрироваться</button></a>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <!-- Collapsible wrapper -->
            </div>
            <!-- Container wrapper -->
        </nav>
        <!-- Navbar -->
    </header>


    <!-- Desktop menu -->
    <!-- <div class="desktopmenu">
                                    <div class="imagelogo">
                                        <a class="" href="/">
                                            <img src="/public/images/logo.png" height="50" alt="MDB Logo" loading="lazy"  />
                                        </a>
                                    </div>
                                    <div class="content">
                                        <div class="menublock">
                                            <a href="/platform-description">Платформа</a>
                                            <div class="list">
                                                <a href="/platform-description">Описание платформы</a>
                                                <a href="/appforads">Заявка на регистрацию</a>
                                            </div>
                                        </div>
                                        <div class="menublock">
                                            <a href="/ozon-advertising">Маркетинг</a>
                                            <div class="list">
                                                <a href="/ozon-advertising">Автоматизация рекламы OZON</a>
                                                <a href="/ozon-advertising-guide">АРК OZON описание сервиса</a>
                                                <a href="/cases">Кейсы клиентов</a>
                                                <a href="/appforads">Заявка на регистрацию</a>
                                                    
                                            </div>
                                        </div>
                                        <div class="menublock">
                                            <a href="/contacts"><nobr>О компании</nobr></a>
                                            <div class="list">
                                                <a href="/contacts">Контакты</a>
                                                <a href="/requisites">Реквизиты</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <div class="tel">
                                            <a class="" href="tel:+78005502533"><nobr>8 800 550-25-33</nobr></a>
                                        </div>
                                        <div class="time">
                                            <span class=""><nobr>ПН-ПТ 07:00-15:30 МСК</nobr></span>
                                        </div>
                                        <div class="buttoncompany">
                                            <a href="https://yourich.ru/appforads">
                                                <button type="button" class="whiteback">Войти</button>
                                            </a>
                                        </div>
                                        <div class="buttoncompany">
                                            <a href="https://yourich.ru/appforads">
                                                <button type="button" class="mod">Зарегистрироваться</button>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="menuicon">
                                        <button type="button" class="mod">Зарегистрироваться</button>
                                    </div> 
                                </div> -->


    <!-- <div class="row mx-auto position-sticky top-0 anchor-size" style="z-index: 1; background-color: white;">
        <ul class="col nav justify-content-center me-auto mb-2 mb-lg-0 anchor-array"></ul>
    </div> -->


    <div class="mt-5">

        <main>
            <?php echo $content; ?>
        </main>

    </div>

    <footer class="pt-2 mt-5">

        <div class="uphome">
            <a href="#uptohome">
                <img src="/public/images/uphome.png" height="50" alt="uphome" loading="lazy" />
            </a>
        </div>

        <div class="row m-0 p-0">

            <div class="col-12 col-md-3 col-lg-3 order-1 order-md-1 order-lg-1">
                <div
                    class="d-flex align-items-end justify-content-start justify-content-md-center justify-content-lg-start pb-5 pb-md-0">
                    <a href="/">
                        <img src="/public/images/logo/logo5.png" height="50" alt="MM Logo" loading="lazy" class="logoMM"/>
                    </a>
                </div>
            </div>

            <div class="col-12 col-md-9 col-lg-9 order-2 order-md-2 order-lg-2">
                <div class="row">
                    <div class="col-6 col-xl-4">
                        <div class="row">
                            <div class="col-12 mb-3" style="font-weight: 500; font-size: 20px;" id="support">Техподдержка</div>
                            <div class="col-12 mb-3">
                                <p class="m-0"><a class=" d-flex align-items-center text-decoration-none"
                                        style="height: 32px; font-weight: 500; font-size: 16px; color:black;"
                                        href="mailto:info_moremoney@mail.ru">
                                        <nobr>info_moremoney@mail.ru</nobr>
                                    </a></p>
                                <p class="m-0"><a class=" d-flex align-items-center text-decoration-none"
                                        style="height: 32px; font-weight: 500; font-size: 16px; color:black;"
                                        href="tel:+79533644159">
                                        <nobr>8 953 364 41 59</nobr>
                                    </a></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-xl-4">
                        <div class="row">
                            <div class="col-12 mb-3" style="font-weight: 500; font-size: 20px;" id="soc">Мы в социальных сетях
                            </div>
                            <div class="row">
                                <div class="col-12" style="height: 32px;">
                                    <a class="text-decoration-none" href="https://www.youtube.com/" id="img_youtube">
                                        <figure class="d-flex align-items-center m-0">
                                            <img class="px-2" width=32px height=18px 
                                                src="../../../public/images/youtube-icon.svg" alt="youtube">
                                            <figcaption
                                                style="float: right; font-weight: 500; font-size: 16px; color:black;">
                                                Youtube</figcaption>
                                        </figure>
                                    </a>
                                </div>
                                <div class="col-12" style="height: 32px;">
                                    <a class="text-decoration-none" href="https://t.me/Sovvikt">
                                        <figure class="d-flex align-items-center m-0">
                                            <img class="px-2" width=32px height=16\8px id="img_tgm"
                                                src="../../../public/images/telegram-icon.svg" alt="telegram">
                                            <figcaption class="d-flex align-items-center"
                                                style="float: right; font-weight: 500; font-size: 16px; color:black;">
                                                Telegram<figcaption>
                                        </figure>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="row m-0 p-0 border-top mt-5">
            <div class="col-8 mx-auto d-flex align-items-end justify-content-center">
                <p class="text-center m-0 pt-2" style="font-size: 16px; font-weight: 500; color: #313131;">
                    &copy; 2023 –
                    <?php echo date("Y"); ?>
                    <nobr>Полиенко В.С.</nobr>
                    <nobr>Все права защищены</nobr>
                </p>
            </div>
        </div>

        <!-- <script src="//code.jivo.ru/widget/IMqgyIyDhQ" async></script> -->

    </footer>

    <!-- add custom js -->
    <?php if (isset($jsArr)): ?>
        <?php foreach ($jsArr as $js) { ?>
            <script src="/public/scripts/<?php
            if (!is_array($js)):
                echo $js;
            else:
                echo $js['name'];
            endif;
            ?>.js?v1.212265145118"></script>
        <?php }
    endif; ?>

    


    <!-- <div class="cookie-consent hide-consent show-consent"><span class="cookie-text">
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">Настоящий веб-сайт использует файлы <a href="№"
                        target="_blank">cookies</a>, которые помогают
                    нам делать его удобнее для пользователей </font>
                
        </span>
        <button class="consent-btn">
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">
                    OK</font>
            </font>
        </button>
    </div>

    <script>
        let cookie_consent = document.querySelector('.cookie-consent');
        let consent_btn = document.querySelector('.consent-btn');

        consent_btn.onclick = function () {
            cookie_consent.classList.add('hide-concent');
        }
    </script> -->
</body>

</html>