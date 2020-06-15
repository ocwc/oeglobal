<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

if (OEG_SITE === 'OEG') {
    $spotlight = new FieldsBuilder('oeg-home-members', [
        'title' => 'Members spotlight'
    ]);
    $spotlight
        ->addRepeater('items', [ 'min' => 1, 'layout' => 'block' ])
            ->addText('title')
            ->addText('member')
            ->addText('description')
            ->addImage('image', [ 'preview_size' => 'medium' ])
            ->addUrl('url')
            ->addTrueFalse('enabled')
        ->endRepeater()
        ->setLocation('options_page', '==', 'oeg-home-settings');

    return $spotlight;
}
