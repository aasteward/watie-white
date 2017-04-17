<?php get_header(); ?>
    <div class="page-wrapper">
      <div class="side-content">
        <?php get_sidebar(); ?>
      </div>
      <div class="main-content">
        <div class="slidebox grid">
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

              <?php if ( in_category( 'mural' )) : ?>

                <img src="<?php echo $art ?>" class="slideshow mural">

                <div class="slideshow_info_display">
                  <ul class="publicity titillium">
                    <li class="bold"><?php echo $title ?></li> <br>
                    <li><?php echo $series ?></li> <br>
                    <li><?php echo $media ?></li> </br>
                    <li><?php echo $size ?></li> <br>
                    <li><?php echo $year ?></li> <br>
                  </ul>
                </div>
                
              <?php else : ?>
                <img src="<?php echo $art ?>" class="slideshow">

                <div class="slideshow_info_display">
                  <ul class="publicity titillium">
                    <li class="bold"><?php echo $title ?></li> <br>
                    <li><?php echo $series ?></li> <br>
                    <li><?php echo $media ?></li> </br>
                    <li><?php echo $size ?></li> <br>
                    <li><?php echo $year ?></li> <br>
                  </ul>
                </div>
              <?php endif; ?>
              <?php
              // End the loop.
            endwhile;

          endif;
          ?>

        </div>

        <div class="gallery"></div>
        <div class="prev" data-direction="prev"></div>
        <div class="next" data-direction="next"></div> 
      </div>
    </div>
  </div>
</body>
<?php get_footer(); ?>
