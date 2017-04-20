<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <title>
      <?php if (is_home()){bloginfo('name');}
        else
        { ?>
        <?php bloginfo('name');} ?>
    </title>
    <meta charset="<?php bloginfo( 'utf-8' ); ?>" />
    <title><?php wp_title(); ?></title> 
    <link href="<?php bloginfo('template_directory'); ?>/style.css" rel="stylesheet">
    <?php wp_head(); ?>
  </head>

  <?php if ( have_posts() ) : ?>
    <?php
    // Start the loop.
    while ( have_posts() ) : the_post();
  ?>

  <div class="landing-image" style="background-image: url(<?php the_field( 'background_image' ); ?>);">
    <div id="button-wrapper">
      <a href="<?php echo get_category_link(get_field( 'button_link' )); ?>" class="btn josefin landing-button">Watie White</a>
    </div>
  </div>

  <?php
    endwhile;
    endif;
  ?>

<?php get_footer(); ?>