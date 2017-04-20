<div class="content-wrapper">
	<div class="sidebar-wrapper">

		<div class="logo">
			<a href="/"><img class="logo" src="/wp-content/uploads/2017/04/watie-icon.gif" alt="Watie White"></a>
		</div>
		<div class="sidebar-top">
			<ul class="galleries josefin light">

				<?php 
					wp_list_categories( array (
						'title_li' => '',
						'orderby' => 'id',
						'exclude' => [get_cat_ID( 'Press' ), get_cat_ID( 'Mural' )],
						'hide_empty' => 0,
						'depth' => 1
					) );
				?>

			</ul>
		</div>
		<div class="sidebar-bottom">
			<ul class="publicity titillium">

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
</div>