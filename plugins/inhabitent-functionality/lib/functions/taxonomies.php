<?php
/**
 * TAXONOMIES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_taxonomy
 */

// Add your custom taxonomies here...
// Register Custom Taxonomy
function inhabitent_product_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Products_Taxonomies', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Product_Taxonomy', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Product Taxonomy', 'text_domain' ),
		'all_items'                  => __( 'All products', 'text_domain' ),
		'parent_item'                => __( 'Parent product', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent product:', 'text_domain' ),
		'new_item_name'              => __( 'New product Name', 'text_domain' ),
		'add_new_item'               => __( 'Add New product', 'text_domain' ),
		'edit_item'                  => __( 'Edit product', 'text_domain' ),
		'update_item'                => __( 'Update product', 'text_domain' ),
		'view_item'                  => __( 'View product', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate products with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular Items', 'text_domain' ),
		'search_items'               => __( 'Search Items', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No items', 'text_domain' ),
		'items_list'                 => __( 'Items list', 'text_domain' ),
		'items_list_navigation'      => __( 'Items list navigation', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'show_in_rest'               => true,
	);
	register_taxonomy( 'product_taxonomy', array( 'product_type' ), $args );

}
add_action( 'init', 'inhabitent_product_taxonomy', 0 );