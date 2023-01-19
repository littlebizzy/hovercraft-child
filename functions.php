<?php

// child rtl css
if ( !function_exists( 'child_rtl_css' ) ):
    function child_rtl_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'child_rtl_css' );

// enqueue parent css
if ( !function_exists( 'enqueue_parent_css' ) ):
    function enqueue_parent_css() {
        wp_enqueue_style( 'parent-css', trailingslashit( get_template_directory_uri() ) . 'style.css', array(  ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'enqueue_parent_css', 10 );
