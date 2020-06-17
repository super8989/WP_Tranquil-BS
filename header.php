<?php
/*
* The header for our theme
*/
?>


<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <!-- Required meta tags -->
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <!-- <link rel="stylesheet" href="css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300;400&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="css/custom.css"> -->


  <!-- <title>Tranquil Spa</title> -->
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> >

  <!-- HEADER -->
  <header>
    <nav class='navbar navbar-expand-md navbar-light bg-light'>
      <a class='navbar-brand' href='<?php echo esc_url( home_url()); ?>'><?php echo get_bloginfo('name'); ?></a>
      <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarNav'>
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- 
      <div class="collapse navbar-collapse justify-content-end" id='navbarNav'>
       <ul class="navbar-nav">
          <li class="nav-item">
            <a href="index.html" class="nav-link">Home</a>
          </li>
          <li class="nav-item">
            <a href="blog.html" class="nav-link">Blog</a>
          </li>
        </ul> 
      </div>
      -->
        <?php 
          wp_nav_menu( array(
            'theme_location'  => 'primary',
            'depth'           => 1, // 1 = no dropdowns, 2 = with dropdowns.
            'container'       => 'div',
            'container_class' => 'collapse navbar-collapse justify-content-end',
            'container_id'    => 'navbarNav',
            'menu_class'      => 'navbar-nav',
            'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
            'walker'          => new WP_Bootstrap_Navwalker(),
          ) );
        ?>
    </nav>

    <section class='container-fluid'>
      <div class="row position-relative d-flex justify-content-center align-items-center text-center">
        <img src="<?php echo esc_url(get_template_directory_uri()) ?>/images/lake.jpg" alt="Lake background" class='header_img'>
        <div class='position-absolute feature-bg'>
          <p class='feature-text'><?php featureText(); ?></p>
        </div>
      </div>
    </section>
  </header>
