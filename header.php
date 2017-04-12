<?php?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'utf-8' ); ?>" />
        <title><?php wp_title(); ?></title> 
        <link href="<?php bloginfo('template_directory'); ?>/style.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="<?php bloginfo('template_directory'); ?>/menu-toggler.js"></script>
        <script src="<?php bloginfo('template_directory'); ?>/slideshow.js"></script>
        <?php wp_head(); ?>
    </head>

    <body>

	<div class="top-menu-wrapper">
		<div class="top-menu">
			<ul class="nav-list josefin">
				<li class="nav-item"><a href="/">Home</a></li>
				<li class="nav-item"><a href="/category/public-work">Public Art</a></li>
				<li class="nav-item"><a href="/category/studio-work">Studio Work</a></li>
				<li class="nav-item"><a href="/cv">CV</a></li>
				<li class="nav-item"><a href="/contact">Contact</a></li>
				<li class="nav-item"><a href="/page/press">Press</a></li>
			</ul>
		</div>
	</div>

	<div class="else-wrapper">
		<div class="mobile-toggle">
			<div class="mobile-menu">
				<div class="logo">
					<img src="#" href="/" alt="Watie White">
				</div>
			</div>

			<div class="menu-button">
				<a class="btn toggler josefin upcase">Menu</a>
			</div>
		</div>
