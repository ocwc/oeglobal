<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$person = new FieldsBuilder( 'Person Image Settings' );
$person
    ->addImage( 'image', [ 'preview_size' => 'square', 'key' => 'image' ] )
    ->setLocation( 'block', '==', 'acf/person-image' );

return $person;
