<?php

function brightfutureu_files(){
    wp_enqueue_style( 'brightfuture_main_styles',  get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'brightfutureu_files');