<?php
/**
 * Bundle add-to-cart button template
 *
 * Override this template by copying it to 'yourtheme/woocommerce/single-product/add-to-cart/bundle-button.php'.
 *
 * On occasion, this template file may need to be updated and you (the theme developer) will need to copy the new files to your theme to maintain compatibility.
 * We try to do this as little as possible, but it does happen.
 * When this occurs the version of the template file will be bumped and the readme will list any important changes.
 *
 * @version 4.7.4
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

global $product;

?>
<div class="choice">
	<button type="submit" class="hvr-shadow-radial" id="second_butt"><?php echo esc_html( pll__('Add to Cart') ); ?></button>
		<div class="hvr-shadow-radial wishlist"><?php echo do_shortcode( '[yith_wcwl_add_to_wishlist]' ); ?></div>
</div>
 	<input type="hidden" name="add-to-cart" value="<?php echo esc_attr( $product->id ); ?>" />
