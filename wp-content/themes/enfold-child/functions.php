<?php

//appended functions

function custom_scripts(){

 wp_enqueue_script('slider', '/wp-content/themes/enfold-child/header.js', array('jquery'), '4.2.3', true);

}

add_action('wp_enqueue_scripts', 'custom_scripts');


