<?php get_header(); ?>
    <div class="page-wrapper">
      <div class="side-content">
        <?php get_sidebar(); ?>
      </div>
      <div class="main-content">
        <?php if ( have_posts() ) : ?>
        <?php
        // Start the loop.
        while ( have_posts() ) : the_post();
        ?>

        <?php $art = get_field( 'the_art' )["url"]; ?>
        <?php $title = get_field( 'title' ) ?>
        <?php $series = get_field( 'series' ) ?>
        <?php $media = get_field( 'media' ) ?>
        <?php $size = get_field( 'size' ) ?>
        <?php $year = get_field( 'year' ) ?>

        <div style="width: 75%">
          <img src=<?php echo $art ?> class="slideshow" style="display: none; height: 400px">

          <div class="slideshow_info_display" style="display: none;">
          <?php echo $title ?>
          <?php echo $series ?>
          <?php echo $media ?>
          <?php echo $size ?>
          <?php echo $year ?>
          </div>

          <?php
          // End the loop.
          endwhile;

          endif;
          ?>

          <button class="prev" data-direction="prev"> Prev </button>
          <button class="next" data-direction="next"> Next </button> 
        </div>
      </div>
    </div>
  </div>
</body>
<?php get_footer(); ?>
