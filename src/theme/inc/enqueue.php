<?php 

function prefix_theme_style() {
    
}
add_action( 'wp_enqueue_scripts', 'prefix_theme_style' , 100);

function prefix_theme_scripts() {
    
}
add_action( 'wp_enqueue_scripts', 'prefix_theme_scripts' , 100);


?> 