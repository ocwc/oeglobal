<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;


$attr = new FieldsBuilder( 'Image Attribution' );
$attr->addWysiwyg( 'featured_image_attribution', [
    'label'        => 'Attribution and License with link',
    'media_upload' => 0,
    'toolbar'      => 'basic',
] )
     ->setLocation( 'post_type', '==', 'page' )->or('post_type', '==', 'post')
     ->setGroupConfig( 'position', 'side' );

return $attr;
