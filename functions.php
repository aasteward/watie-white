<?php

add_action( 'init', 'create_artwork_type' );

function create_artwork_type() {
  register_post_type( 'artwork',
    array(
      'labels' => array(
        'name' => __( 'Artworks' ),
        'singular_name' => __( 'Artwork' )
      ),
      'public' => true,
      'has_archive' => true,
    )
  );
}

?>