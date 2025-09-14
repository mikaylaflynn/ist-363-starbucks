<?php
function starbucks_cpt() {
    register_post_type('locations',
        array(
            'labels'      => array(
                'name'          => __('Locations', 'textdomain'),
                'singular_name' => __('Location', 'textdomain'),
            ),
			'public'      => true,
			'show_in_rest' => true, // displays the new content editor
			'has_archive' => true,
			'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'page-attributes'),
		)
    );
	register_post_type('employees',
        array(
            'labels'      => array(
                'name'          => __('Employees', 'textdomain'),
                'singular_name' => __('Employee', 'textdomain'),
            ),
			'public'      => true,
			'has_archive' => true,
			'show_in_rest' => true, // displays the new content editor
			'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'page-attributes'),
		)
    );
	register_post_type('products',
        array(
            'labels'      => array(
                'name'          => __('Products', 'textdomain'),
                'singular_name' => __('Product', 'textdomain'),
            ),
			'public'      => true,
			'exclude_from_search'   => false,
			'has_archive' => true, // 
			'show_in_rest' => true, // displays the new content editor
			'supports' => array('title', 'thumbnail'),
		)
    );
} // function starbucks_cpt end
add_action('init', 'starbucks_cpt');
