<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Freelance_DC
 */

get_header();
?>
<div class="banner" style="background-image: url(<?php the_field('background_image'); ?>)">
  <div class="container">
    <h1><?php the_field('title'); ?></h1>
    <div class="text"><?php the_field('body'); ?></div>
    <a href="<?php the_field('call_to_action_link'); ?>" class="btn"><?php the_field('call_to_action_text'); ?></a>
  </div>
</div>
	<!-- <main id="primary" class="site-main"> -->
  
		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

		endwhile; // End of the loop.
		?>

	<!-- </main> -->
	<!-- #main -->

<?php
get_sidebar();
get_footer();
