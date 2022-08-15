<?php
/* Kostya own */

/* Add widget for view on landing page */
register_sidebar( array(
	'name' => __( 'Нові товари (лендінг)', '' ),
	'id' => 'top-area',
	'description' => __( 'Нові', '' ),
	'before_widget' => '',
	'after_widget' => '',
	'before_title' => '<h3>',
	'after_title' => '</h3>',
) );


// Remove breadcrumbs from shop & categories (does not work, deleted woocommerce_before_main_content from header )
// add_action('template_redirect', 'remove_page_breadcrumbs' );
// function remove_page_breadcrumbs(){
//     if (is_page('landing'))
//     remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 10, 0);
// }


// Видалення пошуку з хедеру
add_action( 'after_setup_theme', 'header_search_remove' );
function header_search_remove() {
	remove_action( 'storefront_header', 'storefront_product_search', 40 );
	remove_action( 'storefront_header', 'storefront_site_branding', 20 );
	
}

add_action( 'storefront_header', 'lb_move_to_top_header_menu', 0 );
function lb_move_to_top_header_menu() {
	echo '<div class="lb_top_menu"> <div class="col-full">';
	storefront_site_branding();
	echo '</div></div>';

}
