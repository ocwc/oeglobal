<?php

namespace App;

use Sober\Controller\Controller;

/**
 * Add <body> classes
 */
add_filter( 'body_class', function( array $classes ) {
    /** Add page slug if it doesn't exist */
    if ( is_single() || is_page() && ! is_front_page() ) {
        if ( ! in_array( basename( get_permalink() ), $classes ) ) {
            $classes[] = basename( get_permalink() );
        }
    }

    /** Add class if sidebar is active */
    if ( display_sidebar() ) {
        $classes[] = 'sidebar-primary';
    }

    /** Clean up class names for custom templates */
    $classes = array_map( function( $class ) {
        return preg_replace( [ '/-blade(-php)?$/', '/^page-template-views/' ], '', $class );
    }, $classes );

    $classes[] = strtolower( OEG_SITE );

    return array_filter( $classes );
} );

/**
 * Add "… Continued" to the excerpt
 */
//add_filter( 'excerpt_more', function () {
//    return ' &hellip; <a href="' . get_permalink() . '">' . __( 'Continued', 'sage' ) . '</a>';
//} );

/**
 * Template Hierarchy should search for .blade.php files
 */
collect( [
    'index',
    '404',
    'archive',
    'author',
    'category',
    'tag',
    'taxonomy',
    'date',
    'home',
    'frontpage',
    'page',
    'paged',
    'search',
    'single',
    'singular',
    'attachment',
    'embed'
] )->map( function( $type ) {
    add_filter( "{$type}_template_hierarchy", __NAMESPACE__ . '\\filter_templates' );
} );

/**
 * Render page using Blade
 */
add_filter( 'template_include', function( $template ) {
    collect( [ 'get_header', 'wp_head' ] )->each( function( $tag ) {
        ob_start();
        do_action( $tag );
        $output = ob_get_clean();
        remove_all_actions( $tag );
        add_action( $tag, function() use ( $output ) {
            echo $output;
        } );
    } );
    $data = collect( get_body_class() )->reduce( function( $data, $class ) use ( $template ) {
        return apply_filters( "sage/template/{$class}/data", $data, $template );
    }, [] );
    if ( $template ) {
        echo template( $template, $data );

        return get_stylesheet_directory() . '/index.php';
    }

    return $template;
}, PHP_INT_MAX );

/**
 * Render comments.blade.php
 */
add_filter( 'comments_template', function( $comments_template ) {
    $comments_template = str_replace(
        [ get_stylesheet_directory(), get_template_directory() ],
        '',
        $comments_template
    );

    $data = collect( get_body_class() )->reduce( function( $data, $class ) use ( $comments_template ) {
        return apply_filters( "sage/template/{$class}/data", $data, $comments_template );
    }, [] );

    $theme_template = locate_template( [ "views/{$comments_template}", $comments_template ] );

    if ( $theme_template ) {
        echo template( $theme_template, $data );

        return get_stylesheet_directory() . '/index.php';
    }

    return $comments_template;
}, 100 );

add_filter( 'bladesvg', function() {
    return [
        'svg_path' => 'resources/assets/images',
    ];
} );

add_filter( 'block_categories', function( $categories, $post ) {
//    if ( $post->post_type !== 'page' ) {
//        return $categories;
//    }

    return array_merge(
        $categories,
        array(
            array(
                'slug'  => 'oeg-custom',
                'title' => 'OEG Custom Blocks',
                'icon'  => 'admin-site-alt3',
            ),
        )
    );
}, 10, 2 );

add_filter( 'get_search_form', function() {
    return \App\template( 'partials.searchform' );
} );

add_filter( 'get_the_archive_title', function( $title ) {
    if ( is_category() ) {
        $title = single_cat_title( '', false );
    } elseif ( is_tag() ) {
        $title = single_tag_title( '', false );
    } elseif ( is_author() ) {
        $title = '<span class="vcard">' . get_the_author() . '</span>';
    } elseif ( is_tax() ) { //for custom post types
        $title = sprintf( __( '%1$s' ), single_term_title( '', false ) );
    }

    return $title;
} );


add_filter( 'query_vars', function( $query_vars ) {
    $query_vars[] = 'member_id';
    $query_vars[] = 'webinar_year';
    $query_vars[] = 'webinar_category';
    $query_vars[] = 'webinar_q';

    return $query_vars;
} );

add_filter( 'document_title_parts', function( array $parts ) {
    if ( is_page_template( 'views/template-members-detail.blade.php' ) ) {
        $member = ( new Controllers\TemplateMembersDetail )->member();
        if ( $member->name ) {
            $parts['title'] = $member->name;
        }
    }

    return $parts;
}, 10, 1 );

add_filter( 'jetpack_just_in_time_msgs', '__return_false' );


add_filter( 'oembed_dataparse', function( $return, $data, $url ) {
    $mod = '';

    if ( ( $data->type == 'video' ) ) {
        if ( ( isset( $data->width ) ) && ( isset( $data->height ) ) &&
             ( round( $data->height / $data->width, 2 ) == round( 3 / 4, 2 ) )
        ) {
            $mod = 'embed-responsive--4-3';
        }

        return '<div class="embed-container ' . $mod . '">' . $return . '</div>';
    } elseif ( $data->type == 'rich' ) {
        return '<div class="embed-container ' . $mod . '">' . $return . '</div>';
    }

    return $return;
}, 99, 4 );
