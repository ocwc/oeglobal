<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

if (OEG_SITE === 'AWARDS') {
    $awards = new FieldsBuilder( 'awards-meta', [
        'title' => 'Award settings'
    ] );
    $awards
        ->addText( 'institution' )
        ->addText('country')
        ->setLocation( 'post_type', '==', 'award' );

    return $awards;
}
