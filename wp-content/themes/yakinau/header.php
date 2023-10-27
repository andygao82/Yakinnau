<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php blankslate_schema_type(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:wght@400;600;700;900&display=swap" rel="stylesheet">

<script src="<?= get_template_directory_uri() . '/js/in-view.min.js'?>"></script>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="wrapper" class="hfeed">
  <header id="header" role="banner">
    <div class="container">
      <div class="header-logo"><img src="<?= get_template_directory_uri() . '/images/logo.svg'?>" alt="Yakinau"></div>
      <a href="#" class="link book-link" target="_blank">Book Now</a>
      <nav id="menu" role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement">
      <?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'link_before' => '<span itemprop="name">', 'link_after' => '</span>' ) ); ?>
      </nav>
    </div>
  </header>
  <div id="container">
    <div id="content" role="main">                                                