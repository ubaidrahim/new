<?php

/* Custom Post Type Start */

function cdmt_create_posttype() {
register_post_type( 'cdmt_projects',
// CPT Options

array(
  'labels' => array(
   'name' => __( 'Projects' ),
   'singular_name' => __( 'Projects' )
  ),
  'public' => true,
  'has_archive' => true,
  'rewrite' => array('slug' => 'projects'),
 )
);
}
// Hooking up our function to theme setup
add_action( 'init', 'cdmt_create_posttype' );

/* Custom Post Type End */