<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

if ( OEG_SITE === 'CCCOER' ) {
    $fields = new FieldsBuilder( 'people', [
        'title' => 'Page - People',
    ] );

    $fields
        ->addRepeater( 'people', [
            'label'        => 'People',
            'button_label' => 'Add Person',
            'layout'       => 'row',
        ] )
        ->addImage( 'image', [
            'preview_size' => 'thumbnail',
        ] )
        ->addText( 'name' )
        ->addText( 'position' )
        ->addText( 'organization' )
        ->addText( 'location' )
        ->addRadio( 'role', [
            'layout' => 'vertical'
        ] )
        ->addChoices( [
            "staff"        => "Staff",
            "board"        => "Advisory Board",
            "council"      => "Executive Council",
            "professional" => "Professional Development Committee",
            "special"      => "Special Projects Committee",
            "emiritus"     => "Advisory Emeritus",
        ] )
        ->setLocation( 'page_template', '==', 'views/template-cccoer-people.blade.php' );

    return $fields;
}
