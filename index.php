<?php get_header(); ?>

<body>

	<div class="top-menu-wrapper">
		<div class="top-menu">
			<ul class="nav-list josefin">
				<li class="nav-item"><a href="/">Home</a></li>
				<li class="nav-item"><a href="/category/public-work">Public Art</a></li>
				<li class="nav-item"><a href="/category/studio-work">Studio Work</a></li>
				<li class="nav-item"><a href="/cv">CV</a></li>
				<li class="nav-item"><a href="/contact">Contact</a></li>
				<li class="nav-item"><a href="/press">Press</a></li>
			</ul>
		</div>
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

			    <?php the_content(); ?>

			  <?php
			  // End the loop.
			  endwhile;

			endif;
			?>
		</div>
	</div>

</body>

<?php get_footer(); ?>