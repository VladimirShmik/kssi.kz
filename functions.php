<?php
function install_scripts()
{
    //Подключение CSS
    wp_enqueue_style('bootstrap-style', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '1.0');
    wp_enqueue_style('swiper-style', get_template_directory_uri() . '/assets/css/swiper.min.css', array(), '1.0');
    wp_enqueue_style('main-style', get_stylesheet_uri());

    //подключение JS
    wp_enqueue_script('jquery-script', get_template_directory_uri() . '/assets/js/jquery.min.js', array(), '1.0', false);
    wp_enqueue_script('bootstrap-script', get_template_directory_uri() . '/assets/js/bootstrap-bundle.min.js', array(), '1.0', false);
    wp_enqueue_script('swiper-script', get_template_directory_uri() . '/assets/js/swiper-bundle.min.js', array(), '1.0', false);
    wp_enqueue_script('main-script', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0', true);

}

add_action('wp_enqueue_scripts', 'install_scripts');

// Регистрируем меню
add_action( 'init', 'register_my_menus' );
function register_my_menus() {
    register_nav_menus(
        array(
            'header-menu' => __( 'Главное меню' ),
            'mobile-menu' => __( 'Мобильное меню' ),
        )
    );
};
// Регистрируем изображения постов
add_theme_support( 'post-thumbnails' );




