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
      'taxonomies'  => array( 'category' ),
      'menu_position' => 0
    )
  );
}

add_action( 'init', 'create_press_type' );
function create_press_type() {
  register_post_type( 'article',
    array(
      'labels' => array(
        'name' => __( 'Articles' ),
        'singular_name' => __( 'Article' )
      ),
      'public' => true,
      'has_archive' => true,
      'taxonomies'  => array( 'category' ),
      'menu_position' => 0
    )
  );
}

add_filter('pre_get_posts', 'query_post_type');
function query_post_type($query) {
  if( is_category() ) {
    $post_type = get_query_var('post_type');
    if($post_type)
        $post_type = $post_type;
    else
        $post_type = array('nav_menu_item', 'post', 'artwork', 'article');
    $query->set('post_type',$post_type);
    return $query;
    }
}

?>