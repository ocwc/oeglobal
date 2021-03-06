<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$cat = new FieldsBuilder( 'Featured Image Settings' );
$cat->addImage( 'featured_image', [ 'preview_size' => 'medium' ] )
    ->addWysiwyg( 'featured_image_attribution', [
        'label'        => 'Attribution and License with link',
        'media_upload' => 0,
        'toolbar'      => 'basic',
    ] )
    ->setLocation( 'taxonomy', '==', 'category' )
        ->or( 'taxonomy', '==', 'award_year' );

return $cat;
