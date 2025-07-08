<?php
/**
 * tp_theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package tp_theme
 */

 

 function enqueue_font_awesome() {
    wp_enqueue_style(
        'font-awesome',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css'
    );
}
add_action('wp_enqueue_scripts', 'enqueue_font_awesome');


include_once('inc/extra.php');


function theme_register_nav_menu() {
    register_nav_menu('primary', __('Primary Menu', 'theme-textdomain'));
    register_nav_menu('top', __('Top Menu', 'theme-textdomain'));
    register_nav_menu('footer_surgery', __('Footer Surgery', 'theme-textdomain'));
     register_nav_menu('footer_services', __('Footer Services', 'theme-textdomain'));
     register_nav_menu('footer_services1', __('Footer Services', 'theme-textdomain'));
     register_nav_menu('footer_company', __('Footer Company', 'theme-textdomain'));
}

add_action('after_setup_theme', 'theme_register_nav_menu');





function enqueue_slick_slider_assets() {

   
    // jQuery (optional – already bundled in WordPress)
    wp_enqueue_script('jquery');


    // Slick CSS
    wp_enqueue_style('slick-css', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css', [], '1.8.1');
    wp_enqueue_style('slick-theme-css', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css', ['slick-css'], '1.8.1');

    // Slick JS
    wp_enqueue_script('slick-js', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js', ['jquery'], '1.8.1', true);

    // Your custom Slick initialization
    wp_enqueue_script('custom-slick-slider', get_template_directory_uri() . '/js/slick-slider.js', ['jquery', 'slick-js'], null, true);

      wp_enqueue_style('tailwindcss', get_template_directory_uri() . '/dist/style.css', array(), null);
}
add_action('wp_enqueue_scripts', 'enqueue_slick_slider_assets');







