<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

if ( OEG_SITE === 'AWARDS' ) {
    $featured = new FieldsBuilder( 'Featured Icon Settings' );
    $featured->addImage( 'featured_icon', [ 'preview_size' => 'thumbnail' ] )
             ->setLocation( 'taxonomy', '==', 'award_category' );

    return $featured;
}
