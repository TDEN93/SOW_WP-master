<?php

function sow_files(){
  wp_deregister_script('jquery');
  wp_enqueue_script('jquery', '//code.jquery.com/jquery-3.3.1.min.js', NULL, '3.3.1', true);
  wp_enqueue_script('bootstrapJS', '//stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js', NULL, '4.1.1', true);
  wp_enqueue_script('jquery-cookie', get_template_directory_uri() . '/js/jquery.cookie.js', NULL, '1.4.0', true);
  wp_enqueue_script('myscript', get_template_directory_uri() . '/js/custom-scripts.js', NULL, 'NULL', true);
  wp_enqueue_style('bootstrapCSS', '//stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css');
  wp_enqueue_style('font-awesome', '//use.fontawesome.com/releases/v5.0.13/css/all.css');
  wp_enqueue_style('sow_main_styles', get_stylesheet_uri());

}

add_action('wp_enqueue_scripts', 'sow_files');



function sow_features() {
  add_theme_support('title-tag');
}

add_action('after_setup_theme', 'sow_features');


/* ------- Line Break Shortcode --------*/
function line_break_shortcode() {
	return '<br />';
}
add_shortcode( 'br', 'line_break_shortcode' );


