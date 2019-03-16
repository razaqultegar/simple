<?php

/* Theme Support */
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );
the_post_thumbnail('medium'); 

/* Register Google fonts */
function add_google_fonts() {
  wp_enqueue_style( 'google_web_fonts', 'https://fonts.googleapis.com/css?family=Oxygen' );
}
add_action( 'wp_enqueue_scripts', 'add_google_fonts' );

/* Enqueue scripts and styles. */
function simple_scripts()  {
	wp_enqueue_style( 'simple-style', get_template_directory_uri() . '/style.css', '10000', 'all' );
  wp_enqueue_script( 'simple-js', get_template_directory_uri() . '/js/init.js');
}
add_action( 'wp_enqueue_scripts', 'simple_scripts' );;

/* Register Widget */
function simple_widget() {
  register_sidebar( array(
    'name' => __( 'Sidebar', 'smp' ),
    'id' => 'sidebar-1',
    'description' => __( 'The main sidebar appears on the right on each page except the front page template.', 'smp' ),
    'before_widget' => '<div id="%1$s">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
  ) );
  register_sidebar( array(
    'name' => __( 'Footer', 'smp' ),
    'id' => 'footer-1',
    'description' => __( 'The main footer appears on the bottom on each page except the front page template.', 'smp' ),
    'before_widget' => '<div id="%1$s">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
  ) );
}
add_action( 'widgets_init', 'simple_widget' );

/* Disable wp-emoji */
function disable_emojis() {
 remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
 remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
 remove_action( 'wp_print_styles', 'print_emoji_styles' );
 remove_action( 'admin_print_styles', 'print_emoji_styles' );
 remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
 remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
 remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
 add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );
 add_filter( 'wp_resource_hints', 'disable_emojis_remove_dns_prefetch', 10, 2 );
}
add_action( 'init', 'disable_emojis' );

/* Disable wp-embed */
function my_deregister_scripts(){
 wp_dequeue_script( 'wp-embed' );
}
add_action( 'wp_footer', 'my_deregister_scripts' );
