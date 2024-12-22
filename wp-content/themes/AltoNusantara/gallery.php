<?php
/**
 * Template Name: Galeri
 */

  get_header();
?>

<section id="gallery-banner" class="bg-overlay overlay-blue">
  <div class="container">
    <div class="row">
      <h1>Gallery</h1>
    </div>
  </div>
</section>
<section id="gallery">
  <div class="container">
    <div class="row">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc non tincidunt nisi. Curabitur sem eros, dapibus non semper a, egestas quis quam. Ut finibus posuere arcu, id tincidunt ligula pharetra consectetur. Duis pretium ornare tellus at tempus. Cras sit amet malesuada ipsum, non eleifend lectus. Sed lectus eros, pretium vel mauris sed, porttitor iaculis magna. Nulla eros orci, malesuada sed feugiat eget, faucibus ac orci.</p>
      <div class="grid">
        <figure class="effect-zoe">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Candi-Borobudur.jpg" />
          <figcaption>
            <h2>Borobudur, <span>Yogyakarta</span></h2>
            <p class="icon-links">
              <a href="#"><span class="icon-heart"></span></a>
              <a href="#"><span class="icon-eye"></span></a>
              <a href="#"><span class="icon-paper-clip"></span></a>
            </p>
            <p class="description">Zoe never had the patience of her sisters. She deliberately punched the bear in his face.</p>
          </figcaption>     
        </figure>
        <figure class="effect-zoe">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Pantai-Kuta.jpg" />
          <figcaption>
            <h2>Pantai Kuta, <span>Bali</span></h2>
            <p class="icon-links">
              <a href="#"><span class="icon-heart"></span></a>
              <a href="#"><span class="icon-eye"></span></a>
              <a href="#"><span class="icon-paper-clip"></span></a>
            </p>
            <p class="description">Zoe never had the patience of her sisters. She deliberately punched the bear in his face.</p>
          </figcaption>
        </figure>
        <figure class="effect-zoe">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Raja-Ampat.jpg" />
          <figcaption>
            <h2>Raja Ampat, <span>Sorong</span></h2>
            <p class="icon-links">
              <a href="#"><span class="icon-heart"></span></a>
              <a href="#"><span class="icon-eye"></span></a>
              <a href="#"><span class="icon-paper-clip"></span></a>
            </p>
              <p class="description">Zoe never had the patience of her sisters. She deliberately punched the bear in his face.</p>
          </figcaption>     
        </figure>
        <figure class="effect-zoe">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Danau-Toba.jpg" />
          <figcaption>
            <h2>Danau Toba, <span>Samosir</span></h2>
            <p class="icon-links">
              <a href="#"><span class="icon-heart"></span></a>
              <a href="#"><span class="icon-eye"></span></a>
              <a href="#"><span class="icon-paper-clip"></span></a>
            </p>
            <p class="description">Zoe never had the patience of her sisters. She deliberately punched the bear in his face.</p>
          </figcaption>
        </figure>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>