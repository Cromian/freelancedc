<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Freelance_DC
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<?php freelance_dc_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
      the_content();
      wp_link_pages(
        array(
          'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'freelance_dc' ),
          'after'  => '</div>',
        )
      );
		?>
	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'freelance_dc' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post( get_the_title() )
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->

<!-- Check if author bio is set -->
<?php 
  $name = get_field('name');
  if ($name) { 
?>

<div class="author_bio_box">
  <div class="well">
    <div class="author_picture">
      <?php $image = get_field('author_picture'); ?>
      <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
    </div>
    
    <div class="author_info">
      <h2><?php the_field('name'); ?></h2>
      <div class="sub_title"><?php the_field('title'); ?></div>
      <p><?php the_field('bio'); ?></p>
      <div class="author_links">
				<a href="<?php the_field('website_link'); ?>"><i class="fas fa-link"></i></a>
				<a href="<?php the_field('facebook_link'); ?>"><i class="fab fa-facebook-f"></i></a>
        <a href="<?php the_field('twitter_link'); ?>"><i class="fab fa-twitter"></i></a>
      </div>

    </div>
  </div>
</div>

<?php } ?>


