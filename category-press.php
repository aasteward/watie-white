<?php get_header(); ?>

		<div class="page-wrapper">

			<div class="side-content">
				<?php get_sidebar(); ?>
			</div>

			<div class="main-content">
				<div class="press-spacer">
				</div>
				<?php if ( have_posts() ) : ?>

				  <?php
				  // Start the loop.
				  while ( have_posts() ) : the_post();
				  ?>

				    <a class="press" href="<?php the_content(); ?>"><span class="press publication"><?php echo the_field( "publication" ); ?></span> <?php echo the_title(); ?>, <?php the_date( 'y-m-d', '', '', true ) ?></a>
				    <br>

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