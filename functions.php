<?php
function rez_scripts()  {
    //CSS
    wp_register_style('my-style',get_bloginfo( 'stylesheet_directory' ) . '/css/style.css',false,0.1);
    wp_enqueue_style('my-style' );

    // JS
    wp_enqueue_script('script', get_template_directory_uri(). '/js/script.js', array( 'jquery' ),'',true);
    wp_enqueue_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js', array( 'jquery' ),'',false);
}
add_action( 'wp_enqueue_scripts', 'rez_scripts' ); 

// Custom Post Type : Example

function setup_example () {
    $exampleLabels = array(
        'name'                => __( 'example', 'alta-velocita' ),
        'singular_name'       => __( 'example', 'alta-velocita' )
    );

    $exampleOptions = array(
        'labels'              => $exampleLabels,
        'public'              => false,
        'publicly_queryable'  => false,
        'exclude_from_search' => true,
        'show_ui'             => true,
        'query_var'           => true,
        'menu_position'       => 20,
        'rewrite'             => array( 'slug' => 'project', 'with_front' => false ),
        'has_archive'         => false,
        'capability_type'     => 'post',
        'hierarchical'        => false,
        'menu_icon'           => 'dashicons-groups',
        'supports'            => array( 'title','page','thumbnail')
    );
    register_post_type( 'example', $exampleOptions);
}
add_action('init', 'setup_example');