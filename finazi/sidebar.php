<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package finazi
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area">
	<?php dynamic_sidebar( 'sidebar-1' ); 
    
    if ( is_active_sidebar( 'subscribe-widget' ) ) {
        dynamic_sidebar( 'subscribe-widget' );
    }
    ?>
</aside><!-- #secondary -->
