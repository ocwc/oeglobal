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
        ->addPageLink('link', ['post_type' => ['page']])
        ->addUrl('url')
            ->setInstructions('If you select link and url, the url will be used.')
	->endRepeater()
	->setLocation('block', '==', 'acf/person-grid');

return $grid;
