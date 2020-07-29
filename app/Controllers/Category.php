<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class Category extends Controller
{
    public function FeaturedImageLarge() {
        $image = get_field('featured_image', get_queried_object());
        if ( $image) {
            return $image['sizes']['large'];
        }
    }

    public function FeaturedImageAttribution() {
        if (get_field('featured_image_attribution')) {
            return get_field('featured_image_attribution');
        } else {
            return get_field('featured_image_attribution', get_the_category()[0]);
        }
    }

    public function ExcerptSimple() {
        return category_description();
    }

    public function Variant() {
        return '';
    }
}
