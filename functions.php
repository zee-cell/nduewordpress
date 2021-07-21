<?php


function load_style_sheets(){
    wp_register_style('fonts', get_template_directory_uri() .'/fonts/icomoon/style.727a50d6e2c8.css' array(), 1, 'all');
    wp_enque_style('font');
    wp_register_style('bootsrap', get_template_directory_uri() .'/css/bootstrap.min.8b0d5c0dfd76.css' array(), 1, 'all');
    wp_enque_style('bootstrap');
    wp_register_style('jquery', get_template_directory_uri() .'/css/jquery-ui.3ffaf2eb8cba.css' array(), 1, 'all');
    wp_enque_style('jquery');
    wp_register_style('owl_theme', get_template_directory_uri() .'/css/owl.carousel.min.366096e9c608.css' array(), 1, 'all');
    wp_enque_style('owl_theme');
    wp_register_style('theme_style', get_template_directory_uri() .'/css/owl.theme.default.min.3d112370d7b3.css' array(), 1, 'all');
    wp_enque_style('theme_style');
    wp_register_style('font', get_template_directory_uri() .'/fonts/flaticon/font/flaticon.c50246346ded.css' array(), 1, 'all');
    wp_enque_style('font');
    wp_register_style('jquery-fancy-box', get_template_directory_uri() .'/css/jquery.fancybox.min.a2d42584292f.css' array(), 1, 'all');
    wp_enque_style('magnific_pop');
    wp_register_style('aos', get_template_directory_uri() .'/css/aos.37d27db31631.css' array(), 1, 'all');
    wp_enque_style('aos');
    wp_register_style('main-style', get_template_directory_uri() .'/css/style.1d7fd8b1648c.css' array(), 1, 'all');
    wp_enque_style('main-style');
 

 
}
add_action('wp_enque_scripts','load_style_sheets');

function addjs(){
    wp_register_script('jquery', get_template_directory_uri(), 'js/jquery-3.3.1.min.4b57cf46dc8c.js', array(),1,1,1);
    wp_enque_script('jquery');

    wp_register_script('owl', get_template_directory_uri(), 'js/owl.carousel.min.b7b9c97cd68e.js', array(),1,1,1);
    wp_enque_script('jquery');

    wp_register_script('jquery-ease', get_template_directory_uri(), 'js/jquery.easing.1.3.2cb90c06cfc2.js', array(),1,1,1);
    wp_enque_script('jquery-ease');

    wp_register_script('aos', get_template_directory_uri(), 'js/aos.cfef135dd95c.js', array(),1,1,1);
    wp_enque_script('aos');

    wp_register_script('jquery-fancy', get_template_directory_uri(), 'js/jquery.fancybox.min.3bdfcef62390.js', array(),1,1,1);
    wp_enque_script('jquery-fancy');

    wp_register_script('jquery-way', get_template_directory_uri(), 'js/jquery.waypoints.min.07c8bc20d684.js', array(),1,1,1);
    wp_enque_script('jquery-way');

    wp_register_script('jquery-sticky', get_template_directory_uri(), 'js/jquery.sticky.1d45b5488f3a.js', array(),1,1,1);
    wp_enque_script('jquery-sticky');

  
}
add_action('wp_enque_scripts','addjs');
