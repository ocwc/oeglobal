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

    public function ExcerptSimple() {
        return category_description();
    }
}
