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
}
