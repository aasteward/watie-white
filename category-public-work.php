 <head>
  <script src="<?php bloginfo('template_directory'); ?>/slideshow.js"></script>
 </head>
      <?php $counter = 0; ?>
<?php if ( have_posts() ) : ?>

<?php
  // Start the loop.
  while ( have_posts() ) : the_post();
  ?>

  <?php $art = get_field( 'the_art' )["url"]; ?>

  <div style="width: 75%">
  <img src=<?php echo $art?> class="slideshow" style="height: 400px; display: none;">
  
  <?php
  // End the loop.
  endwhile;

endif;
?>

<button class="prev"> Prev </button>
<button class="next"> Next </button> 
</div>
<!-- 
 <p hidden class="echo_num"> <?php echo htmlspecialchars( count($art) ); ?> </p>

 <div style="width: 75%">
    <img src=<?php echo $art[0] ?> class="slideshow" style="height: 400px">
      <button class="prev"> Prev </button>
      <button class="next"> Next </button>   
  </div> -->