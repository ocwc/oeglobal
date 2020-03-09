<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class TemplateElections extends Controller {
    public function candidates() {
        $key = ELECTIONS_KEY;
        $url      = ELECTIONS_API_URL . "/candidate/list/$key/?format=json";

        $response = wp_remote_retrieve_body( wp_remote_get( $url ) );

        return json_decode( $response );
    }
}
