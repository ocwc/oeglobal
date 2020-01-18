<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class TemplateMembersList extends Controller {
    protected $acf = true;

    public function members_list() {
        $url      = MEMBERS_API_URL . "/organization/list/?format=json";
        $response = wp_remote_retrieve_body( wp_remote_get( $url ) );

        return json_decode( $response );
    }
}
