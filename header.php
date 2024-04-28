<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="wrapper" class="hfeed">
<header id="header" role="banner">
  

<div id="branding">
  <div id="site-title" itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
    <?php if(has_custom_logo()) : ?><?php the_custom_logo(); ?>
    <?php else : ?>
    <h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
    <?php endif; ?>
  </div>

  <nav id="menu" role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement">
  <?php 
  wp_nav_menu(
    [
      "theme_location"=>"main-menu",
      "container"=>"nav",
      "container_id"=>"menu",
      "menu_class"=>"menu",
    ]
  ); 
  ?>
  </nav>
</div>
</header>
<div id="container">
<main id="content" role="main">