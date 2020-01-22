<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class Single extends Controller {
    public function FeaturedImageLarge() {
        if (get_field('featured_image_large')) {
            return get_field('featured_image_large');
        } else {
            $image = get_field('featured_image', get_the_category()[0]);
            if ( $image) {
                return $image['sizes']['large'];
            }
        }
    }

    public function FeaturedImageAttribution() {
        if (get_field('featured_image_attribution')) {
            return get_field('featured_image_attribution');
        } else {
            $license = get_field('featured_image_attribution', get_the_category()[0]);
            return $license;
        }
    }
}
