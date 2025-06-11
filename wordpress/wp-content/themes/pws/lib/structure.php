<?php


function create_structure() {

/*
    register_post_type('service', array(
        'labels' => array(
            'name' => __('Services'),
            'singular_name' => __('Service')
        ),
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'custom-fields', 'page-attributes'),
        'prevent_duplicates' => true
            )
    );
*/
    
    // register_post_type('project', array(
    //     'labels' => array(
    //         'name' => __('Nasze projekty'),
    //         'singular_name' => __('Projekt')
    //     ),
    //     'public' => true,
    //     'has_archive' => true,
    //     'supports' => array('title', 'editor', 'thumbnail'),
    //     'prevent_duplicates' => true
    //         )
    // );
    
    // register_post_type('oferty-pracy', array(
    //     'labels' => array(
    //         'name' => __('Oferty pracy'),
    //         'singular_name' => __('Oferta pracy')
    //     ),
    //     'public' => true,
    //     'has_archive' => true,
    //     'show_in_rest' => true,
    //     'supports' => array('title', 'editor', 'thumbnail'),
    //     'prevent_duplicates' => true
    //         )
    // );
    
/*
    register_post_type('person', array(
        'labels' => array(
            'name' => __('People'),
            'singular_name' => __('Person')
        ),
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'custom-fields', 'page-attributes'),
        'prevent_duplicates' => true
            )
    );
    
    register_post_type('social_icon', array(
        'labels' => array(
            'name' => __('Social Icons'),
            'singular_name' => __('Social Icon')
        ),
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'custom-fields', 'page-attributes'),
        'prevent_duplicates' => true
            )
    );

    $project_category_labels = array(
        'name' => _x('Project Categories', 'taxonomy general name')
    );
    register_taxonomy('project_category', array('project'), array(
        'hierarchical' => true,
        'labels' => $project_category_labels,
        'show_ui' => true,
        'query_var' => true,
    ));
*/



    flush_rewrite_rules(false);
}

add_action('init', 'create_structure');

?>