<?php

if ( ! function_exists( 'altonusantara_setup' ) ) :
function altonusantara_setup() {
  add_theme_support( 'automatic-feed-links' );
  add_theme_support( 'title-tag' );

  add_theme_support( 'post-thumbnails' );
  set_post_thumbnail_size( 825, 510, true );

  register_nav_menu('header-menu',__( 'Header Menu' ));

  add_theme_support( 'html5', array(
    'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
  ) );

  add_theme_support( 'post-formats', array(
    'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
  ) );
}
endif;
add_action( 'after_setup_theme', 'altonusantara_setup' );

function altonusantara_widgets_init() {
  register_sidebar( array(
    'name'          => __( 'Widget Area', 'altonusantara' ),
    'id'            => 'sidebar-1',
    'description'   => __( 'Add widgets here to appear in your sidebar.', 'altonusantara' ),
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget'  => '</aside>',
    'before_title'  => '<h2 class="widget-title">',
    'after_title'   => '</h2>'
  ) );
}
add_action( 'widgets_init', 'altonusantara_widgets_init' );

function altonusantara_scripts() {
  // CSS
  wp_enqueue_style( 'alto-main', get_stylesheet_uri() );
  wp_enqueue_style( 'alto-custom', get_template_directory_uri() . '/assets/css/custom.css', array( 'alto-main' ), '20170202' );

  if ( is_page( 'galeri' ) ) {
    wp_enqueue_style( 'hover-effect-1', get_template_directory_uri() . '/assets/css/hover-effect/set1.css', array( 'alto-main' ), '20170225'  );
  } else {
    wp_enqueue_style( 'hover-effect-2', get_template_directory_uri() . '/assets/css/hover-effect/set2.css', array( 'alto-main' ), '20170204'  );
  }
  
  wp_enqueue_style( 'line-menu', get_template_directory_uri() . '/assets/css/line-menu/component.css', array( 'alto-main' ), '20170204'  );
  wp_enqueue_style( 'icon-hover', get_template_directory_uri() . '/assets/css/icon-hover/component.css', array( 'alto-main' ), '20170206'  );
  wp_enqueue_style( 'animated-header', get_template_directory_uri() . '/assets/css/animated-header/component.css', array( 'alto-main' ), '20170208'  );
  wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/fonts/font-awesome-4.2.0/css/font-awesome.min.css', array( 'alto-main' ), '4.2.0'  );

  // JS
  wp_enqueue_script( 'alto-jquery', get_template_directory_uri() . '/assets/js/jquery.js', array( 'jquery' ), '1.12.4' );
  wp_enqueue_script( 'alto-script', get_template_directory_uri() . '/assets/js/main.js', array( 'jquery' ), '20170207' );
  wp_enqueue_script( 'alto-SmoothScroll', get_template_directory_uri() . '/assets/js/SmoothScroll.js', array( 'jquery' ), '0.9.9' );
  wp_enqueue_script( 'animated-header-js', get_template_directory_uri() . '/assets/js/animated-header/cbpAnimatedHeader.min.js', array( 'jquery' ), '1.0.0', true );
  wp_enqueue_script( 'classie-js', get_template_directory_uri() . '/assets/js/animated-header/classie.js', array( 'jquery' ), '20170208', true );
}
add_action( 'wp_enqueue_scripts', 'altonusantara_scripts' );

function altonusantara_wp_title( $title, $sep) {
  global $paged, $page;

  if ( is_feed() ) {
    return $title;
  }

  $title .= get_bloginfo( 'name' );

  $site_desc = get_bloginfo( 'description', 'display' );
  if ( $site_desc && ( is_home() || is_front_page() ) )
    $title = "$title $sep $site_desc";

  if ( $paged >= 2 || $page >= 2 )
    $title = "$title $sep " . sprintf( __( 'Page %s', 'altonusantara' ), max( $paged, $page ) );

  return $title;
}
add_filter( 'wp_title', 'altonusantara_wp_title', 10, 2 );

function add_menuclass( $ulclass ) {
  return preg_replace( '/<a /', '<a class="menu__link"', $ulclass );
}
add_filter( 'wp_nav_menu', 'add_menuclass' );

?>