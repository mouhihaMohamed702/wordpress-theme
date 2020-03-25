<?php 

    function load_css(){
        wp_register_style('bootstrap',get_template_directory_uri() . '/css/bootstrap.min.css',array(), false, 'all');

        wp_enqueue_style('bootstrap');

        wp_register_style('main',get_template_directory_uri() . '/css/main.css',array(), false, 'all');

        wp_enqueue_style('main');

    }

    add_action('wp_enqueue_scripts','load_css');

    function load_js(){
        wp_enqueue_script('jquery'); 
        wp_register_script('bootstrap',get_template_directory_uri() . '/js/bootstrap.min.js', 'jquery', false, true);
        wp_enqueue_script('bootstrap');
    }
    add_action('wp_enqueue_scripts','load_js');



    add_theme_support('menus');
    add_theme_support('post-thumbnails');
    add_theme_support('widgets');


    register_nav_menus(
        array(
            'top-menu' => 'Top Menu Location',
            'mobile-menu' => 'Moblie Menu Location',

        )
    );

add_image_size('post-large', 800,400,false);
add_image_size('post-small', 300,200,true);



function sidebars(){
    register_sidebar(
        array(
            'name' => 'Page Sidebar',
            'id' => 'page-sidebar',
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>'
        )
    );

    register_sidebar(
        array(
            'name' => 'Post Sidebar',
            'id' => 'post-sidebar',
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>'
        )
    );
}

add_action('widgets_init','sidebars');



