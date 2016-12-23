 <?php
/**
 * Single variation cart button
 *
 * @see 	https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.5.0
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

global $product;
?>
<div class="woocommerce-variation-add-to-cart variations_button">
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
			<button type="submit" class="hvr-shadow-radial" id="second_butt"><?php echo esc_html( pll__('Add to Cart') ); ?></button>
			<div class="hvr-shadow-radial wishlist"><?php echo do_shortcode( '[yith_wcwl_add_to_wishlist]' ); ?></div>
		</div>
		
	 	<input type="hidden" name="add-to-cart" value="<?php echo esc_attr( $product->id ); ?>" />

	</form>




<?php endif; ?>
</div>


<script type="text/javascript">
	
		
jQuery('.plus').click(function () {
    jQuery(this).prev().val(+jQuery(this).prev().val() + 1);
});
jQuery('.minus').click(function () {
    if (jQuery(this).next().val() > 0) jQuery(this).next().val(+jQuery(this).next().val() - 1);
});
</script>