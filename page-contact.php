<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'utf-8' ); ?>" />
    <title><?php wp_title(); ?></title> 
    <link href="<?php bloginfo('template_directory'); ?>/style.css" rel="stylesheet">
    <?php wp_head(); ?>
  </head>

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

		  <div class="contact img-block">
				<center><img src="<?php the_field( 'contact_photo' ); ?>" alt="Watie White"></center>
			</div>
			<br>

				<?php the_content(); ?>

			<?php
		    endwhile;
		    endif;
		  ?>

		</div>
	</div>

<?php get_footer(); ?>