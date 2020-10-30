<?php
	/**
	 * The header for our theme
	 *
	 * This is the template that displays all of the <head> section and everything up until <div id="content">
	 *
	 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
	 *
	 * @package Bootscore
	 */
	
	?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_stylesheet_directory_uri();?>/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_stylesheet_directory_uri();?>/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_stylesheet_directory_uri();?>/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php echo get_stylesheet_directory_uri();?>/img/favicon/site.webmanifest">
    <link rel="mask-icon" href="<?php echo get_stylesheet_directory_uri();?>/img/favicon/safari-pinned-tab.svg" color="#007bff">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <!-- Loads the internal WP jQuery -->
    <?php wp_enqueue_script('jquery'); ?>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <!-- Preloader -->
    <div id="preloader" class="bg-white align-items-center justify-content-center position-fixed">
        <div id="status" class="spinner-border text-primary" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Preloader End -->

    <div id="page" class="site">

        <header id="masthead" class="site-header">

            <div id="to-top"></div>

            <nav id="nav-main" class="navbar navbar-expand-lg navbar-light bg-light fixed-top">

                <div class="container px-sm-3">

                    <!-- Toggler -->
                    <button class="navbar-toggler" type="button" data-toggle="offcanvas">
                        <div class="toggler-icon"><span></span><span></span><span></span><span></span></div>
                    </button>

                    <!-- Mobile Search Module -->
                    <div class="top-nav-search-mobile ml-2 d-lg-none">
                        <a class="btn btn-link text-secondary" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-search"></i></a>
                        <div class="dropdown-menu bg-light border-top-0 border-left-0 border-right-0 border-bottom-0 rounded-0" aria-labelledby="dropdownMenuLink">
                            <div class="container">
                                <?php if ( is_active_sidebar( 'top-nav-search' )) : ?>
                                <div class="w-100">
                                    <?php dynamic_sidebar( 'top-nav-search' ); ?>
                                </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>

                    <!-- SVG Logo -->
                    <a class="woocommerce navbar-brand d-md-none" href="<?php echo esc_url( home_url() ); ?>"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/img/logo/logo-sm.svg" alt="logo" class="logo"></a>
                    <a class="woocommerce navbar-brand d-none d-md-block" href="<?php echo esc_url( home_url() ); ?>"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/img/logo/logo.svg" alt="logo" class="logo"></a>


                    <div class="navbar-collapse offcanvas-collapse-left" id="navbar">

                        <a class="menu-header bg-light d-block p-3 d-lg-none no-underline" data-toggle="offcanvas" href="javascript:void(0)">
                            <div class="d-flex align-items-center">
                                <span class="mr-auto"><?php esc_html_e('Close menu' , 'bootscore'); ?></span> <i class="fas fa-times"></i>
                            </div>
                        </a>


                        <div class="vert-menu p-3 p-lg-0 ml-auto h-100">
                            <!-- Nav Walker -->
                            <?php
                                wp_nav_menu( array(
               	                    'theme_location'    => 'primary',
               	                    'depth'             => 2,
               	                    'container'         => 'div',
               	                    'container_class'   => 'navbar-collapse offcanvas-collapse',
               	                    'container_id'      => 'bootscore-navbar-collapse',
               	                    'menu_class'        => 'nav navbar-nav pb-5 pb-lg-0',
               	                    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
               	                    'walker'            => new WP_Bootstrap_Navwalker(),
                                ) );
                            ?>
                        </div>

                    </div>



                    <!-- Top Nav Module -->
                    <div class="top-module-1 flex-grow-1 flex-lg-grow-0 justify-content-end d-flex">
                        <?php if ( is_active_sidebar( 'top-nav-module' )) : ?>
                        <div>
                            <?php dynamic_sidebar( 'top-nav-module' ); ?>
                        </div>
                        <?php endif; ?>
                    </div>



                    <!-- Woocommerce Mobile -->
                    <!-- User -->
                    <div class="d-lg-none">
                        <a class="btn btn-link text-secondary pr-0 mr-1" title="<?php esc_html_e('Account', 'bootscore'); ?>" href="<?php echo get_permalink( wc_get_page_id( 'myaccount' ) ); ?>"><i class="fas fa-user"></i></a>
                        <!-- Mini Cart Header Mobile -->
                        <span class="bootscore-cart btn btn-link text-secondary pr-0 no-underline">
                            <i class="fas fa-shopping-bag"></i>
                            <?php if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
									$count = WC()->cart->cart_contents_count;
									?><span class="cart-content"><?php 
									if ( $count > 0 ) {
									    ?>
                                <span class="cart-content-count bagde badge-danger"><?php echo esc_html( $count ); ?></span>
                                <?php
									}
									    ?></span>
                            <?php } ?>
                        </span>
                        <!-- Mini Cart Header Mobile End-->
                    </div>
                    <!-- Woocommerce Mobile End -->

                    <!-- Large Top Search Module -->
                    <div class="top-nav-search-large d-none d-lg-block ml-2">
                        <a class="btn btn-outline-secondary" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-search"></i></a>
                        <div class="w-100 mt-n1 dropdown-menu bg-light border-top-0 border-left-0 border-right-0 border-bottom-0 rounded-0" aria-labelledby="dropdownMenuLink">
                            <div class="container pl-2">
                                <?php if ( is_active_sidebar( 'top-nav-search' )) : ?>
                                <div class="w-100">
                                    <?php dynamic_sidebar( 'top-nav-search' ); ?>
                                </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>

                    <!-- User -->
                    <div class="d-none d-lg-inline">
                        <a class="btn btn-outline-secondary ml-2" title="<?php esc_html_e('Account', 'bootscore'); ?>" href="<?php echo get_permalink( wc_get_page_id( 'myaccount' ) ); ?>"><i class="fas fa-user"></i></a>
                    </div>

                    <!-- Mini Cart Header-->
                    <span class="bootscore-cart btn btn-outline-secondary d-none d-lg-block ml-2" title="<?php esc_html_e('View your shopping cart', 'bootscore'); ?>">
                        <i class="fas fa-shopping-bag"></i>
                        <?php if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
									$count = WC()->cart->cart_contents_count;
									?><span class="cart-content"><?php 
									if ( $count > 0 ) {
									    ?>
                            <span class="cart-content-count bagde badge-danger"><?php echo esc_html( $count ); ?></span>
                            <?php
									}
									    ?></span>
                        <?php } ?>
                    </span>
                    <!-- Mini Cart Header End-->

                    <div class="opac"></div>

                    <div class="cart-right" id="cart">

                        <a class="cart-header bg-light d-block p-3 no-underline" data-toggle="cart" href="javascript:void(0)">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-chevron-left"></i> <span class="ml-auto"><?php esc_html_e('Continue shopping' , 'bootscore'); ?></span>
                            </div>
                        </a>

                        <div class="cart-loader bg-white position-absolute d-flex align-items-center justify-content-center">
                            <div class="loader-icon ">
                                <div class="spinner-border text-primary"></div>
                            </div>
                        </div>

                        <div class="cart-list h-100">

                            <h2 class="p-3"><?php esc_html_e('Cart' , 'bootscore'); ?></h2>

                            <div class="widget_shopping_cart_content"><?php woocommerce_mini_cart(); ?></div>
                            
                        </div>

                    </div>

                </div><!-- container -->
                
            </nav>

        </header><!-- #masthead -->
