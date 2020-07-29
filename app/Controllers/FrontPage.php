<?php

namespace App\Controllers;

use Sober\Controller\Controller;

if (OEG_SITE === 'oeg') {
    class FrontPage extends Controller {
        public function latestNews() {
            $custom_query = get_posts( [
                'posts_per_page' => '4',
                'cat'            => 'news'
            ] );

            return array_map( function( $post ) {
                return [
                    'title'   => $post->post_title,
                    'excerpt' => get_the_excerpt( $post ),
                    'url'     => get_permalink( $post ),
                    'author'  => get_the_author_meta( 'display_name', $post->post_author ),
                    'date'    => get_the_date( 'M j, Y', $post ),
                ];
            }, $custom_query );
        }

        public function getFeatured() {
            $rows = get_field( 'options-featured', 'options' );
            $rows = array_filter( $rows, function( $item ) {
                return $item['enabled'];
            } );

            return array_slice( $rows, 0, 3 );
        }

        public function getSpotlight() {
            $rows = get_field( 'options-spotlight', 'options' );
            $rows = array_filter( $rows, function( $item ) {
                return $item['enabled'];
            } );

            return array_slice( $rows, 0, 3 );
        }
    }
} else {
    class FrontPage extends Controller {

    }
}
