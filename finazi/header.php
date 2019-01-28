<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package finazi
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'finazi' ); ?></a>

	<header id="masthead" class="site-header">
        <div class="top">
            <div class="container">
                <div class="top-bar">
                    <?php
                    $left = get_option( 'topbar_left' );
                    $right = get_option( 'topbar_right' );
                    if ( '' != $left || '' != $right ) {
                        ?>
                        <div class="header-language">
                            <?php echo wp_kses_post( get_option( 'topbar_left' ) ); ?>
                        </div>
                        <div class="header-contact">
                            <?php echo wp_kses_post( get_option( 'topbar_right' ) ); ?>
                        </div>
                        <?php
                    }
                    ?>
                    <div class="header-content">
                        <?php echo wp_kses_post( get_option( 'hotline' ) ); ?>
                    </div>
                </div>
            </div>
        </div>

    	<div class="container container_header">
            <div class="site-branding">
                <?php
                the_custom_logo();
                if ( is_front_page() && is_home() ) :
                    ?>
                    <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                    <?php
                else :
                    ?>
                    <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                    <?php
                endif;
                $finazi_description = get_bloginfo( 'description', 'display' );
                if ( $finazi_description || is_customize_preview() ) :
                    ?>
                    <p class="site-description"><?php echo $finazi_description; /* WPCS: xss ok. */ ?></p>
                <?php endif; ?>
            </div>

            <?php
            wp_nav_menu( array(
                'theme_location' => 'menu-1',
                'container'      => 'nav',
                'menu_class'     => 'primary-menu menu',
            ) );
            ?>

            <button id="pull"><a href="#menu" id="toggle"><span></span></a></button>
            
            <div class="search">
                <button class="fa fa-search search-button demo-btn"></button>
            </div>
        </div>

        <div class="banner" style="<?php finazi_page_header_background(); ?>">
            <div class="container">

                <?php finazi_title_blog(); ?>
                <?php finazi_description_blog(); ?>

            </div>
        </div>
	</header>

	<div id="content" class="site-content">
