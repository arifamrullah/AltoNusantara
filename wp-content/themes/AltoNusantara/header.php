<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php wp_title( '|', true, 'right' ); ?></title>
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" type="image/x-icon">
  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" type="image/x-icon">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <header>
    <section class="nav nav-menu-top">
      <div class="container">
        <div class="cbp-af-header">
          <div class="cbp-af-inner">
            <div class="logo-top pull-left">
              <a href="<?php echo get_home_url(); ?>" class="page-scroll"><img src="<?php echo get_template_directory_uri() ?>/assets/images/logo.png"></a>
            </div>
            <nav class="menu menu-top menu--shylock">
              <?php
                $args = array(
                  'theme_location' => 'header-menu',
                  'menu_class' => 'pull-right menu__list',
                  'depth' => 1
                );

                wp_nav_menu( $args );
                add_menuclass( 'menu-main-menu' );
              ?>
            </nav>
          </div>
        </div>
      </div>
    </section>
  </header>