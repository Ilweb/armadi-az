<?php
/**
 * Bundle quantity input template
 *
 * Override this template by copying it to 'yourtheme/woocommerce/single-product/add-to-cart/bundle-quantity-input.php'.
 *
 * On occasion, this template file may need to be updated and you (the theme developer) will need to copy the new files to your theme to maintain compatibility.
 * We try to do this as little as possible, but it does happen.
 * When this occurs the version of the template file will be bumped and the readme will list any important changes.
 *
 * @version 4.12.2
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

global $product;

if ( ! $product->is_sold_individually() ) {
	woocommerce_quantity_input( array(
		'min_value'   => apply_filters( 'woocommerce_quantity_input_min', 1, $product ),
		'max_value'   => apply_filters( 'woocommerce_quantity_input_max', $product->backorders_allowed() ? '' : $product->get_stock_quantity(), $product ),
		'input_value' => ( isset( $_POST[ 'quantity' ] ) ? wc_stock_amount( $_POST[ 'quantity' ] ) : 1 )
	) );

} else {
	?>
	<div id="myForm">
			<input type='button' value='-' class='minus' field='quantity' />
			<input type='text' name='quantity' value="1"  class='qty' <?php echo ( isset( $_POST['quantity'] ) ? wc_stock_amount( $_POST['quantityy'] ) : 1 ) ?>/>
			<input type='button' value='+' class='plus' field='quantity' />
   </div>
	<input class="qty" type="hidden" name="quantity" value="1" /><?php
}
?>


<script type="text/javascript">
	
		
 $('.plus').click(function () {
    $(this).prev().val(+$(this).prev().val() + 1);
});
$('.minus').click(function () {
    if ($(this).next().val() > 0) $(this).next().val(+$(this).next().val() - 1);
});
</script>

