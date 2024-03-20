<?php
/*
 My Theme Function
*/

// Theme Title
add_theme_support( 'title-tag');

// Theme CSS and jQuery File calling
function themi_css_js_file_calling(){
    wp_enqueue_style( 'themi-style', get_stylesheet_uri());
    wp_register_style('bootstrap', get_template_directory_uri( ).'/css/bootstrap.css', array(), '6.4.3', 'all' );
    wp_register_style('index', get_template_directory_uri( ).'/css/index.css', array(), '1.0.0', 'all' );
    wp_enqueue_style('bootstrap');
    wp_enqueue_style('index');

    // jQuery
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap', get_template_directory_uri( ).'/js/bootstrap.js', array(), '6.0.2', 'true');
    wp_enqueue_script('main', get_template_directory_uri( ).'/js/main.js', array(), '6.0.2', 'true');
}
add_action( 'wp_enqueue_scripts', 'themi_css_js_file_calling' );

// Google Fonts Enqueue
function themi_add_google_font(){
    wp_enqueue_style('themi_google_fonts', 'https://fonts.googleapis.com/css2?family=Kaisei+Decol&family=Oswald:wght@200..700&display=swap', false);
}
add_action('wp_enqueue_script', 'themi_add_google_fonts');

// Theme Function
function themi_customize_register($wp_customize){
    // Header Area Function
    $wp_customize->add_section('themi_header_area', array(
        'title' =>__('Header Area',  'gmsadiq'),
        'description' => 'If you interested to update header area, you can do it'
    ));
    $wp_customize->add_setting('themi_logo', array(
        'default'=> get_bloginfo( 'template_directory') . '/img/pixtics.png',
    ));
    $wp_customize-> add_control(new WP_Customize_Image_Control($wp_customize, 'themi_logo', array(
        'label' => 'Logo Upload',
        'description' => 'If you interested to update LOGO, you can do it',
        'setting' => 'themi_logo',
        'section' => 'themi_header_area'
    )));

    // Menu Position Option 
    $wp_customize->add_section('themi_menu_option', array(
        'title' => __('Menu Position Option', 'gmsadiq'),
        'description' => 'If you interested to update menu or nav, you can do it'
    ));
    $wp_customize->add_setting('themi_menu_postion', array(
        'default' => 'right_menu',
    ));
    $wp_customize-> add_control('themi_menu_postion', array(
        'label' => 'Menu Positing',
        'description' => 'If you interested to update Menu Position, you can do it',
        'setting' => 'themi_menu_postion',
        'section' => 'themi_menu_option',
        'type' => 'radio',
        'choices' => array(
            'left_menu' => 'Left Menu',
            'right_menu' => 'Right Menu',
            'center_menu' => 'Center Menu',
        )
    ));
}

add_action( 'customize_register', 'themi_customize_register');

//Menu Register
register_nav_menu('main_menu', __('Main Menu', 'gmsadiq'));