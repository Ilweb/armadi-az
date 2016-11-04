<?php
/**
 * Simple product add to cart
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/add-to-cart/simple.php.
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
 * @version     2.1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;

if ( ! $product->is_purchasable() ) {
	return;
}

?>

<?php
	// Availability
	$availability      = $product->get_availability();
	$availability_html = empty( $availability['availability'] ) ? '' : '<p class="stock ' . esc_attr( $availability['class'] ) . '">' . esc_html( $availability['availability'] ) . '</p>';

	echo apply_filters( 'woocommerce_stock_html', $availability_html, $availability['availability'], $product );
?>

<?php if ( $product->is_in_stock() ) : ?>


	<form class="" method="post" enctype='multipart/form-data'>
	<?php
	if ( ! $product->is_sold_individually() ) {
		?>
		<table class="num-of-purchase">
			<tr>
				<th><a href="javascript:add(-1)">-</a></th>
				<th id="text"><span id="number"><?php echo ( isset( $_POST['quantity'] ) ? wc_stock_amount( $_POST['quantity'] ) : 1 ) ?></span></th>
				<th><a href="javascript:add(1)">+</a></th>
			</tr>
		</table>
		<?php
	}
	?>
		<div class="delivery">
			<img src="images/calendar-icon.png">
			<div>
				<div>DELIVERY</div><br>Delivery period, info about days of delivery
			</div>
		</div>
		
		<div class="choice">
			<button class="hvr-shadow-radial" id="first_butt">Add to wish list</button>
			<button type="submit" class="hvr-shadow-radial" id="second_butt"><?php echo esc_html( $product->single_add_to_cart_text() ); ?></button>
		</div>
		
	 	<input type="hidden" name="add-to-cart" value="<?php echo esc_attr( $product->id ); ?>" />

	</form>


<?php endif; ?>
