<?php get_header(); ?>

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
	</div>

</body>

<?php get_footer(); ?>