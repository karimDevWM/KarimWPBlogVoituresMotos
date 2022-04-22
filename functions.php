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
        
        // Déclaration de la nouvelle Taxonomie
        $labels = array(
            'name' => 'Type de véhicules',
            'new_item_name' => 'Nom du nouveau type de véhicules',
            'parent_item' => 'Type de projet parent',
        );
        
        $args = array( 
            'labels' => $labels,
            'public' => true, //nécessaire pour l’affichage sur le site
            'show_in_rest' => true, //nécessaire pour l’éditeur
            'hierarchical' => true, //comportement catégorie ou étiquettes
        );
        // On déclare la taxonomie et on la lie avec le CPT portfolio
        register_taxonomy( 'type-vehicules', 'garage', $args );
    }
        add_action( 'init', 'montheme_register_post_types' );

        class myWidget_widget extends WP_Widget 
    {
        // la méthode constructor, que nous utiliserons pour déterminer une ID, 
        // le nom du widget tel qu’il apparaît dans l’interface utilisateur et une description :
        function __construct() 
        {
            parent::__construct(
            // widget ID
            'myWidget_widget',
            // widget name
            __('myWidget Sample Widget', ' myWidget_widget_domain'),
            // widget description
            array( 'description' => __( 'myWidget_widget Widget Tutorial', 'myWidget_widget_domain' ), )
            );
        }
        // Ensuite, nous passons à l’apparence du widget, ou comment le front-end du widget s’affichera. Cela se fera par 
            // la fonction widget() :
        public function widget( $args, $instance ) 
        {
            $title = apply_filters( 'widget_title', $instance['title'] );
            echo $args['before_widget'];
            //if title is present
            if ( ! empty( $title ) )
            echo $args['before_title'] . $title . $args['after_title'];
            //output
            echo __( '', 'myWidget_widget_domain' );
            ?>
                <form action="" method="post">
                    <input type="text" name="">
                </form>
            <?php

            echo $args['after_widget'];
        }

        // Maintenant, nous devons programmer l’arrière-plan du widget en utilisant la méthode form() :
        public function form( $instance ) 
        {
            if ( isset( $instance[ 'title' ] ) )
            $title = $instance[ 'title' ];
            else
            $title = __( 'Default Title', 'myWidget_widget_domain' );
            ?>
            <p>
            <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
            </p>
            <?php
        }

        // fonction de mise à jour pour actualiser le widget chaque fois que les paramètres sont modifiés.
        public function update( $new_instance, $old_instance ) 
        {
            $instance = array();
            $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
            return $instance;
        }
    }
    // enregistrer le widget avec WordPress
    function myWidget_register_widget() 
    {
        register_widget( 'myWidget_widget' );
    }
    add_action( 'widgets_init', 'myWidget_register_widget' );

    // reserver button widget sidebar
    register_sidebar( array(
        'id' => 'contact-Btn',
        'name' => 'contactBtn',
                            ) 
                    );
    
    // widget sidebar
    register_sidebar( array(
        'id' => 'reservation-Form',
        'name' => 'reservationForm',
                            ) 
                    );

?>