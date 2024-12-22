<?php
/**
 * Template Name: Tour
 */

  get_header();
?>

<section id="tour-banner" class="bg-overlay overlay-blue">
  <div class="container">
    <div class="row">
      <h1>Tour</h1>
    </div>
  </div>
</section>
<section id="tour">
  <div class="container">
    <div class="row">
      <div class="pull-left w66">
        <h1>Kemana Anda Akan Pergi?</h1>
        <hr class="divider left-0"/>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc non tincidunt nisi. Curabitur sem eros, dapibus non semper a, egestas quis quam. Ut finibus posuere arcu, id tincidunt ligula pharetra consectetur. Duis pretium ornare tellus at tempus. Cras sit amet malesuada ipsum, non eleifend lectus. Sed lectus eros, pretium vel mauris sed, porttitor iaculis magna. Nulla eros orci, malesuada sed feugiat eget, faucibus ac orci.</p>
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
          <!-- <figure class="effect-winston">
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
          </figure> -->
        </div>
        <div class="pagination">
        </div>
      </div>
      <div class="pull-left w33">
        <div class="bg-best-tour">
          <h2>Penawaran Terbaik</h2>
          <hr class="divider divider-sm left-0">
          <h3>Pesona Raja Ampat</h3>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/raja-ampat-squared.jpg" />
          <br>
          <p>Nam aliquam nisl id enim ornare, nec bibendum libero semper. Etiam ultricies magna sit amet mi bibendum, vitae tempus dui rutrum. Suspendisse potenti. Donec nec est hendrerit, fermentum odio vitae, imperdiet justo. Vivamus porttitor fermentum urna eu egestas. Nam ut iaculis elit. Fusce sollicitudin dolor augue, eget imperdiet metus malesuada sit amet. Vestibulum vitae mattis augue.</p>
          <div class="button">
            <a href="">Detail</a>
          </div>
          <div class="button">
            <a href="">Pesan Sekarang</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>