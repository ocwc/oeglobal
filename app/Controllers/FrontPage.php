<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class FrontPage extends Controller {
    public function latestNews() {
        $custom_query = get_posts( [
            'posts_per_page' => '4',
            'cat'            => 'news'
        ] );

        return array_map(function ($post) {
            return [
                'title' => $post->post_title,
                'excerpt' => get_the_excerpt($post),
                'url' => get_permalink($post),
                'author' => get_the_author_meta('display_name', $post->post_author),
                'date' => get_the_date('M j, Y', $post),
            ];
        }, $custom_query);
    }
}
