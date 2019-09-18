
<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?>
<?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>
			</div><!-- .row -->
		</div><!-- .container -->
	</div><!-- #content -->
    <?php get_template_part( 'footer-widget' ); ?>
	<footer id="colophon" class="site-footer <?php echo wp_bootstrap_starter_bg_class(); ?>" role="contentinfo">
		<div class="container">
			<div class="row">
			<div class="container">
				<div class="row">
					<div class="col"></div>
					<div id="copyright-text" class="col">
					Copyright © 2019
					</div>
					<div class="col"></div>
				</div>
		</div>
			</div>
		</div>
	</footer><!-- #colophon -->
<?php endif; ?>
<?php wp_footer(); ?>
</body>
</html>



		