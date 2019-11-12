<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$grid = new FieldsBuilder('Grid of People');
$grid
	->addRepeater( 'items', [ 'min' => 1, 'layout' => 'block' ] )
	    ->addImage('image', ['preview_size' => 'square'])
        ->addText( 'line1', [ 'required', true ] )
        ->addText( 'line2' )
        ->addText( 'line3' )
        ->addText( 'line4' )
	    ->addUrl('url')
	->endRepeater()
	->setLocation('block', '==', 'acf/person-grid');

return $grid;
