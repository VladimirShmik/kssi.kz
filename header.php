<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link type="image/x-icon" href="<?php echo bloginfo('template_url'); ?>/favicon.ico" rel="shortcut icon">
    <link type="Image/x-icon" href="<?php echo bloginfo('template_url'); ?>/favicon.ico" rel="icon">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="wrapper">
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="header-wrapper">
                        <div class="header-logo">
                            <a href="<?php echo bloginfo('url'); ?>/home/" class="logo-link">
                                <img src="<?php echo bloginfo('template_url'); ?>/assets/img/logo-img.png" alt="" class="logo-link__img">
                            </a>
                        </div>
                        <div class="header-menu">
                            <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
                        </div>
                        <div class="mobile-wrap">
                            <div class="mobile-nav">
                                <div class="burger-icon">
                                    <span class="bar"></span>
                                    <span class="bar"></span>
                                    <span class="bar"></span>
                                </div>
                            </div>
                            <div class="menu-wrap">
                                <!--mobile-menu-->
                                <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
                            </div>
                        </div>
                        <div class="header-contacts">
                            <div class="header-box">
                                <a href="tel:77760676600" class="contacts-link">
                                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/phone-icon.png" alt="" class="contacts-link__img">
                                    <p class="contacts-link__text">+7 (776) 067-66-00</p>
                                </a>
                                <a href="tel:77018777785" class="contacts-link">
                                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/phone-icon.png" alt="" class="contacts-link__img">
                                    <p class="contacts-link__text">+7 (701) 877-77-85</p>
                                </a>
                            </div>

                            <a href="mailto:sales@kssi.kz" class="contacts-link">
                                <img src="<?php echo bloginfo('template_url'); ?>/assets/img/mail-icon.png" alt="" class="contacts-link__img">
                                <p class="contacts-link__text">sales@kssi.kz</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>