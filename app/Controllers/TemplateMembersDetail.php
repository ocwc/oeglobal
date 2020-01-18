<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class TemplateMembersDetail extends Controller {
    protected $acf = true;

    public function member() {
        $member_id = get_query_var( 'member_id' );

        $url      = MEMBERS_API_URL . "/organization/view/$member_id/?format=json";
        $result   = wp_remote_get( $url );
        $response = wp_remote_retrieve_body( $result );

        return json_decode( $response );
    }

    public static function getInitiatives( $member ) {
        $items = array();

        for ( $i = 1; $i <= 3; $i ++ ) {
            if ( $member->{"initiative_description{$i}"} ) {
                $items[] = (object) [
                    'title' =>  $member->{"initiative_title{$i}"},
                    'description' =>  $member->{"initiative_description{$i}"},
                    'url' =>  $member->{"initiative_url{$i}"},
                ];
            }
        }

        return $items;
    }
}

