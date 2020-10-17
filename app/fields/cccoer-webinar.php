<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

if ( OEG_SITE === 'CCCOER' ) {
    $fields = new FieldsBuilder( 'webinar', [
        'title' => 'Webinar Settings',
    ] );

    $fields
        ->addUrl( 'webinar_youtube', [
            'label' => 'YouTube URL'
        ] )
        ->addUrl( 'webinar_slideshare', [
            "label" => 'Slideshare URL'
        ] )
        ->addRadio( 'webinar_status', [
            "label" => 'Status'
        ] )
            ->addChoices( [
                "announce"  => "Announced",
                "published" => "Published"
            ] )
        ->addDatePicker( 'webinar_date', [
            "label"          => 'Date',
            "type"           => 'date_picker',
            "display_format" => "F j, Y",
            "return_format"  => "M j, Y",
        ] )
        ->setLocation( 'post_type', '==', 'webinar' );

    return $fields;
}
