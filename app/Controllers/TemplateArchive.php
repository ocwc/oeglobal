<?php

namespace App\Controllers;

use Sober\Controller\Controller;
use WP_Query;

class TemplateArchive extends Controller {
    public function archivePosts(){
        $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
        $posts = new WP_Query([
            'post_type' => 'post',
            'posts_per_page' => 16,
            'paged' => $paged,
            'order' => 'DESC'
        ]);

        return $posts;
    }
}
