<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class TemplateCccoerPeople extends Controller {
    protected $acf = true;

    public function people_list() {
        $people = get_field( 'people' );
        $roles  = get_field_object( 'field_people_people_role' )['choices'];

        $data = [];
        foreach ( $roles as $value => $name ) {

            $data[$value]['label'] = $name;
            $data[$value]['items'] =

                array_map( function( $el )  {
                    return [
                        'image' => $el['image'],
                        'line1' => $el['name'],
                        'line2' => $el['position'] ?? '',
                        'line3' => $el['organization'] ?? '',
                        'line4' => $el['location'] ?? '',
                        'url' => null
                    ];
                }, array_filter( $people, function( $el ) use ( $value ) {
                    return $el['role'] === $value;
                } ) );
        }

        return $data;
    }
}
