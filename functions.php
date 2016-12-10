<?php


add_action('after_setup_theme', 'my_theme_setup');
function my_theme_setup()
{
    load_theme_textdomain('armadiaz', get_template_directory() . '/languages');
	
	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	add_theme_support( 'woocommerce' );
	
	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );
	
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 405, 810 );
	
	
	
	register_nav_menus(array(
		'primary' => __('Primary menu', 'armadiaz'),
		'secondary'=>__('Secondary menu', 'armadiaz'),
		'footer' => __('Footer menu', 'armadiaz'),
		'info'=>__('Info menu', 'armadiaz'),
		'contact us'=>__('Contact us menu', 'armadiaz')
	));
	
	pll_register_string('Info menu', 'Info');
	pll_register_string('Contact us menu', 'Contact Us');
	pll_register_string('Follow Us', 'Follow Us');
	pll_register_string('Newsletter', 'Newsletter');
	pll_register_string('Next', 'Next');
	pll_register_string('Promo line', 'Promo line 1');
	pll_register_string('Filters', 'Subcategory');
	pll_register_string('Promo line', 'Active brochure category');
}

function wooc_extra_register_fields() {
?><p class="woocommerce-FormRow woocommerce-FormRow--wide form-row form-row-wide"><label for="reg_billing_first_name"><?php _e( 'First name', 'woocommerce' ); ?><span class="required">*</span></label><input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="billing_first_name" id="reg_billing_first_name" value="<?php if ( ! empty( $_POST['billing_first_name'] ) ) esc_attr_e( $_POST['billing_first_name'] ); ?>" /></p><p class="woocommerce-FormRow woocommerce-FormRow--wide form-row form-row-wide"><label for="reg_billing_last_name"><?php _e( 'Last name', 'woocommerce' ); ?><span class="required">*</span></label><input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="billing_last_name" id="reg_billing_last_name" value="<?php if ( ! empty( $_POST['billing_last_name'] ) ) esc_attr_e( $_POST['billing_last_name'] ); ?>" /></p><p class="woocommerce-FormRow woocommerce-FormRow--wide form-row form-row-wide"><label for="reg_billing_phone"><?php _e( 'Phone', 'woocommerce' ); ?><span class="required">*</span></label><input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="billing_phone" id="reg_billing_phone" value="<?php if ( ! empty( $_POST['billing_phone'] ) ) esc_attr_e( $_POST['billing_phone'] ); ?>" /></p><?php
}

add_action( 'woocommerce_register_form_start', 'wooc_extra_register_fields' );

function wooc_validate_extra_register_fields( $username, $email, $validation_errors ) {
 
      if ( isset( $_POST['billing_first_name'] ) && empty( $_POST['billing_first_name'] ) ) {
 
             $validation_errors->add( 'billing_first_name_error', __( '<strong>Error</strong>: First name is required!', 'woocommerce' ) );
 
      }
 
      if ( isset( $_POST['billing_last_name'] ) && empty( $_POST['billing_last_name'] ) ) {
 
             $validation_errors->add( 'billing_last_name_error', __( '<strong>Error</strong>: Last name is required!.', 'woocommerce' ) );
 
      }
 
      if ( isset( $_POST['billing_phone'] ) && empty( $_POST['billing_phone'] ) ) {
 
             $validation_errors->add( 'billing_phone_error', __( '<strong>Error</strong>: Phone is required!.', 'woocommerce' ) );
 
      }
 
}
 
add_action( 'woocommerce_register_post', 'wooc_validate_extra_register_fields', 10, 3 );

	
function wooc_save_extra_register_fields( $customer_id ) {
       if ( isset( $_POST['billing_first_name'] ) ) {
              // WordPress default first name field.
              update_user_meta( $customer_id, 'first_name', sanitize_text_field( $_POST['billing_first_name'] ) );
              // WooCommerce billing first name.
              update_user_meta( $customer_id, 'billing_first_name', sanitize_text_field( $_POST['billing_first_name'] ) );
       }
       if ( isset( $_POST['billing_last_name'] ) ) {
              // WordPress default last name field.
              update_user_meta( $customer_id, 'last_name', sanitize_text_field( $_POST['billing_last_name'] ) );
              // WooCommerce billing last name.
              update_user_meta( $customer_id, 'billing_last_name', sanitize_text_field( $_POST['billing_last_name'] ) );
       }
       if ( isset( $_POST['billing_phone'] ) ) {
              // WooCommerce billing phone
              update_user_meta( $customer_id, 'billing_phone', sanitize_text_field( $_POST['billing_phone'] ) );
       }
}
add_action( 'woocommerce_created_customer', 'wooc_save_extra_register_fields' );


add_action('pre_get_posts','armadi_filters');
function armadi_filters($query){

	if( $query->is_main_query() ){
        //Do something to main query
		
		if(isset($_GET['c']))
		{
			$categories = array();
			foreach ($_GET['c'] as $c)
			{
				if (is_numeric($c) && (int)$c)
				{
					$categories[] = (int)$c;
				}
			}
			if (count($categories))
			{
				
				$query->query_vars['tax_query'] = array(
					array(
						'taxonomy' => 'product_cat',
						'terms'    => $categories,
						'operator' => 'AND'
					)
				);
			}
		}
	}
}


