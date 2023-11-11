<?php
function register_ajax_endpoints(){
    add_action('wp_ajax_nopriv_get_projects', 'projects_callback');
    add_action('wp_ajax_get_projects', 'projects_callback');
}
add_action('init','register_ajax_endpoints');
function projects_callback(){
    $project_count = is_user_logged_in() ? 6 : 3;
    $arg = array(
        'post_type'      => 'projects',
        'posts_per_page' => $project_count,
        'tax_query'      => array(
            array(
                'taxonomy' => 'project_type',
                'field'    => 'slug',
                'terms'    => 'architecture',
            ),
        ),
        'orderby'        => 'date',
        'order'          => 'DESC',
    );
    $query = new WP_Query($args);

    $projects = array();

    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();

            $project_data = array(
                'id' =>    the_ID(),
                'title' => get_the_title(),
                'link'  => get_permalink(),
            );

            $projects[] = $project_data;
        }
    }
    wp_reset_postdata();
    wp_send_json(['success' => true, 'data' => $projects]);
}