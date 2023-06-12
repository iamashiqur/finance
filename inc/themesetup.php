<?php

function finance_after_theme_setup()
{
    add_theme_support('title-tag');
    load_theme_textdomain('finance', get_template_directory_uri() . '/lang');

    register_nav_menus(
        array(
            'main-menu' => __('Primary Menu', 'finance'),
        )
    );
}

add_action('after_setup_theme', 'finance_after_theme_setup');
