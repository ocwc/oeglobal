<?php

if (OEG_SITE === 'AWARDS') {
    $acf_fields = ['institution', 'region', 'country', 'city', 'link', 'year'];
    foreach ($acf_fields as $field) {
        register_rest_field( 'award',
            $field,
            array(
                'get_callback'    => null,
                'update_callback' => 'rest_set_field',
                'schema'          => null,
            )
        );

    }
    function rest_set_field( $value, $post, $field_name ) {
        update_field( $field_name, $value, $post->ID );
    }
}
