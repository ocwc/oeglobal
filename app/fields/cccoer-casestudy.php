<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

if ( OEG_SITE === 'CCCOER' ) {
    $fields = new FieldsBuilder( 'case-study', [
        'title'    => 'Case Study',
        'position' => 'acf_after_title'
    ] );

    $fields
        ->addWysiwyg( 'casestudy_overview', [
            'label' => 'Overview Box'
        ] )
        ->addImage( 'authors_image', [
            'label'         => 'Author(s) Image',
        ] )
        ->setLocation( 'post_type', '==', 'casestudy' );

    return $fields;
}
