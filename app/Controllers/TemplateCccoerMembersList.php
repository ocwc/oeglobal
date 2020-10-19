<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class TemplateCccoerMembersList extends Controller {
    protected $acf = true;

    public function members_list() {
        $url      = MEMBERS_API_URL . "/organization/group_by/consortium/CCCOER/list/?format=json";
        $response = wp_remote_retrieve_body( wp_remote_get( $url ) );

        $members = json_decode( $response );

        $states  = array_unique( array_column( $members, 'state' ) );
        $letters = array();
        foreach ( $states as $state ) {
            $letter = $state[0];
            if ( ! in_array( $letter, $letters ) ) {
                $letters[] = $letter;
            }
        }

        $states = array_fill_keys($states, []);
        foreach ($members as $member) {
            $states[$member->state][] = $member;
        }

        return [$members, $states, $letters];
    }

    public function variant() {
        return 'basic';
    }
}
