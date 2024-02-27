<?php
/**
 * Template Name: Главная
 */
?>

<?php get_header(); ?>
<main class="main">
    <!--slider-section-->
    <div class="d-flex flex-column">
        <div class="slider-container">
            <!-- Slider main container -->
            <div class="swiper swiperMain">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide">
                        <div class="swiper-container">
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/swiper-img-1.jpg" alt=""
                                 class="swiper-container__img">
                            <div class="container">
                                <div class="swiper-block">
                                    <h2 class="swiper-block__title">Многоэтажный жилой комплекс Central City</h2>
                                    <p class="swiper-block__subtitle">Строительство многоэтажного жилого комплекса с
                                        нежилыми помещениями и подземным паркингом по адресу: г. Караганда, ул. Ержанова
                                        63/2,</p>
                                    <a href="<?php echo bloginfo('url'); ?>/multi-storey-residential-complex-at/"
                                       class="swiper-block__link">
                                        подробнее
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="swiper-container">
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/swiper-img-5.jpg" alt=""
                                 class="swiper-container__img">
                            <div class="container">
                                <div class="swiper-block">
                                    <h2 class="swiper-block__title">Жилой комплекс Green City Park
                                    </h2>
                                    <p class="swiper-block__subtitle">Жилой комплекс расположен в центре города
                                        Караганды в одном из самых ре-спектабельных и экологически благоприятных районов
                                        по ул. Ержанова 34/1-34/3 на границе Центрального парка культуры и отдыха.</p>
                                    <a href="<?php echo bloginfo('url'); ?>/residential-complex-green-city-park/" class="swiper-block__link">
                                        подробнее
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="swiper-container">
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/swiper-img-2.jpg" alt=""
                                 class="swiper-container__img">
                            <div class="container">
                                <div class="swiper-block">
                                    <h2 class="swiper-block__title">Бизнес Центр ЕDITION</h2>
                                    <p class="swiper-block__subtitle">Строительство многоэтажного жилого комплекса с
                                        Расположен по адресу город Караганда проспект Нуркена Абдирова 26/6</p>
                                    <a href="<?php echo bloginfo('url'); ?>/еdition/" class="swiper-block__link">
                                        подробнее
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="swiper-container">
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/swiper-img-4.jpg" alt=""
                                 class="swiper-container__img">
                            <div class="container">
                                <div class="swiper-block">
                                    <h2 class="swiper-block__title">Бизнес — столовая Green City Food Park</h2>
                                    <p class="swiper-block__subtitle">Расположена по адресу город Караганда Улица
                                        Ержанова, 34/1</p>
                                    <a href="<?php echo bloginfo('url'); ?>/green-city-food-park/"
                                       class="swiper-block__link">
                                        подробнее
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="swiper-container">
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/swiper-img-3.jpg" alt=""
                                 class="swiper-container__img">
                            <div class="container">
                                <div class="swiper-block">
                                    <h2 class="swiper-block__title">Супермаркет City Market</h2>
                                    <p class="swiper-block__subtitle">Строительство современного продуктового
                                        супермаркета по адресу: г. Караганда, Улица Ержанова, 34/1</p>
                                    <a href="<?php echo bloginfo('url'); ?>/city-market/" class="swiper-block__link">
                                        подробнее
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="container">
                        <div class="main-contacts">
                            <h1 class="main-contacts__title">Строительство и ремонт в Казахстане</h1>
                            <div class="main-contacts-box">
                                <!-- Button trigger modal -->
                                <button type="button" class="main-contacts-link" data-bs-toggle="modal"
                                        data-bs-target="#contactModal">
                                    обратный звонок
                                </button>
                                <button type="button" class="main-contacts-link" data-bs-toggle="modal"
                                        data-bs-target="#searchModal">
                                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/search-icon.png" alt=""
                                         class="main-contatcs-link__img">
                                </button>
                                <a href="https://www.instagram.com/zhk_centralcity/" class="main-contacts-link"
                                   target="_blank">
                                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/inst-icon.png" alt=""
                                         class="main-contatcs-link__img">
                                </a>
                                <a href="https://wa.me/77760676600?text=%D0%9F%D1%80%D0%B8%D0%B2%D0%B5%D1%82!%20%F0%9F%91%8B%20%D0%9C%D0%B5%D0%BD%D1%8F%20%D0%B8%D0%BD%D1%82%D0%B5%D1%80%D0%B5%D1%81%D1%83%D0%B5%D1%82..."
                                   class="main-contacts-link" target="_blank">
                                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/whatsapp-icon.png"
                                         alt="" class="main-contatcs-link__img">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--building-section-->
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="building-wrapper">
                    <h3 class="building-wrapper__title">многоэтажный <span
                                class="building-wrapper__span">жилой комплекс</span></h3>
                    <div class="building-grid">
                        <div class="building-item">
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/build-img-1.jpg" alt=""
                                 class="building-item__img">
                        </div>
                        <div class="building-item">
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/build-img-2.jpg" alt=""
                                 class="building-item__img">
                        </div>
                        <div class="building-item">
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/build-img-3.jpg" alt=""
                                 class="building-item__img">
                        </div>
                        <div class="building-item">
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/build-img-4.jpg" alt=""
                                 class="building-item__img">
                        </div>
                    </div>
                    <a href="<?php echo bloginfo('url'); ?>/multi-storey-residential-complex-at/"
                       class="building-wrapper__link">подробнее</a>
                </div>
            </div>
        </div>
    </div>
    <!--about-section-->
    <div class="container-fluid">
        <div class="about-bg">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="about-wrapper">
                            <div class="about-grid">
                                <img src="<?php echo bloginfo('template_url'); ?>/assets/img/about-img.jpg" alt=""
                                     class="about-img">
                                <div class="about-item">
                                    <h4 class="about-item__title">О компании</h4>
                                    <p class="about-item__text">Добро пожаловать в «КазСпецСтрой-Инвест» – вашего
                                        надежного
                                        партнера в мире строительства высококачественной жилой и коммерческой
                                        недвижимости. Наша
                                        компания обладает богатым опытом и профессионализмом, предоставляя клиентам
                                        инновационные и устойчивые решения для их потребностей в жилье и бизнесе.
                                    </p>
                                    <a href="<?php echo bloginfo('url'); ?>/about-company/" class="about-item__link">Подробнее</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--form-section-->
    <div class="container-fluid">
        <div class="form-bg">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="form-wrapper">
                            <h2 class="form-wrapper__title">подобрать квартиру в новом доме</h2>
                            <p class="form-wrapper__subtitle">Узнать подробности планировки, цены, варианты оплаты</p>
                            <p class="form-wrapper__text">Оставьте заявку на форме ниже и наши менеджеры свяжутся с
                                вами</p>
                            <div class="form-grid">
                                <?php echo do_shortcode('[contact-form-7 id="153bdd5" title="Форма главная"]'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>



