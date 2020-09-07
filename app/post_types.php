<?php

if ( OEG_SITE === 'CCCOER' ) {
    add_action( 'init', function() {
        register_extended_post_type( 'webinar', [
            'taxonomies'      => array( 'post_tag' ),
            'capability_type' => 'page',
            'menu_icon'       => 'dashicons-format-video'
        ] );

        register_extended_taxonomy( 'webinar_category', 'webinar', [
            'show_admin_column' => true,
        ], [
            'plural'   => 'Webinar Categories',
            'singular' => 'Webinar Category'
        ] );

        register_extended_post_type( 'casestudy', [
            'taxonomies'      => array( 'post_tag' ),
            'capability_type' => 'page',
            'menu_icon'       => 'dashicons-portfolio',
            'menu_position'   => 5,
        ], [
            'singular' => 'Case study',
            'plural'   => 'Case studies'
        ] );

        register_extended_post_type( 'studentstory', [
            'taxonomies'      => array( 'post_tag' ),
            'capability_type' => 'page',
            'menu_icon'       => 'dashicons-welcome-learn-more',
            'menu_position'   => 5,
            'show_in_rest'    => true,
            'rest_base'       => 'studentstory',
        ], [
            'singular' => 'Student story',
            'plural'   => 'Student stories'
        ] );

        register_extended_post_type( 'edi', [
            'taxonomies'      => array( 'post_tag' ),
            'capability_type' => 'page',
            'menu_icon'       => 'dashicons-businesswoman',
            'show_in_rest'    => true,
            'rest_base'       => 'edi',
        ], [
            'singular' => 'EDI post',
            'plural'   => 'EDI posts'
        ] );
    } );

    add_filter( 'coauthors_supported_post_types', function( $post_types ) {
        $post_types[] = 'webinar';
        $post_types[] = 'casestudy';
        $post_types[] = 'edi';
        $post_types[] = 'studentstory';

        return $post_types;
    } );
}
