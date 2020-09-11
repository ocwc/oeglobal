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
} elseif ( OEG_SITE === 'AWARDS' ) {
    add_action( 'init', function() {
        register_extended_post_type( 'award', [
            'taxonomies'      => array( 'award_category', 'award_tag' ),
            'capability_type' => 'page',
            'menu_icon'       => 'dashicons-awards',
            'rewrite'         => array(
                'permastruct' => '/%award_category%/%award_tag%/%award%'
            ),
        ] );

        register_extended_taxonomy( 'award_category', 'award', [
            'show_admin_column' => true,
        ], [
            'plural'   => 'Award Categories',
            'singular' => 'Award Category',
            'slug' => 'year',
        ] );

        register_extended_taxonomy( 'award_tag', 'award', [
            'show_admin_column' => true,
            'hierarchical'      => false,
        ], [
            'plural'   => 'Award Tags',
            'singular' => 'Award Tag',
            'slug' => 'type',
        ] );
    } );

    add_action( 'bcn_after_fill', 'my_static_breadcrumb_adder' );

    function my_static_breadcrumb_adder( $breadcrumb_trail ) {
        if ( in_array( 'post-award', $breadcrumb_trail->breadcrumbs[0]->get_types() ) ) {
            $award_post_id = $breadcrumb_trail->breadcrumbs[0]->get_id();
            $terms = wp_get_object_terms($award_post_id, 'award_category');
            if ($terms) {
                $term = $terms[0];
                $new_breadcrumb = new bcn_breadcrumb($term->name, NULL, array('awards_category'), get_term_link($term), $term->term_id, true);
                array_splice($breadcrumb_trail->breadcrumbs, -2, 0, array($new_breadcrumb));
            }
        }
    }
}
