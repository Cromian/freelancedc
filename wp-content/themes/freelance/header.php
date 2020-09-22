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

  <nav class="main-navigation">
    <div id="mobile-nav"><i class="fas fa-bars"></i></div>
    <div class="nav-well" id="nav-menu">
      <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
    </div>
  </nav>
</header>

<div id="container">