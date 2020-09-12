<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Freelance_DC
 */

?>

</div><!-- #page -->

<footer id="colophon" class="site-footer">
	<div class="site-info">
		<div class="container">
			<div class="social-links">
				<a href="https://join.slack.com/t/freelancedc/shared_invite/zt-criygjfm-4Q33AVW3bOX35o4zvN32bA" target="_blank"><i class="fab fa-slack-hash"></i></a>
				<a href="https://www.facebook.com/groups/freelancedc/" target="_blank"><i class="fab fa-facebook-f"></i></a>
			</div>
			<div class="cc">© <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?></div>
		</div>
	</div><!-- .site-info -->
</footer><!-- #colophon -->
<?php wp_footer(); ?>

</body>
</html>
