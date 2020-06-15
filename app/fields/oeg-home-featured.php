<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

if (OEG_SITE === 'OEG') {
    acf_add_options_page(array(
        'page_title' => 'Home Page',
        'menu_title' => 'Home Page',
        'menu_slug'  => 'oeg-home-settings',
        'capability' => 'edit_posts',
        'redirect'   => false
    ));

    $featured = new FieldsBuilder('oeg-home-featured', [
        'title' => 'Featured OEG Promotions'
    ]);
    $featured
        ->addRepeater('options-featured', [ 'min' => 1, 'layout' => 'block', 'label' => 'Items' ])
            ->addText('title')
            ->addImage('image', [ 'preview_size' => 'medium' ])
            ->addUrl('url')
            ->addTrueFalse('enabled')
        ->endRepeater()

        ->setLocation('options_page', '==', 'oeg-home-settings');

    return $featured;
}
