<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<header>

<?php if ( is_singular() ) { ?>

  <h1 class="entry-title"><?php the_title(); ?></h1>

<?php } else { ?> 

  <h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>

<?php } ?>


</header>
<?php get_template_part( 'entry', ( is_front_page() || is_home() || is_front_page() && is_home() || is_archive() || is_search() ? 'summary' : 'content' ) ); ?>
</article>
<?php if ( is_singular() ) { get_template_part( 'entry-footer' ); } ?>
