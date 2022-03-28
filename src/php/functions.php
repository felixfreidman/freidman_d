<?php

$email_to = get_field('mail', 'options');
if ('disable_gutenberg') {
    add_filter('use_block_editor_for_post_type', '__return_false', 100);

    // отключим подключение базовых css стилей для блоков
    // ВАЖНО! когда выйдут виджеты на блоках или что-то еще, эту строку нужно будет комментировать
    remove_action('wp_enqueue_scripts', 'wp_common_block_scripts_and_styles');
}

add_action('wp_enqueue_scripts', 'theme_name_scripts');
function theme_name_scripts()
{
    wp_enqueue_style('style-name', get_stylesheet_uri() . "/style.css");
    wp_enqueue_style('style-name', get_stylesheet_uri() . "/main.min.css");
    wp_enqueue_style('style-name', get_stylesheet_uri() . "/assets/js/main.min.js");
    wp_enqueue_style('style-name', get_stylesheet_uri() . "/assets/js/main.js");
}

add_action('wp_enqueue_scripts', 'project_scripts'); // хук автоматом сработает во время wp_head
function project_scripts()
{
    wp_deregister_script('jquery');
    wp_register_script('jquery', get_stylesheet_directory_uri() . '/assets/js/jquery.min.js', array(), null, false);
    wp_enqueue_script('jquery');
    wp_register_script('plugins', get_stylesheet_directory_uri() . '/assets/js/plugins.min.js', array('jquery'), null, true);
    wp_enqueue_script('plugins');
}

// настройки темы
if (function_exists('acf_add_options_page')) {

    acf_add_options_page(array(
        'page_title' => 'Основные настройки',
        'menu_title' => 'Настройки темы',
        'menu_slug' => 'theme-general-settings',
        'capability' => 'edit_posts',
        'redirect' => false,
    ));
}

add_theme_support('post-thumbnails');

// кастомный размер миниатюры
add_image_size('my-bg', 1200, 700, true);
add_image_size('my-mini', 330, 330, true);