<?php


function load_style_sheets(){
    wp_register_style('fonts', get_template_directory_uri() .'/fonts/icomoon/style.css', array(), 1, 'all');
    wp_enqueue_style('font');
    wp_register_style('bootsrap', get_template_directory_uri() .'/css/bootstrap.min.css', array(), 1, 'all');
    wp_enqueue_style('bootsrap');
    wp_register_style('jquery', get_template_directory_uri() .'/css/jquery-ui.css', array(), 1, 'all');
    wp_enqueue_style('jquery');
    wp_register_style('owl_theme', get_template_directory_uri() .'/css/owl.carousel.min.css', array(), 1, 'all');
    wp_enqueue_style('owl_theme');
    wp_register_style('theme_style', get_template_directory_uri() .'/css/owl.theme.default.min.css', array(), 1, 'all');
    wp_enqueue_style('theme_style');
    wp_register_style('font', get_template_directory_uri() .'/fonts/flaticon/font/flaticon.css', array(), 1, 'all');
    wp_enqueue_style('font');
    wp_register_style('jquery-fancy-box', get_template_directory_uri() .'/css/jquery.fancybox.min.css', array(), 1, 'all');
    wp_enqueue_style('jquery-fancy-box');
    wp_register_style('aos', get_template_directory_uri() .'/css/aos.css' array(), 1, 'all');
    wp_enqueue_style('aos');
    wp_register_style('main-style', get_template_directory_uri() .'/css/style.css', array(), 1, 'all');
    wp_enqueue_style('main-style');
 

 
}
add_action('wp_enqueue_scripts','load_style_sheets');

function addjs(){
    wp_register_script('jquery', get_template_directory_uri() .'/js/jquery-3.3.1.min.js', array(),1,1,1);
    wp_enqueue_script('jquery');

    wp_register_script('owl', get_template_directory_uri() .'/js/owl.carousel.min.js', array(),1,1,1);
    wp_enqueue_script('owl');

    wp_register_script('jquery-ease', get_template_directory_uri() .'/js/jquery.easing.1.3.js', array(),1,1,1);
    wp_enqueue_script('jquery-ease');

    wp_register_script('aos', get_template_directory_uri() .'js/aos.js', array(),1,1,1);
    wp_enqueue_script('aos');

    wp_register_script('jquery-fancy', get_template_directory_uri() .'js/jquery.fancybox.min.js', array(),1,1,1);
    wp_enqueue_script('jquery-fancy');

    wp_register_script('jquery-way', get_template_directory_uri() .'js/jquery.waypoints.min.js', array(),1,1,1);
    wp_enqueue_script('jquery-way');

    wp_register_script('jquery-sticky', get_template_directory_uri() .'js/jquery.sticky.js', array(),1,1,1);
    wp_enqueue_script('jquery-sticky');

  
}
add_action('wp_enqueue_scripts','addjs');
