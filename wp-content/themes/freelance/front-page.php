<?php get_header(); ?>
<main id="content">

<div class="banner" style="background-image: url(<?php the_field('background_image'); ?>)">
  <div class="container">
    <h1><?php the_field('title'); ?></h1>
    <div class="text"><?php the_field('body'); ?></div>
    <a href="<?php the_field('call_to_action_link'); ?>" class="btn"><?php the_field('call_to_action_text'); ?></a>
  </div>
</div>

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header class="header">
  <h1 class="entry-title"><?php the_title(); ?></h1> 
  </header>
  <div class="entry-content">
  <?php the_content(); ?>
    <div class="entry-links"><?php wp_link_pages(); ?></div>
  </div>
  </article>
  <?php if ( comments_open() && ! post_password_required() ) { comments_template( '', true ); } ?>
  <?php endwhile; endif; ?>
</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>