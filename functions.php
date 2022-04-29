<?php

function ligatur_scripts()
{
    wp_enqueue_style('ligatur', get_stylesheet_uri());
}

function themename_custom_logo_setup()
{
    $defaults = array(
        'flex-height' => true,
        'flex-width' => true,
    );

    add_theme_support('custom-logo', $defaults);
}

add_action('wp_enqueue_scripts', 'ligatur_scripts');
add_action('after_setup_theme', 'themename_custom_logo_setup');
