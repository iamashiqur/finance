<?php

/**
 * Index page main hero slider
 */

function finance_custom_slider()
{
    register_post_type(
        'sliders',
        array(
            'labels' => array(
                'name' => __('Slides', 'finance'),
                'singular_name' => __('slider', 'finance'),
            ),
            'public' => true,
            'supports' => array('title', 'editor', 'thumbnail',  'custom-fields')
        )
    );
}
add_action('init', 'finance_custom_slider');
