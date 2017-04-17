<div class="content-wrapper">
	<div class="sidebar-wrapper">

		<div class="logo">
			<a href="/"><img class="logo" src="/wp-content/uploads/2017/04/All-that-ever-was-always-is-2424-emmet.jpg"alt="Watie White"></a>
		</div>
		<div class="sidebar-top">
			<ul class="galleries josefin light">
				<li><a href="/">Home</a></li>

				<?php 
					wp_list_categories( array (
						'title_li' => '',
						'orderby' => 'id',
						'child_of' => get_cat_ID( 'Artwork' ),
						'hide_empty' => 0
					) );
				?>

			</ul>
		</div>
		<div class="sidebar-bottom">
			<ul class="publicity titillium bold">
				<li><a href="/cv">CV</a></li>
				<li><a href="/contact">Contact</a></li>
				<li><a href="/page/press">Press</a></li>
			</ul>
		</div>
	</div>
</div>