<?php

/**
 * Categoris section
 */

function fincnace_categoris_section()
{
    register_post_type(
        'categories',
        array(
            'labels' => array(
                'name' => __('Category', 'finance'),
                'singular_name' => __('category', 'finance'),
            ),
            'public' => true,
            'supports' => array('title', 'editor', 'custom-fields')
        )
    );
}
add_action('init', 'fincnace_categoris_section');
