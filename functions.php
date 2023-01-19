<?php

// enqueue parent css
if ( !function_exists( 'enqueue_parent_css' ) ):
    function enqueue_parent_css() {
        wp_enqueue_style( 'parent-css', trailingslashit( get_template_directory_uri() ) . 'style.css', array(  ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'enqueue_parent_css', 10 );
