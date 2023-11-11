<?php

/* Custom Post Type Start */

function cdmt_create_posttype() {
register_post_type( 'projects',
// CPT Options

array(
  'labels' => array(
   'name' => __( 'Projects' ),
   'singular_name' => __( 'Projects' ),
   'add_new'            => __('Add New Project', 'text_domain'),
  ),
  'public' => true,
  'has_archive' => true,
  'rewrite' => array('slug' => 'projects'),
  'menu_icon' => 'dashicons-clipboard',
 )
);
}
// Hooking up our function to theme setup
add_action( 'init', 'cdmt_create_posttype' );

/* Custom Post Type End */

/* Custom Taxonomy for Projects */

function cdmt_create_taxonomy(){
    register_taxonomy('project_type', array('projects'), array(
            'labels' => array(
                'name'                       => _x('Project Types', 'Taxonomy General Name', 'text_domain'),
                'singular_name'              => _x('Project Type', 'Taxonomy Singular Name', 'text_domain'),
                'menu_name'                  => __('Project Type', 'text_domain'),
                'all_items'                  => __('All Project Types', 'text_domain'),
            ),
            'hierarchical'               => true,
            'public'                     => true,
            'show_ui'                    => true,
            'show_admin_column'          => true,
            'show_in_nav_menus'          => true,
        )
    );
}
add_action('init', 'cdmt_create_taxonomy');

function num_posts_archive_project($query){
    if ($query->is_archive('projects')) {
            $query->set('posts_per_page', 6);
   }
    return $query;
}

add_filter('pre_get_posts', 'num_posts_archive_project');