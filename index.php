<?php

/**
 * Main Index File
 * @Finance
 */
?>

<?php get_header(); ?>

<!-- carousel -->
<div id="carousel">
    <div class="banner-carousel owl-carousel">
        <?php
        $args = array(
            'post_type' => 'sliders',
            'post_per_page' => 3,
        );
        $query = new WP_Query($args);
        while ($query->have_posts()) {
            $query->the_post();
            $user_name = get_post_meta(get_the_ID(), 'user_name', true);
            $custom_date = get_post_meta(get_the_ID(), 'custom_date', true);
            $more_details_link = get_post_meta(get_the_ID(), 'more_details_link', true);
            $more_details = get_post_meta(get_the_ID(), 'more_details', true);
        ?>
            <div class="carousel-item-card">
                <img src="<?php the_post_thumbnail_url(); ?>" class="carousel-img d-block w-100" alt="slide-img" />
                <div class="carousel-item-inner text-center text-white">
                    <div class="carousel-item-content">
                        <p class="carousel-sub-title text-uppercase mb-0">
                            <?php the_title() ?>
                        </p>
                        <h3 class="carousel-title my-3">
                            <?php the_content() ?>
                        </h3>
                        <div class="who-write-article d-flex align-items-center justify-content-center">
                            <?php
                            if ($user_name) {
                            ?>
                                <div class="user d-flex align-items-center  mx-3">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/user-1.png" alt="img" class="img-fluid user-img me-2">
                                    <p class="mb-0 user-name text-nowrap">
                                        <?php echo $user_name ?>
                                    </p>
                                </div>
                            <?php
                            }
                            ?>

                            <?php
                            if ($custom_date) {
                            ?>
                                <div class="post-date d-flex align-items-center mx-3">
                                    <span class="fs-6 ni ni-calendar me-2 lh-lg"></span>
                                    <p class="mb-0 date text-nowrap">
                                        <?php echo $custom_date ?>
                                    </p>
                                </div>
                            <?php
                            }
                            ?>
                        </div>

                        <?php
                        if ($more_details) {
                        ?>
                            <a href="<?php echo $more_details_link ?>" class="d-inline-flex align-items-center btn btn-finance bg-clr-yellow rounded text-white px-4 py-3 mt-4">
                                <span class="me-2">
                                    <?php echo $more_details ?>
                                </span>
                                <span class="ni ni-forward-ios"></span>
                            </a>
                        <?php
                        }
                        ?>

                    </div>
                </div>

            </div>
        <?php
            wp_reset_postdata();
        }
        ?>
    </div>
</div>
</div>
</div>
<!-- carousel -->

<!-- contact-now -->
<section class="contact-now  bg-clr-yellow py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-8">
                <div class="section-header text-center">
                    <h2 class="title text-white">Looking for a Best Business Plan Consultant?</h2>
                </div>
                <h3 class="contact-now-title text-white mb-0"></h3>
            </div>
            <div class="col-xl-4">
                <div class="btn-contact text-center text-right">
                    <a href="#" class="d-inline-flex align-items-center
                         btn bg-light rounded text-dark px-4 py-3">
                        Contact Now
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- contact-now -->

<!-- popular-news  -->
<section class="popular-news section-padding">
    <div class="container">
        <div class="section-header text-center mb-5">
            <span class="badge rounded-pill px-4 py-3 text-clr-yellow bg-clr-yellow-alfa">Popular News</span>
            <h2 class="title text-dark my-4">Popular News of the week</h2>
            <p class="sub-title text-dark">
                Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint.<br class="d-none d-xl-inline" />
                Velit officia consequat duis enim velit mollit.
            </p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-sm-6">
                <a href="#" class="article-card mb-4">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/popular-news1.png" alt="img" class="article-img img-fluid">
                    <div class="popular-news-card article-card-overlay">
                        <div class="card-overlay-inner py-4 px-4">
                            <div class="article-tag text-dark d-inline-flex align-items-center">
                                <span class="badge px-2 py-1 bg-clr-green text-uppercase fw-normal me-2">Insurance</span>
                                <div class="post-date d-flex align-items-center">
                                    <span class="ni ni-clock me-1"></span>
                                    <p class="mb-0 date text-nowrap">12 Feb, 2021</p>
                                </div>
                            </div>
                            <h4 class="article-title mt-3 mb-0 text-dark">
                                Google’s Page Experience Update <br class="d-none d-xl-inline" /> there is Launching May 2021
                            </h4>
                            <p class="article-sub-title my-3 text-muted">
                                Amet minim mollit non deserunt ullamco est sit <br class="d-none d-xl-inline" /> aliqua dolor do amet sint. onsuat there
                                will be <br class="d-none d-xl-inline" /> some duis enim velit mollit...
                            </p>
                        </div>
                        <div class="btn-finance">
                            <span class="read-more fw-bold ps-4 py-3">More Details</span>
                            <span class="arrow-right align-items-center d-flex"><img class="img-fluid w-auto m-auto d-block" src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-right-long.svg" alt="arrow" /></span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6">
                <a href="#" class="article-card mb-4">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/popular-news2.png" alt="img" class="article-img img-fluid">
                    <div class="popular-news-card article-card-overlay">
                        <div class="card-overlay-inner py-4 px-4">
                            <div class="article-tag text-dark d-inline-flex align-items-center">
                                <span class="badge px-2 py-1 bg-clr-yellow text-uppercase fw-normal me-2">Saving & Loan</span>
                                <div class="post-date d-flex align-items-center">
                                    <span class="ni ni-clock me-1"></span>
                                    <p class="mb-0 date text-nowrap">12 Feb, 2021</p>
                                </div>
                            </div>
                            <h4 class="article-title mt-3 mb-0 text-dark">
                                Google’s Page Experience Update <br class="d-none d-xl-inline" /> there is Launching May 2021
                            </h4>
                            <p class="article-sub-title my-3 text-muted">
                                Amet minim mollit non deserunt ullamco est sit <br class="d-none d-xl-inline" /> aliqua dolor do amet sint. onsuat there
                                will be <br class="d-none d-xl-inline" /> some duis enim velit mollit...
                            </p>
                        </div>
                        <div class="btn-finance">
                            <span class="read-more fw-bold ps-4 py-3">More Details</span>
                            <span class="arrow-right align-items-center d-flex"><img class="img-fluid w-auto m-auto d-block" src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-right-long.svg" alt="arrow" /></span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6">
                <a href="#" class="article-card mb-4">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/popular-news3.png" alt="img" class="article-img img-fluid">
                    <div class="popular-news-card article-card-overlay">
                        <div class="card-overlay-inner py-4 px-4">
                            <div class="article-tag text-dark d-inline-flex align-items-center">
                                <span class="badge px-2 py-1 bg-clr-blue text-uppercase fw-normal me-2">Wealth Management</span>
                                <div class="post-date d-flex align-items-center">
                                    <span class="ni ni-clock me-1"></span>
                                    <p class="mb-0 date text-nowrap">12 Feb, 2021</p>
                                </div>
                            </div>
                            <h4 class="article-title mt-3 mb-0 text-dark">
                                Google’s Page Experience Update <br class="d-none d-xl-inline" /> there is Launching May 2021
                            </h4>
                            <p class="article-sub-title my-3 text-muted">
                                Amet minim mollit non deserunt ullamco est sit <br class="d-none d-xl-inline" /> aliqua dolor do amet sint. onsuat there
                                will be <br class="d-none d-xl-inline" /> some duis enim velit mollit...
                            </p>
                        </div>
                        <div class="btn-finance">
                            <span class="read-more fw-bold ps-4 py-3">More Details</span>
                            <span class="arrow-right align-items-center d-flex"><img class="img-fluid w-auto m-auto d-block" src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-right-long.svg" alt="arrow" /></span>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- popular-news -->

<!-- popular-categories -->
<section class="popular-categories bg-clr-light-gray section-padding">
    <div class="container">
        <div class="section-header text-center">
            <span class="badge rounded-pill px-4 py-3 text-clr-blue bg-clr-blue-alfa">Categories</span>
            <h2 class="title text-dark my-4">Popular Categories</h2>
            <p class="sub-title text-dark">
                Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint.<br class="d-none d-xl-inline" />
                Velit officia consequat duis enim velit mollit.
            </p>
        </div>



        <div class="category-list mt-5">
            <div class="row">
                <?php
                $args = array(
                    'order' => 'ASC',
                    'post_type' => 'categories',
                    'post_per_page' => 6,
                );
                $query = new WP_Query($args);
                while ($query->have_posts()) {
                    $query->the_post();
                    $categories_image = get_field('categories_image');
                    $categories_btn = get_field('categories_btn');
                ?>
                    <div class="col-lg-4">
                        <div class="finance-card is-radius bg-white px-3 px-sm-4 py-5 mb-4">
                            <img src="<?php echo $categories_image ?>" alt="icons" class="img-fluid finance-card-img mb-4" />
                            <a href="#" class="card-item-title text-dark mb-3">
                                <?php the_title(); ?>
                            </a>
                            <p class="card-item-sub-title text-muted mb-3">
                                <?php the_content(); ?>
                            </p>
                            <a href="#" class="d-inline-flex align-items-center border btn btn-finance rounded text-dark px-4 py-3">
                                <span class="me-2">
                                    <?php echo $categories_btn ?>
                                </span>
                                <span class="ni ni-forward-ios"></span>
                            </a>
                        </div>
                    </div>

                <?php
                    wp_reset_postdata();
                }

                ?>
            </div>
        </div>
    </div>
</section>
<!-- popular-categories -->

<!-- saving-loan -->
<section class="saving-loan section-padding">
    <div class="container">
        <div class="section-header d-flex align-items-center justify-content-between text-center">
            <h2 class="title text-dark d-flex align-items-center my-4">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/pc-1.svg" alt="" class="img-fluid me-3" style="width: 35px;" />
                Saving & Loan
            </h2>
            <a href="#" class="d-inline-flex align-items-center border border-2 border-warning btn btn-finance rounded-pill text-dark px-3 py-2">
                <span class="me-1">More Details</span>
                <span class="ni ni-arrow-right"></span>
            </a>
        </div>
        <div class="saving-loan-inro mt-3">
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <a href="#" class="article-card mb-4">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/saving-loan-1.png" alt="img" class="article-img is-radius img-fluid">
                        <div class="article-card-overlay mt-4">
                            <div class="card-overlay-inner">
                                <div class="article-tag text-dark d-inline-flex align-items-center">
                                    <span class="badge px-2 py-1 bg-clr-yellow text-uppercase fw-normal me-2">Saving & Loan</span>
                                    <div class="post-date d-flex align-items-center">
                                        <span class="ni ni-clock me-1"></span>
                                        <p class="mb-0 date text-nowrap">18 Dec 21</p>
                                    </div>
                                </div>
                                <h4 class="article-title mt-3 mb-0 text-dark">
                                    Banks fail to pay import bills, tarnish country’s image
                                </h4>
                                <p class="article-sub-title my-3 text-muted">
                                    Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat there will be some
                                    duis enim velit mollit...
                                </p>
                                <button class="d-inline-flex align-items-center border btn btn-finance rounded text-dark px-4 py-3">
                                    <span class="me-2">More Details</span>
                                    <span class="ni ni-forward-ios"></span>
                                </button>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="#" class="article-card mb-4">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/saving-loan-2.png" alt="img" class="article-img is-radius img-fluid">
                        <div class="article-card-overlay mt-4">
                            <div class="card-overlay-inner">
                                <div class="article-tag text-dark d-inline-flex align-items-center">
                                    <span class="badge px-2 py-1 bg-clr-yellow text-uppercase fw-normal me-2">Saving & Loan</span>
                                    <div class="post-date d-flex align-items-center">
                                        <span class="ni ni-clock me-1"></span>
                                        <p class="mb-0 date text-nowrap">18 Dec 21</p>
                                    </div>
                                </div>
                                <h4 class="article-title mt-3 mb-0 text-dark">
                                    Banks fail to pay import bills, tarnish country’s image
                                </h4>
                                <p class="article-sub-title my-3 text-muted">
                                    Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat there will be some
                                    duis enim velit mollit...
                                </p>
                                <button class="d-inline-flex align-items-center border btn btn-finance rounded text-dark px-4 py-3">
                                    <span class="me-2">More Details</span>
                                    <span class="ni ni-forward-ios"></span>
                                </button>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="#" class="article-card mb-4">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/saving-loan-3.png" alt="img" class="article-img is-radius img-fluid">
                        <div class="article-card-overlay mt-4">
                            <div class="card-overlay-inner">
                                <div class="article-tag text-dark d-inline-flex align-items-center">
                                    <span class="badge px-2 py-1 bg-clr-yellow text-uppercase fw-normal me-2">Saving & Loan</span>
                                    <div class="post-date d-flex align-items-center">
                                        <span class="ni ni-clock me-1"></span>
                                        <p class="mb-0 date text-nowrap">18 Dec 21</p>
                                    </div>
                                </div>
                                <h4 class="article-title mt-3 mb-0 text-dark">
                                    Banks fail to pay import bills, tarnish country’s image
                                </h4>
                                <p class="article-sub-title my-3 text-muted">
                                    Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat there will be some
                                    duis enim velit mollit...
                                </p>
                                <button class="d-inline-flex align-items-center border btn btn-finance rounded text-dark px-4 py-3">
                                    <span class="me-2">More Details</span>
                                    <span class="ni ni-forward-ios"></span>
                                </button>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- saving-loan -->

<!-- Mutual Funds -->
<section class="mutual-funds section-padding">
    <div class="container">
        <div class="section-header d-flex align-items-center justify-content-between text-center mb-4">
            <h2 class="title text-light d-flex align-items-center my-4">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/mutual-fund-icon.png" alt="" class="img-fluid me-3" style="width: 35px;" />
                Mutual Funds
            </h2>
            <a href="#" class="d-inline-flex align-items-center border border-2 border-warning btn btn-finance rounded-pill text-light px-3 py-2">
                <span class="me-1">View All</span>
                <span class="ni ni-arrow-right"></span>
            </a>
        </div>
        <div class="row">
            <div class="col-lg-4 col-sm-6">
                <a href="#" class="article-card mb-4">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/mutualfund1.png" alt="img" class="article-img is-radius img-fluid">
                    <div class="article-card-overlay mt-4">
                        <div class="card-overlay-inner">
                            <div class="article-tag text-dark d-inline-flex align-items-center">
                                <span class="badge px-2 py-1 bg-clr-red text-uppercase fw-normal me-2">Mutual Funds</span>
                                <div class="post-date d-flex align-items-center">
                                    <span class="text-light ni ni-clock me-1"></span>
                                    <p class="mb-0 date text-light">12 Feb, 2021</p>
                                </div>
                            </div>
                            <h4 class="article-title mt-3 mb-0 text-light">
                                Banks fail to pay import bills, tarnish country’s image
                            </h4>
                            <p class="article-sub-title my-3 pb-3">
                                Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat there will be some
                                duis enim velit mollit...
                            </p>
                            <button class="d-inline-flex align-items-center border btn btn-finance rounded text-light px-4 py-3">
                                <span class="me-2">More Details</span>
                                <span class="ni ni-forward-ios"></span>
                            </button>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6">
                <a href="#" class="article-card mb-4">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/mutualfund2.png" alt="img" class="article-img is-radius img-fluid">
                    <div class="article-card-overlay mt-4">
                        <div class="card-overlay-inner">
                            <div class="article-tag text-dark d-inline-flex align-items-center">
                                <span class="badge px-2 py-1 bg-clr-red text-uppercase fw-normal me-2">Mutual Funds</span>
                                <div class="post-date d-flex align-items-center">
                                    <span class="text-light ni ni-clock me-1"></span>
                                    <p class="mb-0 date text-light">12 Feb, 2021</p>
                                </div>
                            </div>
                            <h4 class="article-title mt-3 mb-0 text-light">
                                Banks fail to pay import bills, tarnish country’s image
                            </h4>
                            <p class="article-sub-title my-3 pb-3">
                                Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat there will be some
                                duis enim velit mollit...
                            </p>
                            <button class="d-inline-flex align-items-center border btn btn-finance rounded text-light px-4 py-3">
                                <span class="me-2">More Details</span>
                                <span class="ni ni-forward-ios"></span>
                            </button>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="post-list">
                    <ul class="list-unstyled">
                        <li class="updated-list pb-3 border-bottom">
                            <a class="text-decoration-none" href="#">
                                <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/mutualfund3.png" alt="img" />
                                <div class="post-content">
                                    <h3 class="post-list-title text-white my-2">Looked up one of the more there
                                        obscure Latin words</h3>
                                    <div class="post-cat-and-date">
                                        <span class="post-tag bg-clr-red text-light py-1 px-2 me-3 rounded-3 text-uppercase text-white">Mutual
                                            Funds</span>
                                        <span class="post-date text-white"><i class="far fa-clock me-2"></i>12 Feb,
                                            2021</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="updated-list py-3 border-bottom">
                            <a class="text-decoration-none" href="#">
                                <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/mutualfund4.png" alt="img" />
                                <div class="post-content">
                                    <h3 class="post-list-title text-white my-2">Looked up one of the more there
                                        obscure Latin words</h3>
                                    <div class="post-cat-and-date">
                                        <span class="post-tag bg-clr-red text-light py-1 px-2 me-3 rounded-3 text-uppercase text-white">Mutual
                                            Funds</span>
                                        <span class="post-date text-white"><i class="far fa-clock me-2"></i>12 Feb,
                                            2021</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="updated-list py-3 border-bottom">
                            <a class="text-decoration-none" href="#">
                                <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/mutualfund5.png" alt="img" />
                                <div class="post-content">
                                    <h3 class="post-list-title text-white my-2">Looked up one of the more there
                                        obscure Latin words</h3>
                                    <div class="post-cat-and-date">
                                        <span class="post-tag bg-clr-red text-light py-1 px-2 me-3 rounded-3 text-uppercase text-white">Mutual
                                            Funds</span>
                                        <span class="post-date text-white"><i class="far fa-clock me-2"></i>12 Feb,
                                            2021</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="updated-list py-3">
                            <a class="text-decoration-none" href="#">
                                <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/mutualfund6.png" alt="img" />
                                <div class="post-content">
                                    <h3 class="post-list-title text-white my-2">Looked up one of the more there
                                        obscure Latin words</h3>
                                    <div class="post-cat-and-date">
                                        <span class="post-tag bg-clr-red text-light py-1 px-2 me-3 rounded-3 text-uppercase text-white">Mutual
                                            Funds</span>
                                        <span class="post-date text-white"><i class="far fa-clock me-2"></i>12 Feb,
                                            2021</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ Mutual Funds -->

<!--  wealth-management -->
<section class="wealth-management section-padding">
    <div class="container">
        <div class="section-header d-flex align-items-center justify-content-between text-center mb-4">
            <h2 class="title text-dark d-flex align-items-center my-4">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/wealth-management-icon.png" alt="" class="img-fluid me-3" style="width: 35px;" />
                Wealth Management
            </h2>
            <a href="#" class="d-inline-flex align-items-center border border-2 border-warning btn btn-finance rounded-pill text-dark px-3 py-2">
                <span class="me-1">View All</span>
                <span class="ni ni-arrow-right"></span>
            </a>
        </div>
        <div class="row">
            <div class="col-lg-4 col-sm-6">
                <a href="#" class="w-management-card rounded article-card mb-4 rounded py-4 px-4">
                    <div class="w-m-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/wealth-management1.png" alt="img" class="article-img is-radius img-fluid" />
                        <div class="w-management-tag article-tag text-dark d-inline-flex align-items-center">
                            <span class="badge px-2 py-1 bg-clr-blue text-uppercase fw-normal me-2">Wealth Managment</span>
                        </div>
                    </div>
                    <div class="article-card-overlay mt-4">
                        <div class="card-overlay-inner">
                            <h4 class="article-title mt-3 mb-0 text-dark">
                                Where Should I Buy Next?
                            </h4>
                            <p class="article-sub-title my-3 pb-3">
                                From romantic getaways to adventurous hikes, find your next travel destination now...
                            </p>
                            <button class="d-inline-flex align-items-center border btn btn-finance rounded text-dark px-4 py-3 mb-4">
                                <span class="me-2">More Details</span>
                                <span class="ni ni-forward-ios"></span>
                            </button>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6">
                <a href="#" class="w-management-card rounded article-card mb-4 rounded py-4 px-4">
                    <div class="w-m-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/wealth-management2.png" alt="img" class="article-img is-radius img-fluid" />
                        <div class="w-management-tag article-tag text-dark d-inline-flex align-items-center">
                            <span class="badge px-2 py-1 bg-clr-blue text-uppercase fw-normal me-2">Wealth Managment</span>
                        </div>
                    </div>
                    <div class="article-card-overlay mt-4">
                        <div class="card-overlay-inner">
                            <h4 class="article-title mt-3 mb-0 text-dark">
                                Where Should I Buy Next?
                            </h4>
                            <p class="article-sub-title my-3 pb-3">
                                From romantic getaways to adventurous hikes, find your next travel destination now...
                            </p>
                            <button class="d-inline-flex align-items-center border btn btn-finance rounded text-dark px-4 py-3 mb-4">
                                <span class="me-2">More Details</span>
                                <span class="ni ni-forward-ios"></span>
                            </button>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6">
                <a href="#" class="w-management-card rounded article-card mb-4 rounded py-4 px-4">
                    <div class="w-m-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/wealth-management3.png" alt="img" class="article-img is-radius img-fluid" />
                        <div class="w-management-tag article-tag text-dark d-inline-flex align-items-center">
                            <span class="badge px-2 py-1 bg-clr-blue text-uppercase fw-normal me-2">Wealth Managment</span>
                        </div>
                    </div>
                    <div class="article-card-overlay mt-4">
                        <div class="card-overlay-inner">
                            <h4 class="article-title mt-3 mb-0 text-dark">
                                Where Should I Buy Next?
                            </h4>
                            <p class="article-sub-title my-3 pb-3">
                                From romantic getaways to adventurous hikes, find your next travel destination now...
                            </p>
                            <button class="d-inline-flex align-items-center border btn btn-finance rounded text-dark px-4 py-3 mb-4">
                                <span class="me-2">More Details</span>
                                <span class="ni ni-forward-ios"></span>
                            </button>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
<!--/ wealth-management -->

<!-- Banking -->
<section class="banking section-padding">
    <div class="container">
        <div class="section-header d-flex align-items-center justify-content-between text-center mb-4">
            <h2 class="title text-dark d-flex align-items-center my-4">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/banking-icon.svg" alt="" class="img-fluid me-3" style="width: 35px;" />
                Banking
            </h2>
            <a href="#" class="d-inline-flex align-items-center border border-2 border-warning btn btn-finance rounded-pill text-dark px-3 py-2">
                <span class="me-1">View All</span>
                <span class="ni ni-arrow-right"></span>
            </a>
        </div>
        <div class="row">
            <div class="col-lg-4 col-sm-6">
                <a href="#" class="article-card mb-4">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/banking1.png" alt="img" class="article-img is-radius img-fluid">
                    <div class="article-card-overlay mt-4">
                        <div class="card-overlay-inner">
                            <div class="article-tag text-dark d-inline-flex align-items-center">
                                <span class="badge px-2 py-1 bg-clr-purple text-uppercase fw-normal me-2">Banking</span>
                                <div class="post-date d-flex align-items-center">
                                    <span class="ni ni-clock me-1"></span>
                                    <p class="mb-0 date text-nowrap">18 Dec 21</p>
                                </div>
                            </div>
                            <h4 class="article-title mt-3 mb-0 text-dark">
                                Banks fail to pay import bills, tarnish country’s image
                            </h4>
                            <p class="article-sub-title my-3 text-muted">
                                Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat there will be some
                                duis enim velit mollit...
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6">
                <a href="#" class="article-card mb-4">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/banking2.png" alt="img" class="article-img is-radius img-fluid">
                    <div class="article-card-overlay mt-4">
                        <div class="card-overlay-inner">
                            <div class="article-tag text-dark d-inline-flex align-items-center">
                                <span class="badge px-2 py-1 bg-clr-purple text-uppercase fw-normal me-2">Banking</span>
                                <div class="post-date d-flex align-items-center">
                                    <span class="ni ni-clock me-1"></span>
                                    <p class="mb-0 date text-nowrap">18 Dec 21</p>
                                </div>
                            </div>
                            <h4 class="article-title mt-3 mb-0 text-dark">
                                Banks fail to pay import bills, tarnish country’s image
                            </h4>
                            <p class="article-sub-title my-3 text-muted">
                                Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat there will be some
                                duis enim velit mollit...
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6">
                <a href="#" class="article-card mb-4">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/banking3.png" alt="img" class="article-img is-radius img-fluid">
                    <div class="article-card-overlay mt-4">
                        <div class="card-overlay-inner">
                            <div class="article-tag text-dark d-inline-flex align-items-center">
                                <span class="badge px-2 py-1 bg-clr-purple text-uppercase fw-normal me-2">Banking</span>
                                <div class="post-date d-flex align-items-center">
                                    <span class="ni ni-clock me-1"></span>
                                    <p class="mb-0 date text-nowrap">18 Dec 21</p>
                                </div>
                            </div>
                            <h4 class="article-title mt-3 mb-0 text-dark">
                                Banks fail to pay import bills, tarnish country’s image
                            </h4>
                            <p class="article-sub-title my-3 text-muted">
                                Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat there will be some
                                duis enim velit mollit...
                            </p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
<!--/ Banking -->

<!-- Insurance -->
<section class="insurance section-padding">
    <div class="container">
        <div class="section-header d-flex align-items-center justify-content-between text-center mb-5">
            <h2 class="title text-dark d-flex align-items-center my-4">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/insurance-icon.svg" alt="" class="img-fluid me-3" style="width: 35px;" />
                Insurance
            </h2>
            <a href="#" class="d-inline-flex align-items-center border border-2 border-warning btn btn-finance rounded-pill text-dark px-3 py-2">
                <span class="me-1">View All</span>
                <span class="ni ni-arrow-right"></span>
            </a>
        </div>
        <div class="row">
            <div class="col-lg-4 col-sm-6">
                <a href="#" class="insurance-card article-card mb-4">
                    <div class="card-images">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/insurance1.png" alt="img" class="article-img is-radius img-fluid" />
                        <div class="article-card-overlay mt-4">
                            <div class="insurance-card-overlay card-overlay-inner ps-4 pb-4">
                                <div class="article-tag text-dark d-inline-flex align-items-center">
                                    <span class="badge px-2 py-1 bg-clr-green text-uppercase fw-normal me-2">Insurance</span>
                                </div>
                                <h4 class="article-title mt-3 mb-0 text-light">
                                    Google’s Page Experience Update Launching May 2021
                                </h4>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6">
                <a href="#" class="insurance-card article-card mb-4">
                    <div class="card-images">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/insurance2.png" alt="img" class="article-img is-radius img-fluid" />
                        <div class="article-card-overlay mt-4">
                            <div class="insurance-card-overlay card-overlay-inner ps-4 pb-4">
                                <div class="article-tag text-dark d-inline-flex align-items-center">
                                    <span class="badge px-2 py-1 bg-clr-green text-uppercase fw-normal me-2">Insurance</span>
                                </div>
                                <h4 class="article-title mt-3 mb-0 text-light">
                                    Google’s Page Experience Update Launching May 2021
                                </h4>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6">
                <a href="#" class="insurance-card article-card mb-4">
                    <div class="card-images">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/insurance3.png" alt="img" class="article-img is-radius img-fluid" />
                        <div class="article-card-overlay mt-4">
                            <div class="insurance-card-overlay card-overlay-inner ps-4 pb-4">
                                <div class="article-tag text-dark d-inline-flex align-items-center">
                                    <span class="badge px-2 py-1 bg-clr-green text-uppercase fw-normal me-2">Insurance</span>
                                </div>
                                <h4 class="article-title mt-3 mb-0 text-light">
                                    Google’s Page Experience Update Launching May 2021
                                </h4>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
<!--/ Insurance -->

<!-- newsletter -->
<section class="newsletter section-padding">
    <div class="overlay-bg" id="color-overlay"></div>
    <div class="container">
        <div class="row justify-content-between">
            <div class="newsletter-content">
                <div class="section-header text-center mb-5">
                    <h2 class="section-title text-white mb-3">How Can We Help You? Consultant Team</h2>
                    <p class="section-intro text-white mb-0">
                        Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit
                    </p>
                </div>
                <form action="#" class="newsletter-form">
                    <div class="form-group m-auto">
                        <input type="text" class="form-control" name="e-name" placeholder="Email Address">
                        <button type="submit" class="btn btn-submit px-4 py-3 bg-clr-yellow text-white rounded-pill">Send Request</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!--/ newsletter -->

<?php
get_footer()
?>