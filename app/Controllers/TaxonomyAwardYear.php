<?php

namespace App\Controllers;

use Sober\Controller\Controller;
use App\Controllers\Category;

class TaxonomyAwardYear extends Controller {
    protected $template = 'taxonomy-award_year';

    static function mapAwards( $custom_query ) {
        return array_map( function( $post ) {
            return [
                'title'   => get_the_title( $post ),
                'url'     => get_permalink( $post ),
                'image'   => get_the_post_thumbnail_url( $post, 'medium' ),
                'terms'   => wp_get_object_terms( $post->ID, 'award_category' ),
                'country' => get_field( 'country', $post->ID )
            ];
        }, $custom_query );
    }

    public function individualAwards() {
        $term         = get_queried_object();
        $custom_query = get_posts( [
            'post_type'      => 'award',
            'posts_per_page' => '-1',
            'tax_query'      => [
                'relation' => 'AND',
                [
                    'taxonomy' => 'award_year',
                    'field'    => 'slug',
                    'terms'    => $term->slug
                ],
                [
                    'taxonomy' => 'award_category',
                    'field'    => 'slug',
                    'terms'    => 'individual',
                ]
            ],
            'orderby'        => 'term_order',
            'order'          => 'ASC'
        ] );

        return $this->mapAwards( $custom_query );
    }

    public function assetsAwards() {
        $term         = get_queried_object();
        $custom_query = get_posts( [
            'post_type'      => 'award',
            'posts_per_page' => '-1',
            'tax_query'      => [
                'relation' => 'AND',
                [
                    'taxonomy' => 'award_year',
                    'field'    => 'slug',
                    'terms'    => $term->slug
                ],
                [
                    'taxonomy' => 'award_category',
                    'field'    => 'slug',
                    'terms'    => 'open-assets',
                ]
            ],
            'orderby'        => 'term_order',
            'order'          => 'ASC'
        ] );

        return $this->mapAwards( $custom_query );
    }

    public function practicesAwards() {
        $term         = get_queried_object();
        $custom_query = get_posts( [
            'post_type'      => 'award',
            'posts_per_page' => '-1',
            'tax_query'      => [
                'relation' => 'AND',
                [
                    'taxonomy' => 'award_year',
                    'field'    => 'slug',
                    'terms'    => $term->slug
                ],
                [
                    'taxonomy' => 'award_category',
                    'field'    => 'slug',
                    'terms'    => 'open-practices',
                ]
            ],
            'orderby'        => 'term_order',
            'order'          => 'ASC'

        ] );

        return $this->mapAwards( $custom_query );
    }

    public function year() {
        return get_queried_object()->name;
    }

    public function FeaturedImageLarge() {
        $image = get_field( 'featured_image', get_queried_object() );
        if ( $image ) {
            return $image['sizes']['large'];
        }
    }

    public function FeaturedImageAttribution() {
        if ( get_field( 'featured_image_attribution' ) ) {
            return get_field( 'featured_image_attribution' );
        } else {
            return get_field( 'featured_image_attribution', get_queried_object() );
        }
    }
}
