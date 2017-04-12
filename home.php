<?php?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'utf-8' ); ?>" />
        <title><?php wp_title(); ?></title> 
        <link href="<?php bloginfo('template_directory'); ?>/style.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <?php wp_head(); ?>
    </head>

<div class="landing-image">
	<div id="button-wrapper">
		<a href="/cv" class="btn josefin landing-button">Watie White</a>
	</div>
</div>

<?php get_footer(); ?>