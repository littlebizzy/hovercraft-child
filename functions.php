<?php

// Child RTL CSS for HoverCraft theme
function hovercraft_child_rtl_css( $uri ) {
    if ( is_rtl() && file_exists( get_stylesheet_directory() . '/rtl.css' ) ) {
        $uri = get_stylesheet_directory_uri() . '/rtl.css';
    }

    return $uri;
}
add_filter( 'locale_stylesheet_uri', 'hovercraft_child_rtl_css' );

// Ref: ChatGPT
