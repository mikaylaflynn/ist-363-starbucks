<?php
add_theme_support('post-thumbnails');
function starbucks_cpt() {
    register_post_type('locations',
        array(
            'labels'      => array(
                'name'          => __('Locations', 'textdomain'),
                'singular_name' => __('Location', 'textdomain'),
            ),
			'public'      => true,
			'show_in_rest' => true, // displays the new content editor
            'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'page-attributes'),
        )
    );
}
add_action('init', 'starbucks_cpt');