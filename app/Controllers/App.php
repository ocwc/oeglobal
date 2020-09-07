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
        if ( has_nav_menu( 'primary_navigation' ) ) {
            $navigation = ( new Navi() )->build( 'primary_navigation' )->toArray();

            return $navigation;
        }
    }

    public function navigationFooter() {
        if ( has_nav_menu( 'footer_navigation' ) ) {
            $navigation = ( new Navi() )->build( 'footer_navigation' )->toArray();

            return $navigation;
        }
    }

    public function excerptSimple() {
        global $post;
        if ( has_excerpt() ) {
            return $post->post_excerpt;
        }
    }

    public function featuredImageLarge() {
        global $post;

        return get_the_post_thumbnail_url( $post, 'large' );
    }

    public function featuredImageSquare() {
        global $post;

        return get_the_post_thumbnail_url( $post, 'square' );
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

    public static function extractBlockUrl( $item ) {
        if ( $item['link'] ) {
            $url = $item['link'];
        } else if ( $item['url'] ) {
            $url = $item['url'];
        } else {
            $url = null;
        };

        return $url;
    }

    public function site() {
        return strtolower( OEG_SITE );
    }

    public static function TermsWithLinks( $post ) {
        if ( $post ) {
            $terms = wp_get_post_terms( $post->ID, 'category' );

            return array_map( function( $term ) {
                return [
                    'name' => $term->name,
                    'link' => get_term_link( $term )
                ];
            }, $terms );
        }
    }

    public static function RelatedPosts($post) {
        if ( function_exists( 'yarpp_get_related' ) ) {
            $related = yarpp_get_related( [
                'post_type' => ['post', 'webinar'],
                'limit' => 3,
                'recent' => '24 month'
            ], $post->ID );
            return $related;
        }

        return [];
    }

    public function FeaturedImageAttribution() {
        return false;
    }

    public function Variant() {
        return false;
    }

    public function coauthors() {
        if ( function_exists( 'get_coauthors' ) ) {
            $coauthors = get_coauthors();
            $authors = [];
            foreach ( $coauthors as $coauthor ) {
                $authors[] = array(
                    'id'            => $coauthor->ID,
                    'display_name'  => $coauthor->display_name,
                    'user_nicename' => $coauthor->user_nicename,
                    'avatar'        => get_avatar_url( $coauthor->user_email )
                );
            }

            return $authors;
        }

        return [];
    }

    public function PostType() {
        return get_post_type();
    }
}
