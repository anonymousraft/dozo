<?php

function dozo_script_enqueue(){

	wp_enqueue_style('customstyle', get_template_directory_uri().'/css/dozostyle.css', array(), '1.0.1', 'all');
	wp_enqueue_style( 'bootstrap_css', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css');
	wp_enqueue_style( 'bootstrap_css_theme', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css');
	wp_enqueue_script('customjs', get_template_directory_uri().'/js/dozoscripts.js', array(),'1.0.1',true);
	wp_enqueue_script( 'bootstrap_js', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js');

	}

add_action('wp_enqueue_scripts', 'dozo_script_enqueue');

function doz_theme_setup(){
	add_theme_support( 'menus' );
}

add_action('after_setup_theme','doz_theme_setup');

?>
