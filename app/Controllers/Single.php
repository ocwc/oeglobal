<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class Single extends Controller {
    public function FeaturedImageLarge() {
        $image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large');
        if ($image) {
            return $image[0];
        } else {
            $cat = get_the_category()[0];
            $image = get_field('featured_image', 'cat_' . $cat->term_id);
            if ( $image) {
                return $image[0]['sizes']['large'];
            }
        }
    }

    public function FeaturedImageAttribution() {
        if (get_field('featured_image_attribution')) {
            return get_field('featured_image_attribution');
        } else {
            if (get_the_category()) {
                return get_field( 'featured_image_attribution', get_the_category()[0] );
            }
        }
    }
}
