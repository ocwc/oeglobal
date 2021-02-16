<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

if (OEG_SITE === 'CCCOER') {
    acf_add_options_page(array(
        'page_title' => 'Home Page',
        'menu_title' => 'Home Page',
        'menu_slug'  => 'theme-home-settings',
        'capability' => 'edit_posts',
        'redirect'   => false
    ));

    $options = new FieldsBuilder( 'cccoer-home', [
        'title' => 'Home page settings'
    ] );
    $options
        ->addRepeater( 'options-featured', [
            'label' => 'Featured',
            'min'    => 0,
            'max'    => 2,
            'layout' => 'block',
        ] )
        ->addText( 'title' )
        ->addUrl( 'link' )
        ->addImage( 'image' )
        ->addText( 'description' )
    ->setLocation( 'options_page', '==', 'theme-home-settings' );

    $options
        ->addRepeater( 'options-testimonials', [
            'label' => 'Testimonials',
            'min'    => 1,
            'max'    => 6,
            'layout' => 'block',
        ] )
        ->addTextarea( 'text' )
        ->addText( 'name' )
        ->addText( 'title' )
        ->setLocation( 'options_page', '==', 'theme-home-settings' );

    return $options;
}
