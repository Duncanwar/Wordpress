<?php
function add_css()
{
    wp_register_style('style', get_stylesheet_directory_uri() . "/assests/css/style.css");
    wp_enqueue_style('style');
}
add_action('wp_enqueue_scripts', 'add_css');

add_action('init', function(){
    register_post_type('book',[
        'label' => __('Books', 'txtdomain'),
        'public'=> true,
        'menu_position'=> 5,
        'supports'=> ['title', 'editor', 'thumbnail', 'author', 'revisions', 'comments'],
        'show_in_rest'=> true,
        'rewrite'=> ['slug'=> 'book'],
        'labels'=> [
            'singular_name'=> __('Book', 'txtdomain'),
            'add_new_item'=> __('Add new item', 'txtdomain'),
            'new_item'=> __('New book', 'txtdomain'),
            'view_item'=> __('View book', 'txtdomain'),
            'not_found'=> __('No books found', 'txtdomain'),
            'not_found' => __('No books found in trash', 'txtdomain'),
            'all_items'=> __('All books', 'txtdomain'),
            'insert_into_item'=> __('Insert into book', 'txtdomain'),
            'taxonomies'=> ['book_author']
        ]
        ])
})
