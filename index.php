<?php if ( have_posts() ) : ?>
<ul>
    <?php wp_list_categories( array(
    ) ); ?> 
</ul>
  <?php
  // Start the loop.
  while ( have_posts() ) : the_post();
  ?>

    <?php the_title(); ?> 

    <?php echo get_field( 'the_art' )["url"]; ?>

    <?php the_content(); ?>

  <?php
  // End the loop.
  endwhile;

endif;
?>