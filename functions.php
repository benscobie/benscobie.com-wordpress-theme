<?php

function bscobie_enqueue_styles() {
    $parent_style = 'twentyseventeen-style';

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'twentyseventeen-child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'bscobie_enqueue_styles' );

if ( ! function_exists ( 'twentyseventeen_posted_on' ) ) :
/**
* Remove byline
*/
function twentyseventeen_posted_on() {
	echo '<span class="posted-on">' . twentyseventeen_time_link() . '</span>';
}
endif;