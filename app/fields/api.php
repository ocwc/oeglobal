<?php

if (OEG_SITE === 'AWARDS') {
    register_rest_field( 'award',
        'institution',
        array(
            'get_callback'    => null,
            'update_callback' => 'rest_set_field',
            'schema'          => null,
        )
    );

    register_rest_field( 'award',
        'country',
        array(
            'get_callback'    => null,
            'update_callback' => 'rest_set_field',
            'schema'          => null,
        )
    );

    function rest_set_field( $value, $post, $field_name ) {
        update_field( $field_name, $value, $post->ID );
    }
}
