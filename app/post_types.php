<?php

if ( OEG_SITE === 'CCCOER' ) {
    add_action( 'init', function() {
        register_extended_post_type( 'webinar', [
            'taxonomies'      => array( 'post_tag', 'webinar_category' ),
            'capability_type' => 'page',
            'menu_icon'       => 'dashicons-format-video',
            'show_in_rest'    => true,
            'admin_cols'      => array(
                'title',
                'Webinar Category' => [
                    'taxonomy' => 'webinar_category'
                ],
                'author',
                'status'           => [
                    'title'    => 'Status',
                    'meta_key' => 'webinar_status'
                ],
                'date'             => [
                    'default' => 'DESC'
                ]
            )
        ], [
            'slug' => 'webinar'
        ] );

        register_extended_taxonomy( 'webinar_category', 'webinar', [
            'show_admin_column' => true,
            'show_in_rest'      => true,
            'show_ui'           => true,
        ], [
            'plural'       => 'Webinar Categories',
            'singular'     => 'Webinar Category',
            'hierarchical' => true,
        ] );

        register_extended_post_type( 'casestudy', [
            'taxonomies'      => array( 'post_tag' ),
            'capability_type' => 'page',
            'menu_icon'       => 'dashicons-portfolio',
            'menu_position'   => 5,
            'show_in_rest'    => true,
        ], [
            'singular' => 'Case study',
            'plural'   => 'Case studies',
            'slug'     => 'case-studies',
        ] );

        register_extended_taxonomy( 'casestudy_category', 'casestudy', [
            'show_admin_column' => true,
            'show_in_rest'      => true,
            'show_ui'           => true,
        ], [
            'plural'       => 'Case Study Categories',
            'singular'     => 'Case Study Category',
            'hierarchical' => true,
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
            'plural'   => 'Student stories',
            'slug'     => 'student-stories'
        ] );

        register_extended_post_type( 'edi', [
            'taxonomies'      => array( 'post_tag' ),
            'capability_type' => 'page',
            'menu_icon'       => 'dashicons-businesswoman',
            'show_in_rest'    => true,
            'rest_base'       => 'edi',
        ], [
            'singular' => 'EDI post',
            'plural'   => 'EDI posts',
            'slug'     => 'edi'
        ] );

        register_extended_post_type( 'retrospective', [
            'capability_type' => 'page',
            'menu_icon'       => 'dashicons-format-quote',
            'show_in_rest'    => true,
        ], [
            'slug' => 'retrospective'
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
            'taxonomies'      => array( 'award_year', 'award_category' ),
            'capability_type' => 'page',
            'menu_icon'       => 'dashicons-awards',
            'show_in_rest'    => true,
            'rewrite'         => array(
                'permastruct' => '/awards/%award_year%/%award_category%/%award%'
            ),
            'admin_filters'   => [
                'year'     => [
                    'title'    => 'Year',
                    'taxonomy' => 'award_year'
                ],
                'category' => [
                    'title'    => 'Category',
                    'taxonomy' => 'award_category'
                ]
            ]
        ] );

        register_extended_taxonomy( 'award_year', 'award', [
            'show_admin_column' => true,
            'show_in_rest'      => true,
            'show_ui'           => true,
        ], [
            'plural'   => 'Years',
            'singular' => 'Year',
            'slug'     => 'year',
        ] );

        register_extended_taxonomy( 'award_category', 'award', [
            'show_admin_column' => true,
            'hierarchical'      => true,
            'show_in_rest'      => true,
        ], [
            'plural'   => 'Categories',
            'singular' => 'Category',
            'slug'     => 'type',
        ] );
    } );

    add_action( 'bcn_after_fill', 'my_static_breadcrumb_adder' );

    function my_static_breadcrumb_adder( $breadcrumb_trail ) {
        if ( in_array( 'post-award', $breadcrumb_trail->breadcrumbs[0]->get_types() ) ) {
            $award_post_id = $breadcrumb_trail->breadcrumbs[0]->get_id();
            $terms         = wp_get_object_terms( $award_post_id, 'award_category' );
            if ( $terms ) {
                $term    = $terms[0];
                $parents = get_ancestors( $term->term_id, 'award_category' );
                if ( $parents ) {
                    $term = get_term( end( $parents ), 'award_category' );
                }
//                $new_breadcrumb = new bcn_breadcrumb( $term->name, null, array( 'awards_category' ), get_term_link( $term ), $term->term_id, true );
                $new_breadcrumb = new bcn_breadcrumb( $term->name . ' Award', null, array( 'awards_category' ), get_term_link( $term ), $term->term_id, true );
                array_splice( $breadcrumb_trail->breadcrumbs, - 3, 0, array( $new_breadcrumb ) );
            }
        }
    }
}
