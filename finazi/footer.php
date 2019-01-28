<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package finazi
 */

?>

	</div><!-- #content -->

    <div class="quote-footer" style="<?php finazi_quote_footer_style(); ?>" style="<?php finazi_page_footer_background(); ?>">
        <div class="container">
            <p><?php esc_html_e( 'We help you to create the best business plan, resource & execution!', 'finazi' ); ?></p>
            <button class="quote-btn"> <?php esc_html_e( 'GET FREE QUOTE', 'finazi' ); ?> </button>
        </div>
    </div>

	<footer id="colophon" class="site-footer" style="<?php finazi_footer_style(); ?>">
		<div class="site-info">
            <div class="join-now" style="<?php finazi_page_footer_background(); ?>">
                <div class="footer-widget">
                    <div class="container">
                        <?php
                        if ( is_active_sidebar( 'footer-widget' ) ) {
                            dynamic_sidebar( 'footer-widget' );
                        }
                        ?>
                    </div>
                </div>
            </div>

			<div class="ft-end" style="<?php finazi_footer_end_style(); ?>">
                <div class="container">
                    <div class="ft-copyright">
                        <div class="copyright">
                            <?php echo wp_kses_post( get_option( 'footer_left', 'Copyright' ) ); ?>
                        </div>
                        <div class="FAQ">
                            <?php echo wp_kses_post( get_option( 'footer_right', 'FAQ' ) ); ?>
                        </div>
                    </div>
                </div>
            </div>
		</div>
	</footer>
</div>

<div class="menu-overlay"></div>

<div class="modal">
    <div class="modal-view">
        <div class="modal-header">
            <div class="modal-title"><?php echo wp_kses_post( 'Search Page' , 'finazi' ); ?></div>
            <button class="modal-close">x</button>
        </div>
        <div class="modal-content">
            <?php get_search_form(); ?>
        </div>
        <div class="modal-action">
            <button class="btn modal-close"><?php echo wp_kses_post( 'Close' , 'finazi' ); ?></button>
            <button class="btn modal-close modal-save"><?php echo wp_kses_post( 'Search' , 'finazi' ); ?></button>
        </div>
    </div>
</div>

<?php wp_footer(); ?>

</body>
</html>
