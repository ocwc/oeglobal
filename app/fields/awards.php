<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

if (OEG_SITE === 'AWARDS') {
    $awards = new FieldsBuilder( 'awards-meta', [
        'title' => 'Award settings'
    ] );
    $awards
        ->addText( 'institution' )
        ->addText('country', [ 'required', true ])
        ->addText( 'region' )
        ->addText( 'city' )
        ->addText( 'link' )
        ->addText('year', [ 'required', true ])
        ->setLocation( 'post_type', '==', 'award' );

    return $awards;
}
