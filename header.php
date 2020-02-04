<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and start of the <body> section
 *
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">

    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>

  <header class="page-header container" data-sal="slide-down" data-sal-delay="300" data-sal-duration="1200">
      <div>
        <a href="<?php echo home_url()?>" class="page-header__logo">
          <img src="<?php echo get_field('header_logo', 'options')?>" alt="" />
        </a>
      </div>
      <nav class="page-header__large">
      <?php wp_nav_menu( array( 
        'header-menu' => 'header-menu',
        'container'   => '',
        'items_wrap'      => '<ul  class="menu">%3$s</ul>' 
        ) ); ?>     

      </nav>
      <button class="card-button" ><a href="<?php echo get_field('contact_button', 'options')['url']?>"><?php echo get_field('contact_button', 'options')['title']?></a></button>
      <button class="hamburger">
        <span>Menu</span>
      </button>
     
    </header>
    <main  >
      <nav class="page-header__nav">
       
        <?php wp_nav_menu( array( 
        'header-menu' => 'header-menu',
        'container'   => '',
        'items_wrap'      => '<ul  class="page-header__items">%3$s</ul>' 
        ) ); ?>     

      </nav>
