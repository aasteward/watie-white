      <?php $art = array(); ?>
<?php if ( have_posts() ) : ?>
<ul>
    <?php wp_list_categories( array(
    ) ); ?> 
</ul>
<?php
  // Start the loop.
  while ( have_posts() ) : the_post();
  ?>

  <?php  array_push($art, get_field( 'the_art' )["url"]); ?>

  <?php
  // End the loop.
  endwhile;

endif;
?>

<script hidden class="echo_num"> <?php echo count($art) ?> </script> 

 <div style="width: 75%">
    <img src=<?php echo $art[0] ?> class="slideshow" style="height: 400px">
      <button class="prev"> Prev </button>
      <button class="next"> Next </button>   
  </div>