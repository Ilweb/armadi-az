<?php

if (!session_id()) {
    session_start();
}



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
	
	pll_register_string('header', 'Customer Support');
	pll_register_string('header', 'Phone');
	pll_register_string('footer', 'Info');
	pll_register_string('footer', 'Contact Us');
	pll_register_string('footer', 'Follow Us');
	pll_register_string('footer', 'Newsletter');
	pll_register_string('footer', 'Subscribe');
	pll_register_string('footer', 'Invalid email address');
	pll_register_string('Filters', 'Subcategory');
	pll_register_string('Filters', 'Filters');	
	pll_register_string('Promo line', 'Active brochure category');
	pll_register_string('Promo line', 'Promo line 1');
	pll_register_string('yourOrder', 'YOUR ORDER');
	pll_register_string('yourOrder', 'Delivery');
	pll_register_string('yourOrder', 'Payment');
	pll_register_string('yourOrder', 'Confirmation');
	pll_register_string('yourOrder', 'Next');
	pll_register_string('yourOrder', 'BACK');
	pll_register_string('UBB', 'Payment status');
	pll_register_string('UBB', 'Paid');
	pll_register_string('UBB', 'Please print');
	pll_register_string('UBB', 'Print');
	pll_register_string('UBB', 'Merchant name');
	pll_register_string('UBB', 'Merchant website');
	pll_register_string('UBB', 'Buyer name');
	pll_register_string('UBB', 'Faild transaction text');
	pll_register_string('welcome', 'WELCOME');
	pll_register_string('welcome', 'Login to your Armadiaz.com');
	pll_register_string('welcome', 'and your personal proposals');
	pll_register_string('welcome', 'Hi');
	pll_register_string('welcome', 'Enjoy shopping with us!');
	pll_register_string('How to pay', 'preliminary order');	
	pll_register_string('tabs','Ingredient and Nutrition values');	
	
	pll_register_string('contacts', 'Your message was sent successfully');
	pll_register_string('contacts', 'Please confirm not robot');
	pll_register_string('contacts', 'Message');
	pll_register_string('contacts', 'Invalid E-mail address');
	pll_register_string('contacts', 'Please, fill in all the required fields');
	pll_register_string('contacts', 'Send');
	pll_register_string('contacts', 'Name');
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
						'operator' => 'AND',
						'include_children' => false
					)
				);
			}
		}
	}
}

class WC_Gateway_MyPayment extends WC_Payment_Gateway {
	public function __construct()
	{
		$this->id = "UBB";
		$this->method_title = "UBB";
		$this->init_form_fields();
		$this->init_settings();
		$this->title = $this->get_option( 'title' );
		add_action( 'woocommerce_update_options_payment_gateways_' . $this->id, array( $this, 'process_admin_options' ) );
	}

	public function init_form_fields()
	{
		$this->form_fields = array(
			'enabled' => array(
				'title' => __( 'Enable/Disable', 'woocommerce' ),
				'type' => 'checkbox',
				'label' => __( 'Enable UBB payment', 'woocommerce' ),
				'default' => 'yes'
			),
			'title' => array(
				'title' => __( 'Title', 'woocommerce' ),
				'type' => 'text',
				'description' => __( 'This controls the title which the user sees during checkout.', 'woocommerce' ),
				'default' => __( 'Pay with card', 'woocommerce' ),
				'desc_tip'      => true,
			),
			'description' => array(
				'title' => __( 'Customer Message', 'woocommerce' ),
				'type' => 'textarea',
				'default' => ''
			)
		);
	}

	public function process_payment( $order_id ) {
		global $woocommerce;
		$order = new WC_Order( $order_id );

		// Reduce stock levels
		$order->reduce_order_stock();
		
		if ($order->get_status() == 'failed')
		{
			$order->update_status('pending'); 
		}

		// Remove cart
		$woocommerce->cart->empty_cart();
		
		$price = $order->get_total();
		
		require_once "./Universal/UniversalPlugin.php";
		require_once "./Universal/UniversalPluginXMLFileParser.php";
		require_once "./Universal/Framework.php";
		
		$currentContext = pll_home_url(pll_current_language('slug'));
		//$currentContext = 'http://armadiaz.bg/UniversalTester/';
		
		$CGPipe = new UniversalPlugin(false);
		//$CGPipe->setProtocol("");
		$CGPipe->set("action", "1");	// 1 - Purchase, 4 - Authorization
		$CGPipe->set("amt", $price);
		$CGPipe->set("currencycode", "975");
		$CGPipe->set("trackid", $order_id);
		$CGPipe->set("langid", pll_current_language('locale'));
		$CGPipe->set("responseurl", $currentContext.'wc-api/notify/'  );
		$CGPipe->set("errorurl", $currentContext.'wc-api/failed/' );
		
		$CGPipe->setResourcePath('/home/armadiaz/resource.cgn');
		$CGPipe->setTerminalAlias('ARMADIAZ OOD');

		$CGPipe->setTransactionType("PaymentInit");
		$CGPipe->setVersion("1");
		
		$CGPipe->performTransaction();
		
		$respArray = $CGPipe->getResponseFields();
		
		if (isset($respArray["ERROR_CODE_TAG"])) {	
			$error = $respArray["ERROR_CODE_TAG"];
		}
		else {
			$error = '';
		}
		if (isset($respArray["ERROR_TEXT"])) {	
			$errortext = $respArray["ERROR_TEXT"]; 
		}
		else {
			$errortext = '';
		}
				
		if (!empty($error)) {
			echo "<h2>Error code: $error</h2>\r\n";
			echo "<h2>Error message: $errortext</h2>\r\n"; 
			if (!strcmp($error, "CM90100")) {
				echo "Unable to invoke requested Command.<br/>\r\n";
			}
		} else {
			if(isset($respArray['PAYMENTPAGE']) && isset($respArray['PAYMENTID'])) {	
				$_SESSION['payments'][$respArray['PAYMENTID']] = $order_id;
			
				performGatewayRedirect($respArray['PAYMENTPAGE'], $respArray['PAYMENTID']);
			}
			exit;
		}
	}
}

add_action( 'woocommerce_api_notify', 'check_obb_response' );
	
function check_obb_response()
{
	$paymentID  = $_REQUEST['paymentid'];
	$error      = $_REQUEST['Error'];			
	$errortext  = $_REQUEST['ErrorText']; 
	$order_id   = $_REQUEST['trackid'];
	$tran_id = $_REQUEST['tranid'];
	
	
	if ($_REQUEST['result'] == "CAPTURED") {
		$order = new WC_Order( $order_id );
		
		$order->payment_complete( $tran_id );
		
		update_post_meta( $order_id, '_payment_ref', $_REQUEST['ref']);
		update_post_meta( $order_id, '_payment_result', $_REQUEST['result']);
		update_post_meta( $order_id, '_payment_postdate', $_REQUEST['postdate']);
		update_post_meta( $order_id, '_payment_auth', $_REQUEST['auth']);
		update_post_meta( $order_id, '_payment_id', $paymentID);
		
		$url = $order->get_checkout_order_received_url( );
	}
	else
	{
		$url = pll_home_url(pll_current_language('slug')).'wc-api/failed/';
		
		unset($_REQUEST['Error']);
		unset($_REQUEST['ErrorText']);
		$url = add_query_arg( $_REQUEST, $url );
	}
	
	echo "REDIRECT=" . $url;
	
	exit;
}


add_action( 'woocommerce_api_failed', 'obb_failed' );

function obb_failed()
{	
	$paymentID  = $_REQUEST['paymentid'];
	
	$order_id = $_SESSION['payments'][$paymentID];
	
	$order = new WC_Order( $order_id );
	
	if ($order->get_status() != 'failed')
	{
		$order->update_status( 'failed' );
		increase_order_stock($order);
		
		update_post_meta( $order_id, '_payment_id', $paymentID);
	}
	
	//update_post_meta( $order_id, '_payment_error', $error.': '.$errortext);
	
	
	$url = $order->get_checkout_order_received_url( );
	
	//wc_add_notice( __('Payment error:', 'woothemes') . $errortext, 'error' );
	
	wp_redirect( $url );
	exit;
}

function increase_order_stock($order) {
	if ( 'yes' === get_option( 'woocommerce_manage_stock' ) && apply_filters( 'woocommerce_can_reduce_order_stock', true, $order ) && sizeof( $order->get_items() ) > 0 ) {
		$_pf = new WC_Product_Factory();  
		foreach ( $order->get_items() as $item ) {
			if ( $item['product_id'] > 0 ) {
				$languages = pll_languages_list();
				
				foreach ($languages as $lang) {					
					$id = pll_get_post($item['product_id'], $lang);
					$_product = $_pf->get_product($id);
					
					if ( $_product && $_product->exists() && $_product->managing_stock() ) {
						$qty       = apply_filters( 'woocommerce_order_item_quantity', $item['qty'], $order, $item );
						$new_stock = $_product->increase_stock( $qty );
						
						if (pll_current_language() == $lang) {
							$item_name = $_product->get_sku() ? $_product->get_sku(): $item['product_id'];
							
							if ( isset( $item['variation_id'] ) && $item['variation_id'] ) {
								$order->add_order_note( sprintf( __( 'Item %1$s variation #%2$s stock increased from %3$s to %4$s.', 'woocommerce' ), $item_name, $item['variation_id'], $new_stock - $qty, $new_stock) );
							} else {
								$order->add_order_note( sprintf( __( 'Item %1$s stock increased from %2$s to %3$s.', 'woocommerce' ), $item_name, $new_stock - $qty, $new_stock) );
							}
							$order->send_stock_notifications( $_product, $new_stock, $item['qty'] );
						}
					}
				}
			}
		}

		add_post_meta( $order->id, '_order_stock_increased', '1', true );
	}
}

function increase_on_change($order_id)
{
	$order = new WC_Order( $order_id );
	
	increase_order_stock($order);
}

add_action('woocommerce_order_status_pending_to_cancelled', 'increase_on_change');
add_action('woocommerce_order_status_processing_to_cancelled', 'increase_on_change');
add_action('woocommerce_order_status_on-hold_to_cancelled', 'increase_on_change');


function add_your_gateway_class( $methods ) {
	$methods[] = 'WC_Gateway_MyPayment';
	return $methods;
}

add_filter( 'woocommerce_payment_gateways', 'add_your_gateway_class' );

function performGatewayRedirect($url, $paymentId) {

    // Begin HTML CODE
	?>
	<html>
	<head>
		<META HTTP-EQUIV="PRAGMA" CONTENT="NO-CACHE">
	</head>
	<body OnLoad="OnLoadEvent();">
		<form action="<?php echo $url ?>" method="post" name="form1" autocomplete="off">
			<input type="hidden" name="PaymentID" value="<?php echo $paymentId ?>"  /> 
		</form>
		<script language="JavaScript">

		function OnLoadEvent() {
		   document.form1.submit();
		   timVar = setTimeout("procTimeout()",300000);
		}

		function procTimeout() {
			location = 'http://armadiaz.bg/';
		}

		//
		// disable page duplication -> CTRL-N key
		//
		if (document.all) {
			document.onkeydown = function () {
				if (event.ctrlKey && event.keyCode == 78) {
					return false;
				}
			}
		}
		</script>
	</body>
	</html>
	<?php
	// End of HTML CODE

}

	
function filter_gateways($gateways){

	$payment_NAME = 'UBB'; // <--------------- change this
	$category_ID = array(41, 670, 684, 686);  // <----------- and this

	global $woocommerce;
	//var_dump($gateways);
	foreach ($woocommerce->cart->cart_contents as $key => $values ) {
		$terms = get_the_terms( $values['product_id'], 'product_cat' );
		//var_dump($terms);
		foreach ($terms as $term) {
			if(in_array($term->term_id, $category_ID)){
				unset($gateways[$payment_NAME]);
				// If you want to remove another payment gateway, add it here i.e. unset($gateways['cod']);
				break;
			}
		}

	}
	
	return $gateways;

}
add_filter('woocommerce_available_payment_gateways','filter_gateways');

add_filter( 'woocommerce_product_tabs', 'woo_new_product_tab' );
function woo_new_product_tab( $tabs ) {
	global $post;

	if (trim(get_post_meta($post->ID, '_custom_text_field', true)))
	{
		$tabs['test_tab'] = array(
			'title' 	=> pll__( 'Ingredient and Nutrition values', 'woocommerce' ),
			'priority' 	=> 50,
			'callback' 	=> 'woo_new_product_tab_content'
		);
	}

	return $tabs;


}
function woo_new_product_tab_content() {
	global $post;
	
	echo '<p>'.get_post_meta($post->ID, '_custom_text_field', true).'</p>';
	
}


add_action( 'woocommerce_product_options_general_product_data', 'wc_custom_add_custom_fields' );
function wc_custom_add_custom_fields() {
    // Print a custom text field
    woocommerce_wp_textarea_input( 
	array( 
		'id'          => '_custom_text_field', 
		'label'       => __( 'Ingredient and Nutrition values', 'woocommerce' ), 
		'placeholder' => 'If you add text here, a new tab will appear.'
	
    ) );
}
add_action( 'woocommerce_process_product_meta', 'wc_custom_save_custom_fields' );
function wc_custom_save_custom_fields( $post_id ) {
        update_post_meta( $post_id, '_custom_text_field', esc_attr( $_POST['_custom_text_field'] ) );
}

function my_handling_function( $comment_data ) {
     //var_dump($_POST, $comment_data);
	wc_add_notice('Please confirm not robot', 'error');
	 //exit;
	$secretKey = "6LcrIhIUAAAAAOt4V6l8EijduFaSUpspm04Lmqwf";
	$ip = $_SERVER['REMOTE_ADDR'];
	$response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."&response=".$captcha."&remoteip=".$ip);
	$responseKeys = json_decode($response,true);
	
	if(intval($responseKeys["success"]) != 1) 
	{
		wp_die(pll__('Please confirm not robot'));
	}
	
	return $comment_data;
}
add_filter( 'preprocess_comment', 'my_handling_function' );
