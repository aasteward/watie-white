<?php?>

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
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta property="og:url" content="https://www.http://giant-stamp.flywheelsites.com/">
	    <meta property="og:title" content="Watie White">
	    <meta property="og:description" content="Painter, printmaker, public artist, and Bears fan.">
	    <meta property="og:image" content="http://giant-stamp.flywheelsites.com/wp-content/uploads/2017/04/New-Nebraskans-Indian-Hills-inverview.jpg">
        <title><?php wp_title(); ?></title> 
        <link href="<?php bloginfo('template_directory'); ?>/style.css" rel="stylesheet">
        <script src="<?php bloginfo('template_directory'); ?>/menu-toggler.js"></script>
        <script src="<?php bloginfo('template_directory'); ?>/slideshow.js"></script>
        <script type="text/javascript" src="https://unpkg.com/masonry-layout@4.1.1/dist/masonry.pkgd.min.js"></script>
        <script src="https://unpkg.com/imagesloaded@4.1/imagesloaded.pkgd.min.js"></script>

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
