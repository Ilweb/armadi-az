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
	<div id="myForm">
			<input type='button' value='-' class='minus' field='quantity' />
			<input type='text' name='quantity' value="1"  class='qty' <?php echo ( isset( $_POST['quantity'] ) ? wc_stock_amount( $_POST['quantityy'] ) : 1 ) ?>/>
			<input type='button' value='+' class='plus' field='quantity' />
   </div>
	
   
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
			<button class="hvr-shadow-radial" id="first_butt"><?php echo do_shortcode( '[yith_wcwl_add_to_wishlist]' ); ?></button>
			<button type="submit" class="hvr-shadow-radial" id="second_butt"><?php echo esc_html( $product->single_add_to_cart_text() ); ?></button>
		</div>
		
	 	<input type="hidden" name="add-to-cart" value="<?php echo esc_attr( $product->id ); ?>" />

	</form>


<?php endif; ?>

<script type="text/javascript">
	
		
 $('.plus').click(function () {
    $(this).prev().val(+$(this).prev().val() + 1);
});
$('.minus').click(function () {
    if ($(this).next().val() > 0) $(this).next().val(+$(this).next().val() - 1);
});
</script>

