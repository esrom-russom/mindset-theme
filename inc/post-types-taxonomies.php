<?php
function mindset_register_custom_post_types()
{
    $labels = array(
        'name' => _x('Works', 'post type general name', 'mindset-theme'),
        'singular_name' => _x('Work', 'post type singular name', 'mindset-theme'),
        'add_new' => _x('Add New', 'work', 'mindset-theme'),
        'add_new_item' => __('Add New Work', 'mindset-theme'),
        'edit_item' => __('Edit Work', 'mindset-theme'),
        'new_item' => __('New Work', 'mindset-theme'),
        'view_item' => __('View Work', 'mindset-theme'),
        'view_items' => __('View Works', 'mindset-theme'),
        'search_items' => __('Search Works', 'mindset-theme'),
        'not_found' => __('No works found.', 'mindset-theme'),
        'not_found_in_trash' => __('No works found in Trash.', 'mindset-theme'),
        'parent_item_colon' => __('Parent Works:', 'mindset-theme'),
        'all_items' => __('All Works', 'mindset-theme'),
        'archives' => __('Work Archives', 'mindset-theme'),
        'attributes' => __('Work Attributes', 'mindset-theme'),
        'insert_into_item' => __('Insert into work', 'mindset-theme'),
        'uploaded_to_this_item' => __('Uploaded to this work', 'mindset-theme'),
        'featured_image' => __('Work featured image', 'mindset-theme'),
        'set_featured_image' => __('Set work featured image', 'mindset-theme'),
        'remove_featured_image' => __('Remove work featured image', 'mindset-theme'),
        'use_featured_image' => __('Use as featured image', 'mindset-theme'),
        'menu_name' => _x('Works', 'admin menu', 'mindset-theme'),
        'filter_items_list' => __('Filter works list', 'mindset-theme'),
        'items_list_navigation' => __('Works list navigation', 'mindset-theme'),
        'items_list' => __('Works list', 'mindset-theme'),
        'item_published' => __('Work published.', 'mindset-theme'),
        'item_published_privately' => __('Work published privately.', 'mindset-theme'),
        'item_revereted_to_draft' => __('Work reverted to draft.', 'mindset-theme'),
        'item_trashed' => __('Work trashed.', 'mindset-theme'),
        'item_scheduled' => __('Work scheduled.', 'mindset-theme'),
        'item_updated' => __('Work updated.', 'mindset-theme'),
        'item_link' => __('Work link.', 'mindset-theme'),
        'item_link_description' => __('A link to a work.', 'mindset-theme'),
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'show_in_rest' => true,  //you will get the block editor id set to false you won't get that
        'query_var' => true,
        'rewrite' => array('slug' => 'works'), // the only reason we're calling this is on line 58 that the back-end name but this is the front end name so what we'll see on wordpress
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => 5,
        'menu_icon' => 'dashicons-archive',
        'supports' => array('title', 'editor', 'thumbnail'),
    );
    register_post_type('fwd-work', $args);
}
add_action('init', 'mindset_register_custom_post_types');
