<?php

function sow_post_types() {
    register_post_type('merch', array(
        'supports' => array('title', 'editor', 'excerpt'),
        'rewrite' => array('slug' => 'merch'),
        'public' => true,
        'labels' => array(
            'name' => 'Merch',
            'add_new_item' => 'Add New Merch',
            'edit_item' => 'Edit Merch',
            'all_items' => 'All Merch',
            'singular_name' => 'Merch'
        ),
        'menu_icon' => 'dashicons-admin-users'
    ));
}

add_action('init', 'sow_post_types');