<?php get_header(); ?>
<main id="content">
<header class="page-header">
  <h1 class="entry-title">Blog</h1> 
</header>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'entry' ); ?>

  <div class="wp-block-separator"></div>

<?php endwhile; endif; ?>

<?php get_template_part( 'nav', 'below' ); ?>
</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>