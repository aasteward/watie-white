<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <title>
      <?php if (is_home()){bloginfo('name');}
      else
      { ?>
      <?php bloginfo('name');} ?> | <?php echo strtoupper(wp_title('', false, '')); ?>
    </title>
    <meta charset="<?php bloginfo( 'utf-8' ); ?>" />
    <title><?php wp_title(); ?></title> 
    <link href="<?php bloginfo('template_directory'); ?>/style.css" rel="stylesheet">
    <script src="<?php bloginfo('template_directory'); ?>/menu-toggler.js"></script>
    
    <?php wp_head(); ?>
  </head>

  <body>

		<div class="top-menu-wrapper">
			<div class="top-menu">
				<ul class="nav-list josefin">

					<?php 
						wp_list_categories( array (
							'title_li' => '',
							'orderby' => 'id',
							'exclude' => [get_cat_ID( 'Press' ), get_cat_ID( 'Mural' )],
							'hide_empty' => 0,
							'depth' => 1
						) );
					?>

					<?php
					wp_list_pages( array (
						'title_li' => '',
						'orderby' => 'id',
						'exclude' => '145',
						'hide_empty' => 0,
						'depth' => 1
						) );
					?>
					
				</ul>
			</div>
		</div>

		<div class="else-wrapper">
			<div class="mobile-toggle">
				<div class="mobile-menu">
					<div class="mobile-logo">
						<img class="logo mobile-logo toggler" src="/wp-content/uploads/2017/04/mobile-watie-header.png" href="/" alt="Watie White">
					</div>
				</div>

				<!-- <div class="menu-button">
					<a class="btn toggler josefin upcase">Menu</a>
				</div> -->
			</div>

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
						<img src="<?php the_field( 'contact_photo' ); ?>" alt="Watie White">
					</div>
					<br>

						<?php the_content(); ?>

					<?php
				    endwhile;
				    endif;
				  ?>

				</div>
			</div>
		</div>
	</body>

<?php get_footer(); ?>