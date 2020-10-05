<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class Taxonomy extends Controller {
    public function tax(){
        global $wp_query;
        return $wp_query->get_queried_object();
    }
}
