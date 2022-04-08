<?php 
    // add dynamic title
    function activiteWordpress_theme_support()
    {
        // add dynamic title tag support
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
        	
        add_image_size( 'custom-size', 1280, 400, true );
    }
    add_action('after_setup_theme', 'activiteWordpress_theme_support');

    // menu
    function monplugin_add_menu()
    {
        register_nav_menu('main_menu', 'Menu principal');
    }
    add_action('init', 'monplugin_add_menu');

    // widget sidebar
    register_sidebar( array(
        'id' => 'blog-sidebar',
        'name' => 'Blog',
        ) );

    // widget sidebar
    register_sidebar( array(
        'id' => 'archives-sidebar',
        'name' => 'Archives',
        ) );

    // add stylesheets
    function blogMotosVoitures_register_styles()
    {
        wp_enqueue_style('bootstrap','https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css', array(), '', 'all');
        wp_enqueue_style( 'my-theme', get_template_directory_uri().'/style.css' );
    }
    add_action( 'wp_enqueue_scripts', 'blogMotosVoitures_register_styles');

    // add js scripts
    function activiteWordpress_register_scripts()
    {
        wp_enqueue_script('activiteWordpress_jquery', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js', 
        array(), '3.4.1', true);
        wp_enqueue_script('activiteWordpress_jquery', get_template_directory_uri().'/html5up-future-imperfect/assets/js/jquery.min.js', 
        array(), '3.4.1', true);
        wp_enqueue_script('activiteWordpress_browser', get_template_directory_uri().'/html5up-future-imperfect/assets/js/browser.min.js', 
        array(), '1.0', true);
        wp_enqueue_script('activiteWordpress_breakpoints', get_template_directory_uri().'/html5up-future-imperfect/assets/js/breakpoints.min.js', 
        array(), '1.0', true);
        wp_enqueue_script('activiteWordpress_util', get_template_directory_uri().'/html5up-future-imperfect/assets/js/util.js', 
        array(), '1.0', true);
        wp_enqueue_script('activiteWordpress_main', get_template_directory_uri().'/html5up-future-imperfect/assets/js/main.js', 
        array(), '1.0', true);
    }
    add_action( 'wp_enqueue_scripts', 'activiteWordpress_register_scripts');



    function montheme_register_post_types() {
        // Custom Post Types and Taxonomies declaration go here
        // CPT Portfolio
        //Les différents noms de notre CPT
        $labels = array
        (
            'name' => 'Garage',
            'all_items' => 'Tous les véhicules',  // affiché dans le sous menu
            'singular_name' => 'Véhicule',
            'add_new_item' => 'Ajouter un véhicule',
            'edit_item' => 'Modifier le véhicule',
            'menu_name' => 'Garage'
        );
        $args = array
        (
            'labels' => $labels,
            'public' => true, //accessible sur le site ?
            'show_in_rest' => true, //accessible par l'API? Gutenberg en a besoin pour fonctionner correctement
            'has_archive' => true, //comme les articles ou comme les pages ?
            'supports' => array( 'title', 'editor', 'thumbnail' ),
            'menu_position' => 5, 
            'menu_icon' => 'dashicons-admin-customizer',
            'show_in_nav_menus' => true,
            'show_ui' => true
        );
        register_post_type( 'garage', $args ); //le nom de notre CPT
    }
        add_action( 'init', 'montheme_register_post_types' );
?>