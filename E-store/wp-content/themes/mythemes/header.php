<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />  
  <meta http-equiv="X-UA-Conpatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="profile" href="http://gmpg.org/xfn/11" />
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <script src="https://kit.fontawesome.com/a08d068640.js" crossorigin="anonymous"></script>
     <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
    <title><?php echo get_bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<section class="topbar">
        <div class="container"></div>
    </section>
    <section class="header">
        <div class="container py-5">
          <div class="row">
            <div class="col-md-3">
            <a href="<?php echo home_url();?>">
              <?php
              $custom_logo_id = get_theme_mod( 'custom_logo' );
              $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
               
              if ( has_custom_logo() ) {
                  echo '<img class="img-fluid" src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
              } else {
                  echo '<h1>' . get_bloginfo('name') . '</h1>';
              }
              ?>
              </a>
            </div>
            <div class="col-md-6">
            <form action="" method="get">
               <div class="input-group mb-3">
                  <input name="s"type="text" class="form-control" placeholder="Từ khóa" aria-label="Từ khóa" aria-describedby="basic-addon2">
                  <button type="submit" class="input-group-text" id="basic-addon2"><i class="fab fa-searchengin"></i></span>
                </div>
          </form>
            </div>
            <div class="col-md-3">
            <a type="button" class="btn btn-primary" href="<?php echo wc_get_cart_url(); ?>">
            <i class="fas fa-shopping-bag"></i> <span class="badge bg-danger">    
              <?php echo WC()->cart->get_cart_contents_count(); ?> 
              </span>
            </a>

            </div>
          </div>
        </div>
    </section>
    <section class="mainmenu bg-dark" >
        <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
                <div class="container-fluid">
                    <a class="navbar-brand " href="#">Navbar</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <?php
                      wp_nav_menu( array(
                          'theme_location'    => 'mainmenu',
                          'depth'             => 2,
                          'container'         => 'div',
                          'container_class'   => 'collapse navbar-collapse',
                          'container_id'      => 'bs-example-navbar-collapse-1',
                          'menu_class'        => 'nav navbar-nav',
                          'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                          'walker'            => new WP_Bootstrap_Navwalker(),
                      ) );
                      ?>
                    </div>
                </div>
                </nav>
        </div>
    </section>

