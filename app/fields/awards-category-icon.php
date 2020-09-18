<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

if (OEG_SITE === 'AWARDS') {
    $cat = new FieldsBuilder( 'Featured Image Settings' );
    $cat->addImage( 'featured_icon', [ 'preview_size' => 'thumbnail' ] )
        ->setLocation( 'taxonomy', '==', 'award_category' );

    return $cat;
}
