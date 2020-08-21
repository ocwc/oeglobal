<?php

namespace App\Controllers;

use Sober\Controller\Controller;
use Abraham\TwitterOAuth\TwitterOAuth;

if ( OEG_SITE === 'oeg' ) {
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
} else if ( OEG_SITE === 'CCCOER' ) {
    class FrontPage extends Controller {
        public function getFeatured() {
            $rows = get_field( 'options-featured', 'options' );
            if ( $rows ) {
                return $rows[0];
            }
        }

        public function webinars() {
            $custom_query = get_posts( [
                'posts_per_page' => '3',
                'post_type'      => 'webinar'
            ] );

            return array_map( function( $post ) {
                return [
                    'title'   => $post->post_title,
                    'excerpt' => \Illuminate\Support\Str::words( get_the_excerpt( $post ), 16, ' [..]' ),
                    'url'     => get_permalink( $post ),
                    'author'  => get_the_author_meta( 'display_name', $post->post_author ),
                    'date'    => get_the_date( 'M j, Y', $post ),
                    'image'   => get_the_post_thumbnail_url( $post, 'large' )
                ];
            }, $custom_query );
        }

        public function news() {
            $custom_query = get_posts( [
                'posts_per_page' => '3',
                'cat'            => 'news',
            ] );

            return array_map( function( $post ) {
                return [
                    'title'   => $post->post_title,
                    'excerpt' => \Illuminate\Support\Str::words( get_the_excerpt( $post ), 32, ' [..]' ),
                    'url'     => get_permalink( $post ),
                    'author'  => get_the_author_meta( 'display_name', $post->post_author ),
                    'date'    => get_the_date( 'M j, Y', $post ),
                    'image'   => get_the_post_thumbnail_url( $post, 'large' ),
                    'terms'   => App::TermsWithLinks( $post ),
                    'post'    => $post
                ];
            }, $custom_query );
        }

        public function caseStudies() {
            $custom_query = get_posts( [
                'post_type'      => 'casestudy',
                'posts_per_page' => '3'
            ] );

            return array_map( function( $post ) {
                return [
                    'title' => \App\truncate( $post->post_title, 45, ' &#8230;' ),
                    'url'   => get_permalink( $post ),
                    'image' => get_the_post_thumbnail_url( $post, 'medium' ),
                ];
            }, $custom_query );
        }

        public function studentStories() {
            $custom_query = get_posts( [
                'post_type'      => 'casestudy', //'studentstory',
                'posts_per_page' => '3',
                'orderby'        => 'rand'
            ] );

            return array_map( function( $post ) {
                return [
                    'title' => \App\truncate( $post->post_title, 45, ' &#8230;' ),
                    'url'   => get_permalink( $post ),
                    'image' => get_the_post_thumbnail_url( $post, 'medium' ),
                ];
            }, $custom_query );
        }

        public function ediStories() {
            $custom_query = get_posts( [
                'post_type'      => 'casestudy', //'edi',
                'posts_per_page' => '3',
                'orderby'        => 'rand'
            ] );

            return array_map( function( $post ) {
                return [
                    'title' => \App\truncate( $post->post_title, 45, ' &#8230;' ),
                    'url'   => get_permalink( $post ),
                    'image' => get_the_post_thumbnail_url( $post, 'medium' ),
                ];
            }, $custom_query );
        }

        public function tweets() {
            if ( get_transient( 'tweets' ) !== false ) {
                return get_transient( 'tweets' );
            } else {
                $connection = new TwitterOAuth( TWITTER_API_KEY, TWITTER_API_SECRET, TWITTER_ACCESS_TOKEN_KEY, TWITTER_ACCESS_TOKEN_SECRET );
                $content    = $connection->get( "search/tweets",
                    [
                        "q"        => "cccoer",
                        "since_id" => 702939861158768640,
                        "count"    => 100
                    ] );
                $tweets     = array();
                foreach ( $content->statuses as $tweet ) {
                    if ( ! isset( $tweet->retweeted_status ) ) {
                        $tweets[] = $tweet->id_str;
                    }
                }

                $tweets = array_slice( $tweets, 0, 4 );
                $htmls = [];
                foreach ($tweets  as $status ) {
                    $htmls[] = wp_oembed_get("https://twitter.com/ccccoer/status/$status");
                }
                set_transient( 'tweets', $htmls, 60 * 60 * 1 );

                return $htmls;
            }
        }
    }
} else {
    class FrontPage extends Controller {

    }
}
