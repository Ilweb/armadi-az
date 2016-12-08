

<?php
/**
 * The template for displaying product content within loops
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;

// Ensure visibility
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
?>

<div class="items<?php/* post_class();*/ ?>">

	<?php
	/**
	 * woocommerce_before_shop_loop_item hook.
	 *
	 * @hooked woocommerce_template_loop_product_link_open - 10
	 */
	do_action( 'woocommerce_before_shop_loop_item' );

	/**
	 * woocommerce_before_shop_loop_item_title hook.
	 *
	 * @hooked woocommerce_show_product_loop_sale_flash - 10
	 * @hooked woocommerce_template_loop_product_thumbnail - 10
	 */
	do_action( 'woocommerce_before_shop_loop_item_title' );


	/**
	 * woocommerce_shop_loop_item_title hook.
	 *
	 * @hooked woocommerce_template_loop_product_title - 10
	 */
	//do_action( 'woocommerce_shop_loop_item_title' );?>

	<div class="title">
	<?php 
		the_title(); 
		?>
		
	</div>

	<div class="sku">
	<?php
			global $product;
			echo $product->get_sku().','. '&nbsp;'. '&nbsp;'. '&nbsp;'; 
			$terms = get_the_terms( $post->ID, 'product_cat' );
			if ($terms = get_the_terms( $post->ID, 'product_cat' ))
			{
				foreach ($terms as $term)
				{
					if (in_array($term->parent, array(405, 586)))
					{
						echo $term->name;
					}
				}
			}
			$q = $product->get_attribute("quantity-in-1-package");
			$dimension = $product->get_attribute("package-size");
	?>
	</div>
	<div class="stock"><?php echo $product->get_shipping_class(); ?></div>
	<div class="quantity"><?php echo $q.$dimension; ?></div>
<?php
		
	/**
	 * woocommerce_after_shop_loop_item_title hook.
	 *
	 * @hooked woocommerce_template_loop_rating - 5
	 * @hooked woocommerce_template_loop_price - 10
	 */
	do_action( 'woocommerce_after_shop_loop_item_title' );


	/**
	 * woocommerce_after_shop_loop_item hook.
	 *
	 * @hooked woocommerce_template_loop_product_link_close - 5
	 * @hooked woocommerce_template_loop_add_to_cart - 10
	 */
	do_action( 'woocommerce_after_shop_loop_item' );
	?>

</div>
