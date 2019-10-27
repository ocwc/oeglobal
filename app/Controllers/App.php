<?php

namespace App\Controllers;

use Sober\Controller\Controller;
use Log1x\Navi\Navi;
use function App\sage;


class App extends Controller {
    protected $acf = true;

    public function siteName() {
        return get_bloginfo( 'name' );
    }

    public function navigation() {
        $navigation = ( new Navi() )->build( 'primary_navigation' )->toArray();

        return $navigation;
    }

    public function navigationFooter() {
        $navigation = ( new Navi() )->build( 'footer_navigation' )->toArray();

        return $navigation;
    }

    public function excerptSimple() {
        global $post;
        if ( has_excerpt() ) {
            return $post->post_excerpt;
        }
    }

    public function featuredImageLarge() {
        global $post;
        return get_the_post_thumbnail_url($post, 'large');
    }

    public function title() {
        if ( is_home() ) {
            if ( $home = get_option( 'page_for_posts', true ) ) {
                return get_the_title( $home );
            }

            return __( 'Latest Posts', 'sage' );
        }
        if ( is_archive() ) {
            return get_the_archive_title();
        }
        if ( is_search() ) {
            return sprintf( __( 'Search Results for %s', 'sage' ), get_search_query() );
        }
        if ( is_404() ) {
            return __( 'Not Found', 'sage' );
        }

        return get_the_title();
    }
}
