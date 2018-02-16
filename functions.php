<?php

function dozo_script_enqueue(){

	wp_enqueue_style('customstyle', get_template_directory_uri().'/css/dozostyle.css', array(), '1.0.1', 'all');

}

add_action('wp_enqueue_scripts', 'dozo_script_enqueue');

?>