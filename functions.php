<?php

function ligatur_scripts()
{
    wp_enqueue_style( 'ligatur', get_stylesheet_uri());
}

add_action( 'wp_enqueue_scripts', 'ligatur_scripts');