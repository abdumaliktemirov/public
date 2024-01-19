<?php
add_theme_support( 'title-tag' );


function wpdocs_theme_name_scripts() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/main.css' );
	wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/script.js', array(), '1.0.0', true );
}

add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );



function add_to_cart_ajax_function() {
	$response = array( 'status' => 'error' );

	if ( ! empty( $_POST['product_id'] ) && ! empty( $_POST['quantity'] ) ) {
		WC()->cart->add_to_cart( filter_var( $_POST['product_id'], FILTER_SANITIZE_NUMBER_INT ), filter_var( $_POST['quantity'], FILTER_SANITIZE_NUMBER_INT ) );
		$response['status'] = 'success';
	}

	wp_send_json( $response, 200 );
}

add_action('wp_ajax_add_to_cart_ajax_function', 'add_to_cart_ajax_function');
add_action('wp_ajax_nopriv_add_to_cart_ajax_function', 'add_to_cart_ajax_function');



function myplugin_ajaxurl() {

   echo '<script type="text/javascript">
           var ajax_url = "' . admin_url('admin-ajax.php') . '";
         </script>';
}

add_action('wp_head', 'myplugin_ajaxurl');
