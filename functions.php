<?php


function tunmise_style_files(){
    //loading javascript
    wp_enqueue_script('demo-bap-js', get_theme_file_uri("/assets/app.js"), array('jquery'), '1.0', true );
    //loading custom google fonts
    wp_enqueue_style('custom-google-font', '//fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap');
    wp_enqueue_style('more-font', '//fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300..700;1,300..700&display=swap');
	wp_enqueue_style('cdn', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css');
    //loading fontawesome from external cdn

    //loading css from local build file
    wp_enqueue_style('slategraph_main_styles', get_theme_file_uri('/assets/styles.css'));
    wp_enqueue_style('slategraph_book_styles', get_theme_file_uri('/assets/book.css'));
    wp_enqueue_style('slategraph_hero_styles', get_theme_file_uri('/assets/hero.css'));
}

//invoking fucntions to load script
add_action('wp_enqueue_scripts', 'tunmise_style_files');

function tunmise_features() {
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'tunmise_features');

// REMOVE WP EMOJI
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('admin_print_styles', 'print_emoji_styles');

/** Remove classic inline style */
add_action( 'wp_enqueue_scripts', function() {
    wp_dequeue_style( 'classic-theme-styles' );
}, 20 );


/** Remove global inline styles */
add_action( 'wp_enqueue_scripts', function() {
    wp_dequeue_style( 'global-styles-inline' );
}, 20 );


function disable_classic_theme_styles() {
    wp_deregister_style('classic-theme-styles');
    wp_dequeue_style('classic-theme-styles');
}
add_filter('wp_enqueue_scripts', 'disable_classic_theme_styles', 100);

function wps_deregister_styles() {
    wp_dequeue_style( 'global-styles' );
}
add_action( 'wp_enqueue_scripts', 'wps_deregister_styles', 100 );

function tunmise_post_types()
{
    
    register_post_type("about", array(
        'public' => true,
        'supports' => array('title', 'editor', 'excerpt'),
        'has_archive'=> true,
        'show_in_rest' => false,
        'labels' => array(
            'name' => 'About',
            'add_new' => 'Add New About',
            'add_new_item' => 'Add New About',
            'edit_item' => 'Edit About',
            'all_items' => 'All About',
            'singular_name' => 'About'
        ),
        'menu_icon' => 'dashicons-admin-users'

    ));

    register_post_type("projects", array(
        'public' => true,
        'supports' => array('title', 'editor', 'excerpt'),
        'has_archive' => true,
        'show_in_rest' => true,
        'labels' => array(
            'name' => 'projects',
            'add_new' => 'Add New Project',
            'add_new_item' => 'Add New Project',
            'edit_item' => 'Edit Project',
            'all_items' => 'All Projects',
            'singular_name' => 'project'
        ),
        'menu_icon' => 'dashicons-portfolio'

    ));

    register_post_type("books", array(
        'public' => true,
        'supports' => array('title', 'editor', 'excerpt'),
        'has_archive' => true,
        'show_in_rest' => false,
        'labels' => array(
            'name' => 'books',
            'add_new' => 'Add New Book',
            'add_new_item' => 'Add New Book',
            'edit_item' => 'Edit Book',
            'all_items' => 'All Books',
            'singular_name' => 'Book'
        ),
        'menu_icon' => 'dashicons-admin-users'

    ));

    register_post_type('video', array(
        'supports' => array('title', 'editor', 'excerpt'),
        'rewrite' => array('slug' => 'videos'),
        'has_archive' => true,
        'public' => true,
        'show_in_rest' => false,
        'labels' => array(
            'name' => 'video',
            'add_new' => 'Add New Video',
            'add_new_item' => 'Add New Video',
            'edit_item' => 'Edit Video',
            'all_items' => 'All Videos',
            'singular_name' => 'Video'

        ),
        'menu_icon' => 'dashicons-youtube'
    ));

    register_post_type("publications", array(
        'public' => true,
        'supports' => array('title', 'editor', 'excerpt'),
        'has_archive'=> true,
        'show_in_rest' => false,
        'labels' => array(
            'name' => 'Publications',
            'add_new' => 'Add New Publication',
            'add_new_item' => 'Add New Publication',
            'edit_item' => 'Edit Publication',
            'all_items' => 'All Publications',
            'singular_name' => 'publication'
        ),
        'menu_icon' => 'dashicons-archive'

    ));
};

add_action('init', 'tunmise_post_types');