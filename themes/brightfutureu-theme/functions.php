<?php

function brightfutureu_files(){
    wp_enqueue_script('brightfuture_main_js', get_theme_file_uri('/js/script.js'), NULL, '1.0', true);
    wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&amp;family=Nunito:wght@400;500;600;700&amp;display=swap');
    wp_enqueue_style('remixicon', get_theme_file_uri('/css/remixicon/remixicon.css'));
    wp_enqueue_style( 'brightfuture_main_styles',  get_theme_file_uri('/css/styles.css'));
}

add_action('wp_enqueue_scripts', 'brightfutureu_files');

function brightfuture_features(){
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'brightfuture_features');

function brightfutureu_resource_hints($urls, $relation_type){
    if ('preconnect' === $relation_type) {
        $urls[] = 'https://fonts.googleapis.com';
        $urls[] = array(
            'href' => 'https://fonts.gstatic.com',
            'crossorigin',
        );
    }

    return $urls;
}

add_filter('wp_resource_hints', 'brightfutureu_resource_hints', 10, 2);
