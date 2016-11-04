<?php
/**
 * Loop Add to Cart
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

global $product;
?>
<div class="choice">
	<button class="add_to_wish">Add to wish list</button>
	<?php
	echo apply_filters( 'woocommerce_loop_add_to_cart_link',
		sprintf( '<a class="add_to_cart" rel="nofollow" href="%s" data-quantity="%s" data-product_id="%s" data-product_sku="%s" class="%s">%s</a>',
			esc_url( $product->add_to_cart_url() ),
			esc_attr( isset( $quantity ) ? $quantity : 1 ),
			esc_attr( $product->id ),
			esc_attr( $product->get_sku() ),
			esc_attr( isset( $class ) ? $class : 'button' ),
			esc_html( $product->add_to_cart_text() )
		),
	$product );
	?>
</div>
