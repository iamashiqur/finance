<?php

/**
 * Main function file
 * @package Finance
 */

if (!defined('_S_VERSION')) {
    // Replace the version number of the theme on each release.
    define('_S_VERSION', '1.0.0');
}

function finance_setup_theme()
{
    add_theme_support('title-tag');
    load_theme_textdomain('finance', get_template_directory_uri() . '/lang');

    register_nav_menus(
        array(
            'main-menu' => __('Primary Menu', 'finance'),
        )
    );
}

add_action('after_setup_theme', 'finance_setup_theme');


function finance_scripts()
{
    // all css file
    wp_enqueue_style('nioicon', get_template_directory_uri() . '/assets/css/nioicon.css');

    wp_enqueue_style('animate', get_template_directory_uri() . '/assets/css/animate.min.css');

    wp_enqueue_style('select2', get_template_directory_uri() . '/assets/css/select2.min.css');

    wp_enqueue_style('owl', get_template_directory_uri() . '/assets/css/owl.carousel.min.css');

    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css');

    wp_enqueue_style('all-css', get_template_directory_uri() . '/assets/css/all.css');

    wp_enqueue_style('main-stylesheet', get_stylesheet_uri(), array(), _S_VERSION, 'all');

    // all js file
    wp_enqueue_script('jquery', get_template_directory_uri() . 'assets/js/jquery-3.5.1.min.js', array(), true);

    wp_enqueue_script('owl-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array(), _S_VERSION, true);

    wp_enqueue_script('select2', get_template_directory_uri() . '/assets/js/select2.min.js', array(), _S_VERSION, true);

    wp_enqueue_script('bootstrap-script', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), _S_VERSION, true);

    wp_enqueue_script('bootstrap-script-bundle', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array(), _S_VERSION, true);

    wp_enqueue_script('main-script', get_template_directory_uri() . '/assets/js/script.js', array(), _S_VERSION, true);
}

add_action('wp_enqueue_scripts', 'finance_scripts');
