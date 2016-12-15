<?php
/**
 * Thankyou page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/thankyou.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.2.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( $order ) : ?>
<div class="white">
<div class="bl">
<div class="yourOrder"><p><?php pll_e('Your Order'); ?> </p></div>
<div class="yourOrder"><p><?php pll_e('Delivery'); ?> </p></div>
<div class="yourOrder"><p><?php pll_e('Payment'); ?> </p></div>
<div class="yourOrder"><p><?php pll_e('Confirmation'); ?> </p></div>
<div class="line" style="background-image:url('<?php bloginfo('template_directory'); ?>/images/linee3.png')"></div>
</div>
</div>

	<?php if ( $order->has_status( 'failed' ) ) : ?>
		<p class="woocommerce-thankyou-order-failed" style="color: #FF0000;"><?php echo get_post_meta($order->id, '_payment_error', true); ?></p>
		<p class="woocommerce-thankyou-order-failed"><?php
			//_e( 'Unfortunately your order cannot be processed as the originating bank/merchant has declined your transaction. Please attempt your purchase again.', 'woocommerce' ); 
			pll_e( 'Faild transaction text' );
		?></p>
		
		<p class="woocommerce-thankyou-order-failed-actions">
			<a href="<?php echo esc_url( $order->get_checkout_payment_url() ); ?>" class="button pay"><?php _e( 'Pay', 'woocommerce' ) ?></a>
			<?php if ( is_user_logged_in() ) : ?>
				<a href="<?php echo esc_url( wc_get_page_permalink( 'myaccount' ) ); ?>" class="button pay"><?php _e( 'My Account', 'woocommerce' ); ?></a>
			<?php endif; ?>
		</p>

	<?php else : ?>

		<p class="woocommerce-thankyou-order-received"><?php echo apply_filters( 'woocommerce_thankyou_order_received_text', __( 'Thank you. Your order has been received.', 'woocommerce' ), $order ); ?></p>

		<p><?php pll_e('Merchant name'); ?></p>
		<p><?php pll_e('Merchant website'); ?></p>
		<ul class="woocommerce-thankyou-order-details order_details">
			<li class="order">
				<?php _e( 'Order Number:', 'woocommerce' ); ?>
				<strong><?php echo $order->get_order_number(); ?></strong>
			</li>
			<li class="date">
				<?php _e( 'Date:', 'woocommerce' ); ?>
				<strong><?php echo date_i18n( get_option( 'date_format' ), strtotime( $order->order_date ) ); ?></strong>
			</li>
			<li class="total">
				<?php _e( 'Total:', 'woocommerce' ); ?>
				<strong><?php echo $order->get_formatted_order_total(); ?></strong>
			</li>
			<?php if ( $order->payment_method_title ) : ?>
			<li class="method">
				<?php _e( 'Payment Method:', 'woocommerce' ); ?>
				<strong><?php echo $order->payment_method_title; ?></strong>
			</li>
			<?php endif; ?>
			<?php if ( $transaction_id = get_post_meta($order->id, '_transaction_id', true) ) : ?>
			<li class="paid">
				<?php pll_e('Payment status'); ?>
				<strong style="color: #00FF00;"><?php pll_e('Paid'); ?></strong>
			</li>
			<li class="tran">
				Transaction ID
				<strong><?php echo $transaction_id; ?></strong>
			</li>
			<?php endif; ?>
			<?php if ( $payment_id = get_post_meta($order->id, '_payment_id', true) ) : ?>
			<li class="payment">
				Payment ID
				<strong><?php echo $payment_id; ?></strong>
			</li>
			<?php endif; ?>
			<?php if ( $ref_id = get_post_meta($order->id, '_payment_ref', true) ) : ?>
			<li class="ref">
				Reference #
				<strong><?php echo $ref_id; ?></strong>
			</li>
			<?php endif; ?>
			<?php if ( $postdate = get_post_meta($order->id, '_payment_postdate', true) ) : ?>
			<li class="ref">
				Post date
				<strong><?php echo $postdate; ?></strong>
			</li>
			<?php endif; ?>
			<?php if ( $authcode = get_post_meta($order->id, '_payment_auth', true) ) : ?>
			<li class="ref">
				Auth Code
				<strong><?php echo $authcode; ?></strong>
			</li>
			<?php endif; ?>
		</ul>
		<div class="clear"></div>
		<?php if ( $transaction_id = get_post_meta($order->id, '_transaction_id', true) ) : ?>
			<p style="color: #888888;"><?php pll_e('Please print'); ?></p>
			<a href="#" style="font-size: 20px;" class="hvr-shadow-radial" onclick="window.print();"><?php pll_e('Print'); ?></a>
		<?php endif; ?>
	<?php endif; ?>

	<?php do_action( 'woocommerce_thankyou_' . $order->payment_method, $order->id ); ?>
	<?php do_action( 'woocommerce_thankyou', $order->id ); ?>

<?php else : ?>

	<p class="woocommerce-thankyou-order-received"><?php echo apply_filters( 'woocommerce_thankyou_order_received_text', __( 'Thank you. Your order has been received.', 'woocommerce' ), null ); ?></p>

<?php endif; ?>
