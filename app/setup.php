<?php

namespace App;

use Roots\Sage\Container;
use Roots\Sage\Assets\JsonManifest;
use Roots\Sage\Template\Blade;
use Roots\Sage\Template\BladeProvider;
use StoutLogic\AcfBuilder\FieldsBuilder;

/**
 * Theme assets
 */
add_action( 'wp_enqueue_scripts', function() {
    wp_enqueue_style( 'sage/main.css', asset_path( 'styles/main.css' ), false, null );
    wp_enqueue_script( 'sage/main.js', asset_path( 'scripts/main.js' ), [ 'jquery' ], null, true );

    if ( is_single() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}, 100 );

/**
 * Theme setup
 */
add_action( 'after_setup_theme', function() {
    /**
     * Enable features from Soil when plugin is activated
     * @link https://roots.io/plugins/soil/
     */
    add_theme_support( 'soil-clean-up' );
    add_theme_support( 'soil-nav-walker' );
    add_theme_support( 'soil-nice-search' );
    add_theme_support( 'soil-relative-urls' );

    if ( OEG_SITE === 'CCCOER' ) {
        add_theme_support( 'soil-google-analytics', 'UA-4248822-11' );
    } else if ( OEG_SITE === 'LATAM' ) {
        add_theme_support( 'soil-google-analytics', 'UA-4248822-15' );
    } else {
        add_theme_support( 'soil-google-analytics', 'UA-4248822-14' );
    }


    /**
     * Enable plugins to manage the document title
     * @link https://developer.wordpress.org/reference/functions/add_theme_support/#title-tag
     */
    add_theme_support( 'title-tag' );

    /**
     * Register navigation menus
     * @link https://developer.wordpress.org/reference/functions/register_nav_menus/
     */
    register_nav_menus( [
        'primary_navigation' => __( 'Primary Navigation', 'sage' ),
        'footer_navigation'  => __( 'Footer Navigation', 'sage' )
    ] );

    /**
     * Enable post thumbnails
     * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
     */
    add_theme_support( 'post-thumbnails' );
    add_image_size( 'square', 416, 416, true );

    /**
     * Enable HTML5 markup support
     * @link https://developer.wordpress.org/reference/functions/add_theme_support/#html5
     */
    add_theme_support( 'html5', [ 'caption', 'comment-form', 'comment-list', 'gallery', 'search-form' ] );

    /**
     * Gutenberg theme supports
     */
    add_theme_support( 'responsive-embeds' );

    /**
     * Enable selective refresh for widgets in customizer
     * @link https://developer.wordpress.org/themes/advanced-topics/customizer-api/#theme-support-in-sidebars
     */
    add_theme_support( 'customize-selective-refresh-widgets' );

    /**
     * Use main stylesheet for visual editor
     * @see resources/assets/styles/layouts/_tinymce.scss
     */
    add_editor_style( asset_path( 'styles/main.css' ) );

    /**
     *  Translation support
     */
    load_theme_textdomain( 'sage', get_template_directory() . '/lang' );

}, 20 );

/**
 * Register sidebars
 */
add_action( 'widgets_init', function() {
    $config = [
        'before_widget' => '<section class="widget %1$s %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>'
    ];
    register_sidebar( [
                          'name' => __( 'Primary', 'sage' ),
                          'id'   => 'sidebar-primary'
                      ] + $config );
    register_sidebar( [
                          'name' => __( 'Footer', 'sage' ),
                          'id'   => 'sidebar-footer'
                      ] + $config );
} );

/**
 * Updates the `$post` variable on each iteration of the loop.
 * Note: updated value is only available for subsequently loaded views, such as partials
 */
add_action( 'the_post', function( $post ) {
    sage( 'blade' )->share( 'post', $post );
} );

/**
 * Setup Sage options
 */
add_action( 'after_setup_theme', function() {
    /**
     * Add JsonManifest to Sage container
     */
    sage()->singleton( 'sage.assets', function() {
        return new JsonManifest( config( 'assets.manifest' ), config( 'assets.uri' ) );
    } );

    /**
     * Add Blade to Sage container
     */
    sage()->singleton( 'sage.blade', function( Container $app ) {
        $cachePath = config( 'view.compiled' );
        if ( ! file_exists( $cachePath ) ) {
            wp_mkdir_p( $cachePath );
        }
        ( new BladeProvider( $app ) )->register();

        return new Blade( $app['view'] );
    } );

    /**
     * Create @asset() Blade directive
     */
    sage( 'blade' )->compiler()->directive( 'asset', function( $asset ) {
        return "<?= " . __NAMESPACE__ . "\\asset_path({$asset}); ?>";
    } );
} );

add_action( 'enqueue_block_editor_assets', function() {
    wp_enqueue_style( 'sage/gutenberg.css', asset_path( 'styles/gutenberg.css' ), false, null );
} );

/**
 * Initialize ACF Builder
 */
add_action( 'init', function() {
    if ( function_exists( 'acf_add_local_field_group' ) ) {
        collect( glob( config( 'theme.dir' ) . '/app/fields/*.php' ) )->map( function( $field ) {
            return require_once( $field );
        } )->map( function( $field ) {
            if ( $field instanceof FieldsBuilder ) {
                acf_add_local_field_group( $field->build() );
            }
        } );
    }
} );

add_action( 'init', function() {
    add_post_type_support( 'page', 'excerpt' );
} );

add_action( 'pre_get_posts', function( $query ) {
    if ( is_admin() ) {
        return $query;
    }

    //CCCOER
    if ( $query->is_archive() && $query->is_main_query() && is_post_type_archive( 'webinar' ) ) {
        $query->set( 'posts_per_page', 8 );

        $webinar_category = get_query_var( 'webinar_category' );
        if ( $webinar_category ) {
            $query->set( 'tax_query', array(
                array(
                    'taxonomy' => 'webinar_category',
                    'field'    => 'slug',
                    'terms'    => $webinar_category,
                )
            ) );
        } else {
            $query->set( 'tax_query', array(
                array(
                    'taxonomy' => 'webinar_category',
                    'field'    => 'slug',
                    'terms'    => 'general-oer',
                    // 'operator' => 'NOT IN'
                )
            ) );
        }

        $webinar_year = get_query_var( 'webinar_year' );
        if ( $webinar_year ) {
            $query->set( 'date_query', array(
                'year' => $webinar_year
            ) );
        }

        $webinar_text = get_query_var( 'webinar_q' );
        if ( $webinar_text ) {
            $query->set( 's', $webinar_text );
        }

    } elseif ( is_tax( 'webinar_category' ) ) {
        $query->set( 'posts_per_page', 16 );
    } elseif ( $query->is_archive() && $query->is_main_query() && is_post_type_archive( 'retrospective' ) ) {
        $query->set( 'posts_per_page', 100 );
    } elseif ( $query->is_archive() && $query->is_main_query() && is_post_type_archive( 'casestudy' ) ) {
        $query->set( 'posts_per_page', 100 );

    } // AWARDS
    elseif ( ($query->is_archive() || $query->is_tax()) &&
             $query->is_main_query() &&
             ( is_post_type_archive( 'award' )
               || is_tax( 'award_category' )
             )
    ) {
        $query->set( 'posts_per_page', 21 );
        $query->set( 'orderby', 'meta_value' );
        $query->set( 'meta_key', 'year' );
    }



    return $query;
} );
