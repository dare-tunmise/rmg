<?php


function tunmise_style_files(){
    //loading javascript
    wp_enqueue_script('jq-univesrity-js', get_theme_file_uri("/assets/js/jquery.min.js"), array('jquery'), '1.0', true ); //NULL If jquery isn't in use
    wp_enqueue_script('scrollex-bap-js', get_theme_file_uri("/assets/js/jquery.scrollex.min.js"), array('jquery'), '1.0', true );
    wp_enqueue_script('scrolly-bap-js', get_theme_file_uri("/assets/js/jquery.scrolly.min.js"), array('jquery'), '1.0', true );
    wp_enqueue_script('browser-bap-js', get_theme_file_uri("/assets/js/browser.min.js"), array('jquery'), '1.0', true );
    wp_enqueue_script('breakpoints-bap-js', get_theme_file_uri("/assets/js/breakpoints.min.js"), array('jquery'), '1.0', true );
    wp_enqueue_script('util-bap-js', get_theme_file_uri("/assets/js/util.js"), array('jquery'), '1.0', true );
    wp_enqueue_script('main-bap-js', get_theme_file_uri("/assets/js/main.js"), array('jquery'), '1.0', true );
    wp_enqueue_script('demo-bap-js', get_theme_file_uri("/assets/js/demo.js"), array('jquery'), '1.0', true );
   
      
    
    //loading custom google fonts
    wp_enqueue_style('custom-google-font', '//fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i');
	wp_enqueue_style('cdn', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css');
    //loading fontawesome from external cdn

    //loading css from local build file
    wp_enqueue_style('slategraph_main_styles', get_theme_file_uri('/assets/css/main.css'));
    wp_enqueue_style('slategraph_more_styles', get_theme_file_uri('/assets/css/fontawesome-all.min.css'));
    wp_enqueue_style('slategraph_other_styles', get_theme_file_uri('/assets/css/noscript.css'));
}

//invoking fucntions to load script
add_action('wp_enqueue_scripts', 'tunmise_style_files');

function tunmise_features() {

    //register the menu here
    //register_nav_menu('headerMenuLocation', 'Header Menu Location');
    //register_nav_menu('footerLocationOne', 'Footer Location One');
   // register_nav_menu('footerLocationTwo', 'Footer Location Two');
    //this is to get the site title
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
};

add_action('init', 'tunmise_post_types');