<?php
/**
 * Template Name: Beranda
 */

  get_header();

  $menu_name = 'header-menu';

  if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[$menu_name] ) ) {
    $menu = wp_get_nav_menu_object( $locations[$menu_name] );
    $menu_items = wp_get_nav_menu_items( $menu->term_id );
  }

  foreach ( $menu_items as $menu_item ) {
    if ( $menu_item->title == "Beranda" ) {
      $menu_item_ID = $menu_item->ID;
    }
    // } elseif ( $menu_item->title == "Kontak" ) {
    //   $menu_item_ID = $menu_item->ID;
    // } elseif ( $menu_item->title == "Tentang" ) {
    //   $menu_item_ID = $menu_item->ID;
    // }
  }
?>

<script type="text/javascript">
  jQuery(function($) {
    $("#menu-item-<?php echo $menu_item_ID; ?>").addClass("menu__item--current");
  });
</script>
<section class="welcome-slider">
  <div class="container">
    <!-- <div class="v-center-flex"> -->
      <h1>Alto Nusantara</h1>
      <!-- <hr class="divider"> -->
      <p>Biro Perjalanan Wisata Alam &amp; Budaya</p>
    <!-- </div> -->
  </div>
</section>
<section class="slider-top">
  <?php masterslider(1); ?>
</section>
<section id="desc">
  <div class="container">
    <div class="row">
      <div class="pull-left w50">
        <div class="bg-left">
          <div class="v-center-flex">
            <h1>ALTO <span>NUSANTARA</span></h1>
            <hr class="divider">
          </div>
        </div>
      </div>
      <div class="pull-left w50">
        <div class="bg-right">
          <div class="v-center-flex">
            <p>Alto Nusantara adalah lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum, dui nec molestie suscipit, nulla augue commodo lectus, eu ultricies ipsum turpis nec tellus. Nam rhoncus pharetra nisl, ornare posuere mi luctus nec. Sed ipsum lacus, fermentum sit amet lobortis in, vulputate vel arcu.</p>
            <br>
            <p>Alto Nusantara adalah lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum, dui nec molestie suscipit, nulla augue commodo lectus, eu ultricies ipsum turpis nec tellus. Nam rhoncus pharetra nisl, ornare posuere mi luctus nec. Sed ipsum lacus, fermentum sit amet lobortis in, vulputate vel arcu.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="facy" class="bg-overlay overlay-blue">
  <div class="container">
    <div class="row">
      <h1>Kami Yang Terbaik</h1>
      <hr class="divider">
      <div class="pull-left w25 hi-icon-wrap hi-icon-effect-3 hi-icon-effect-3b">
        <div class="hi-icon acco"></div>
        <h3>Akomodasi</h3>
        <hr class="divider divider-sm">
        <p>Nunc et fermentum orci. Sed tincidunt urna sed lacus pretium, a faucibus neque maximus.</p>
      </div>
      <div class="pull-left w25 hi-icon-wrap hi-icon-effect-3 hi-icon-effect-3b">
        <div class="hi-icon trans"></div>
        <h3>Transportasi</h3>
        <hr class="divider divider-sm">
        <p>Ut quis rhoncus nisl. Ut in diam aliquam, consectetur ex at, mollis neque.</p>
      </div>
      <div class="pull-left w25 hi-icon-wrap hi-icon-effect-3 hi-icon-effect-3b">
        <div class="hi-icon agent"></div>
        <h3>Tour Leader</h3>
        <hr class="divider divider-sm">
        <p>Etiam at lacus ipsum. Nulla in diam sagittis, faucibus lectus in, mollis sapien.</p>
      </div>
      <div class="pull-left w25 hi-icon-wrap hi-icon-effect-3 hi-icon-effect-3b">
        <div class="hi-icon plan"></div>
        <h3>Jadwal Kegiatan</h3>
        <hr class="divider divider-sm">
        <p>Nulla et iaculis tellus. Suspendisse lectus diam, auctor laoreet eleifend et, placerat nec risus.</p>
      </div>
    </div>
  </div>
</section>
<section id="desty" class="">
  <div class="wrapper bg-overlay overlay-white">
    <div class="container">
      <h1>Trip Rekomendasi</h1>
      <hr class="divider">
      <div class="grid">
        <figure class="effect-winston">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Candi-Borobudur.jpg" />
          <figcaption>
            <h2>Borobudur, <span>Yogyakarta</span></h2>
            <p>
              <a href="#"><i class="fa fa-fw fa-view-o"></i></a>
              <a href="#"><i class="fa fa-fw fa-book-o"></i></a>
            </p>
          </figcaption>     
        </figure>
        <figure class="effect-winston">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Pantai-Kuta.jpg" />
          <figcaption>
            <h2>Pantai Kuta, <span>Bali</span></h2>
            <p>
              <a href="#"><i class="fa fa-fw fa-view-o"></i></a>
              <a href="#"><i class="fa fa-fw fa-book-o"></i></a>
            </p>
          </figcaption>
        </figure>
        <figure class="effect-winston">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Raja-Ampat.jpg" />
          <figcaption>
            <h2>Raja Ampat, <span>Sorong</span></h2>
            <p>
              <a href="#"><i class="fa fa-fw fa-view-o"></i></a>
              <a href="#"><i class="fa fa-fw fa-book-o"></i></a>
            </p>
          </figcaption>     
        </figure>
        <figure class="effect-winston">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Danau-Toba.jpg" />
          <figcaption>
            <h2>Danau Toba, <span>Samosir</span></h2>
            <p>
              <a href="#"><i class="fa fa-fw fa-view-o"></i></a>
              <a href="#"><i class="fa fa-fw fa-book-o"></i></a>
            </p>
          </figcaption>
        </figure>
      </div>
      <div class="button">
        <a href="#">Lihat Semua Destinasi</a>
      </div>
    </div>
  </div>
  <div class="wrapper">
    <div class="container">
      <div class="desty-book">
        <h4>Kunjungi Wisata Terbaik Indonesia</h4>
        <h1>Raja Ampat dengan keindahan bawah laut</h1>
        <div class="button">
          <a href="#">Pesan Sekarang</a>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>