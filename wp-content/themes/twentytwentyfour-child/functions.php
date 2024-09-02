<?php
function add_css()
{
    wp_register_style('style', get_stylesheet_directory_uri() . "/assests/css/style.css");
    wp_enqueue_style('style');
}
add_action('wp_enqueue_scripts', 'add_css');
