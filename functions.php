<?php

/**
 * Main function file
 * @package Finance
 */

if (!defined('_S_VERSION')) {
    // Replace the version number of the theme on each release.
    define('_S_VERSION', '1.0.0');
}

//after theme setup
require_once(get_template_directory() . '/inc/themesetup.php');

// finance main scripts
require_once(get_template_directory() . '/inc/enqueue.php');

//navwalker
require_once(get_template_directory() . '/inc/navwalker.php');

// hero slider 
require_once(get_template_directory() . '/inc/slider.php');
