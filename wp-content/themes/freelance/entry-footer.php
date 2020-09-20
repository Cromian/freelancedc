

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

<footer class="entry-footer">
<span class="tag-links"><?php the_tags(); ?></span>
<?php if ( comments_open() ) { echo '<span class="meta-sep">|</span> <span class="comments-link"><a href="' . esc_url( get_comments_link() ) . '">' . sprintf( esc_html__( 'Comments', 'blankslate' ) ) . '</a></span>'; } ?>
</footer>