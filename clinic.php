<?php


// create Custom post type clinical_expertise

add_action('init', 'create_clinical_expertise');
function create_clinical_expertise()
{
    $labels = array(
        'name' => _x(' Clinical Expertise(service)', 'General Name', 'gdl_back_office'),
        'singular_name' => _x('Clinical Expertise', 'Singular Name', 'gdl_back_office'),
        'add_new' => _x('Add New', 'Add New Clinical Expertise', 'gdl_back_office'),
        'add_new_item' => __('Add New Clinical Expertise ', 'gdl_back_office'),
        'edit_item' => __('Edit Clinical Expertise ', 'gdl_back_office'),
        'new_item' => __('New Clinical Expertise ', 'gdl_back_office'),
        'view_item' => __('View Clinical Expertise', 'gdl_back_office'),
        'search_items' => __('Search Clinical Expertise', 'gdl_back_office'),
        'not_found' => __('Nothing Clinical Expertise found', 'gdl_back_office'),
        'not_found_in_trash' => __('Nothing Clinical Expertise found in Trash', 'gdl_back_office'),
        'parent_item_colon' => ''
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => ['slug' => 'clinical_expertise'], // my custom slug
        'capability_type' => 'post',
        'capabilities' => array(
            'publish_posts' => apply_filters('spu/settings_page/roles', 'manage_options'),
            'edit_posts' => apply_filters('spu/settings_page/roles', 'manage_options'),
            'edit_others_posts' => apply_filters('spu/settings_page/roles', 'manage_options'),
            'delete_posts' => apply_filters('spu/settings_page/roles', 'manage_options'),
            'delete_others_posts' => apply_filters('spu/settings_page/roles', 'manage_options'),
            'read_private_posts' => apply_filters('spu/settings_page/roles', 'manage_options'),
            'edit_post' => apply_filters('spu/settings_page/roles', 'manage_options'),
            'delete_post' => apply_filters('spu/settings_page/roles', 'manage_options'),
            'read_post' => apply_filters('spu/settings_page/roles', 'manage_options'),
        ),
        'hierarchical' => false,
        'menu_position' => 5,
        'has_archive' => true,
        "show_in_nav_menus" => false,
        'exclude_from_search' => true,
        'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments')
    );
    register_post_type('clinical_expertise', $args);
    register_taxonomy(
        "clinical_expertise-category",
        array("clinical_expertise", "faq"),
        array(
            "hierarchical" => true,
            'query_var' => true,
            "label" => "Clinical Expertise Category",
            "singular_label" => "Clinical Expertise  Categories",
            "show_in_nav_menus" => false,
            "rewrite" => true
        )
    );
    register_taxonomy_for_object_type('clinical_expertise-category', ['clinical_expertise', 'faq']);
}


