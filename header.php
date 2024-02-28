        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

            <!-- title -->
            <title>Milliana</title>

            <?php wp_head(); ?>


            <!-- favicon -->
            <link rel="shortcut icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.svg">
            <!-- google font -->
            <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
            <!-- fontawesome -->
            <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/all.min.css">
            <!-- bootstrap -->
            <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/bootstrap/css/bootstrap.min.css">
            <!-- owl carousel -->
            <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/owl.carousel.css">
            <!-- magnific popup -->
            <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/magnific-popup.css">
            <!-- animate css -->
            <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/animate.css">
            <!-- mean menu css -->
            <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/meanmenu.min.css">
            <!-- main style -->
            <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/main.css">
            <!-- responsive -->
            <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/responsive.css">
            



        </head>

        <body>


        <!--PreLoader-->
        <div class="loader">
            <div class="loader-inner">
                <div class="circle"></div>
            </div>
        </div>
        <!--PreLoader Ends-->

        <!-- header -->
        <div class="top-header-area" id="sticker">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-sm-12 text-center">
                        <div class="main-menu-wrap">
                            <!-- logo -->
                            <div class="site-logo">
                                <a href="#">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="">
                                </a>
                            </div>
                            <!-- logo -->

                            <!-- menu start -->
                            <nav class="main-menu">
                                <?php
                                wp_nav_menu( [
                                    'theme_location'  => 'menu_main_header',
                                    'menu'            => 'Menu 1',
                                    'container'       => 'div',
                                    'container_class' => 'navbar-collapse sub-menu-bar',
                                    'container_id'    => 'navbarSupportedContent',
                                    'menu_class'      => 'navbar-nav me-auto',
                                    'menu_id'         => 'nav',
                                ] );
                                ?>
                            </nav>
                            <a class="mobile-show search-bar-icon" href="#"><i class="fas fa-search"></i></a>
                            <div class="mobile-menu"></div>
                            <!-- menu end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end header -->

        <!-- search area -->
        <div class="search-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <span class="close-btn"><i class="fas fa-window-close"></i></span>
                        <div class="search-bar">
                            <div class="search-bar-tablecell">
                                <h3>Search For:</h3>
                                <input type="text" placeholder="Keywords">
                                <button type="submit">Search <i class="fas fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end search area -->
