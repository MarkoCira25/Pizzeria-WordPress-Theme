<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Pizzeria</title>
    <?php wp_head(); ?>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <body>

  <header class="site-header">
    <div class="container">

      <div class="logo">
        <a href="<?php echo esc_url(home_url('/')  ) ; ?>">
          <img src="<?php echo get_template_directory_uri() ?>/img/logo.svg" class="logoimage">
        </a>
      </div><!-- logo -->
      <div class="header-information">
        <div class="socials">
            <?php
              $args = array(
                'theme_location'  => 'social-menu',
                'container'       => 'nav',
                'conatiner_class' => 'socials1',
                'container_id'    => 'socials',
                'link_before'     => '<span class="sr-text">',
                'link_after'      => '</span>'
              );
              wp_nav_menu($args);
             ?>
        </div><!-- socials -->
        <div class="address">
          <p>Jovana popovica 10,Nova Pazova Srbija</p>
          <p>Phone Number:+381-62-17-44-950</p>
        </div>
      </div><!-- header-information -->
    </div><!-- container -->
  </header>
  <div class="main-manu">
      <div class="mobile-menu">
          <a href="#" class="mobile"><i class="fa fa-bars"> MENU</i></a>
      </div>

      <div class="navigation container">
        <?php
          $args = array(
            'theme_location' => 'header-menu',
            'container'      => 'nav',
            'container_class'=> 'site-nav'
          );
          wp_nav_menu( $args);

         ?>
      </div>
  </div>
