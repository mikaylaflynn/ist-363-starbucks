<?php
function starbucks_taxonomies() {
    $labels = array(
            'name'              => _x( 'Menu', 'taxonomy general name', 'textdomain' ),
            'singular_name'     => _x( 'Menu Type', 'taxonomy singular name', 'textdomain' ),
            'search_items'      => __( 'Search Menu Types', 'textdomain' ),
            'all_items'         => __( 'All Menu Types', 'textdomain' ),
            'parent_item'       => __( 'Parent Menu Type', 'textdomain' ),
            'parent_item_colon' => __( 'Parent Menu Type:', 'textdomain' ),
            'edit_item'         => __( 'Edit Menu Type', 'textdomain' ),
            'update_item'       => __( 'Update Menu Type', 'textdomain' ),
            'add_new_item'      => __( 'Add New Menu Type', 'textdomain' ),
            'new_item_name'     => __( 'New Menu Type Name', 'textdomain' ),
            'menu_name'         => __( 'Menu Type', 'textdomain' ),
    );
    
    $args = array(
            'hierarchical'      => true,
            'labels'            => $labels,
            'show_ui'           => true,
            'show_admin_column' => true,
            'show_in_rest' => true
    );
    
    // expose it only to the 'products' custom post type, not posts or pages
    $postTypes = array('products');
     
    // required arguments: slug identifier, post types, options
    register_taxonomy( 'menu', $postTypes, $args );
    } // end of starbucks_taxonomies
    
    // hook into the init action and call netflix_taxonomies when it fires
    add_action( 'init', 'starbucks_taxonomies' );