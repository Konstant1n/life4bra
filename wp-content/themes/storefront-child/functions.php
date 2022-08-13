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
add_action('template_redirect', 'remove_page_breadcrumbs' );
function remove_page_breadcrumbs(){
    if (is_page('landing'))
    remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 10, 0);
}

