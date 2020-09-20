<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="viewport" content="width=device-width" />
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="wrapper" class="hfeed">
<header id="header" class="site-header">

<div class="site-branding">
			<?php the_custom_logo();?>
		</div>

  <nav id="menu" class="main-navigation">
    <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
  </nav>
</header>

<div id="container">