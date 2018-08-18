<?php

function university_post_types() {
    register_post_type('event', array(
        'labels' => array(
            'name' => 'About'
        ),
        'menu_icon' => 'dashicons-admin-users'
    ));
}

add_action('init', 'university_post_types');