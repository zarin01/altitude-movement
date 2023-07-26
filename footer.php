<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Genesis Block Theme
 */

?>

	</div><!-- #content -->
</div><!-- #page .container -->

<footer id="colophon" class="site-footer">
	<div class="container">
		<?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
			<div class="footer-widgets">
			<h2 class="screen-reader-text"><?php esc_html_e( 'Footer', 'genesis-block-theme' ); ?></h2>
				<?php if ( is_active_sidebar( 'footer-1' ) ) { ?>
					<div class="footer-column">
						<div class="footer-background" >
							<?php dynamic_sidebar( 'footer-1' ); ?>
						</div>
					</div>
				<?php } ?>

			</div>
		<?php endif; ?>

		<div class="footer-bottom">
					<?php echo genesis_block_theme_filter_footer_text(); ?>
					<p class='footer-text'>
						750 Garden of the Gods Rd, Suite 125, Colorado Springs, CO 80907
					</p>
		</div><!-- .footer-bottom -->
	</div><!-- .container -->
</footer><!-- #colophon -->

<?php wp_footer(); ?>

</body>
</html>
