<?php

/**
 * Header part
 * @package finance
 **/
?>

<!DOCTYPE html>
<html <?php language_attributes() ?> class="no-js">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Required meta tags for responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <!-- Favicon and touch icons -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon/favicon-16x16.png" />
    <meta name="misapplication-TileColor" content="#ffffff" />
    <meta name="theme-color" content="#ffffff" />
    <!-- Website title -->
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php
    if (function_exists('wp_body_open')) {
        wp_body_open();
    } else {
        do_action('wp_body_open');
    }
    ?>
    <!-- Main Coding Start Here -->

    <!-- header-top -->
    <header class="header-top is-striped py-2 bg-clr-yellow">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-2 col-lg-2">
                    <select class="select-control" id="select-country">
                        <option selected value="england" data-img_src="<?php echo get_template_directory_uri(); ?>/assets/img/england.png">ENG</option>
                        <option value="BD" data-img_src="<?php echo get_template_directory_uri(); ?>/assets/img/bangladesh.png">BD</option>
                        <option value="IND" data-img_src="<?php echo get_template_directory_uri(); ?>/assets/img/ind.png">IND</option>
                    </select>
                </div>
                <div class="col-xl-7 col-lg-6">
                    <ul class="list-unstyled d-flex address-list align-items-center justify-content-end text-white mb-0">
                        <li class="d-inline-flex align-items-center me-4">
                            <span class="ni ni-clock-fill me-2"></span>
                            16 January 2021 - 12:40PM
                        </li>
                        <li class="d-inline-flex align-items-center">
                            <span class="ni ni-map-pin-fill me-2"></span>
                            6391 Elgon St. Celina, Delaware 10299
                        </li>
                    </ul>
                </div>
                <div class="col-xl-3 col-lg-4">
                    <ul class="list-unstyled striped-wizard d-flex justify-content-end address-list align-items-center text-white mb-0">
                        <li>
                            <a href="#" class="d-inline-flex align-items-center ">
                                <span class="ni ni-call-fill me-2"></span>
                                Call us: (207) 555-0119
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <!-- header-top -->

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg py-4">
        <div class="container">
            <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="img" class="img-fluid" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav-toggle" aria-controls="nav-toggle" aria-expanded="false" aria-label="Toggle navigation">
                Menu
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="nav-toggle">
                <!-- <ul class="navbar-nav mx-auto justify-content-center mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link mx-3" aria-current="page" href="#">Finance</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-3" href="#">Quizzes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-3" href="#">Surveys</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-3" href="#">Galleries</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link mx-3 dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Category
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Trending News</a></li>
                            <li><a class="dropdown-item" href="#">Top of the week</a></li>
                            <li><a class="dropdown-item" href="#">Post Galleries</a></li>
                            <li><a class="dropdown-item" href="#">Featured Quizzer</a></li>
                            <li><a class="dropdown-item" href="#">Latest Surveys</a></li>
                        </ul>
                    </li>
                </ul> -->
                <?php
                wp_nav_menu(
                    array(
                        "theme_location" => "main-menu",
                        "menu_class" => "navbar-nav mx-auto mb-2 mb-lg-0"
                    )
                )
                ?>
                <ul class="social-network list-unstyled d-flex align-items-center justify-content-lg-center mb-0">
                    <li><a href="#"><i class="fas fa-search"></i></a></li>
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!--/ navbar -->