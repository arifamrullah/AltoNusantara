<?php get_header(); ?>

<section>
  <div class="container">

    <?php if ( have_posts() ) {
      while ( have_posts() ) {
      the_post();  ?>
      <h2><?php the_title() ?></h2>
      <?php the_content() ?>
    <?php } } ?>

    <?php
    // Slider
    // 3 thumb
    // description
    // cast
    // company that
    // contact us
    ?>
    
  </div>
</section>

<?php get_footer(); ?>