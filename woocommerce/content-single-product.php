<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
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
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

?>

<?php
	/**
	 * woocommerce_before_single_product hook.
	 *
	 * @hooked wc_print_notices - 10
	 */
	 do_action( 'woocommerce_before_single_product' );

	 if ( post_password_required() ) {
	 	echo get_the_password_form();
	 	return;
	 }
?>

<div itemscope itemtype="<?php echo woocommerce_get_product_schema(); ?>" id="product-<?php the_ID(); ?>" <?php post_class("whole_products"); ?>>
<div class="second-part choosen">
<div class="generals chosen_prod">
	<div class="product">
		<div class="whole_contain">
			
			<div class="way">	
				<div>Armadiaz</div>
				<span>></span>
				<div>Products</div>
				<span>></span>
				<div>Drinks</div>
				<span>></span>
				<div>Tea</div>
			</div>
			
			<?php
				/**
				 * woocommerce_before_single_product_summary hook.
				 *
				 * @hooked woocommerce_show_product_sale_flash - 10
				 * @hooked woocommerce_show_product_images - 20
				 */
				//do_action( 'woocommerce_before_single_product_summary' );
			?>
			<div class="product_images">
					<?php
					woocommerce_show_product_images();
					do_action( 'woocommerce_product_thumbnails' );
					?>
			</div>
			<div class="explanation">
			<div><?php 
			global $product;
			echo $product->get_sku(); ?>&nbsp;&nbsp;
			<?php
			the_title(); 
			?></div>
			
			<div id="price_inner" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
				<?php echo $product->get_price_html(); ?>&nbsp;&nbsp;

				<?php
						woocommerce_template_single_add_to_cart();
					?>
					



				<meta itemprop="price" content="<?php echo esc_attr( $product->get_display_price() ); ?>" />
				<meta itemprop="priceCurrency" content="<?php echo esc_attr( get_woocommerce_currency() ); ?>" />


				

				<link itemprop="availability" href="http://schema.org/<?php echo $product->is_in_stock() ? 'InStock' : 'OutOfStock'; ?>" />


			</div>


			<div>

			<?php
			woocommerce_template_single_rating();
			?>
			<!--<fieldset class="rating">
				<input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
				<input type="radio" id="star4half" name="rating" value="4 and a half" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
				<input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
				<input type="radio" id="star3half" name="rating" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
				<input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
				<input type="radio" id="star2half" name="rating" value="2 and a half" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
				<input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
				<input type="radio" id="star1half" name="rating" value="1 and a half" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
				<input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
				<input type="radio" id="starhalf" name="rating" value="half" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
			</fieldset>-->
			</div>
			<!--<div id="review_num">8 reviews</div>-->
			
		
			<div itemprop="description">
				<?php echo apply_filters( 'woocommerce_short_description', $post->post_excerpt ) ?>
			</div>
			</div>
			<div class="description">

			<?php
		 woocommerce_output_product_data_tabs();

		?>
		
				<!--<fieldset>

					<legend id="descr">Description</legend>
					<legend id="recommendation">Recommendations</legend>
					<legend id="rev">Reviews(8)</legend>
					<div class="new_member_box_display" id="question"> Herbal remedy that supports weight loss designed for people over the age of 12, who have a tendency to gain weight and who do not lead a healthy life style.During weight reduction therapy it is recommended that fruit and vegetables be consumed.
					</div>
					<div class="new_member_box_display" id="question"> Herbal remedy that supports weight loss designed for people over the age of 12, who have a tendency to gain weight and who do not lead a healthy life style.During weight reduction therapy it is recommended that fruit and vegetables be consumed.
					</div>
			</fieldset>-->
		
		
			
	</div>


				<?php
					/**
					 * woocommerce_single_product_summary hook.
					 *
					 * @hooked woocommerce_template_single_title - 5
					 * @hooked woocommerce_template_single_rating - 10
					 * @hooked woocommerce_template_single_price - 10
					 * @hooked woocommerce_template_single_excerpt - 20
					 * @hooked woocommerce_template_single_add_to_cart - 30
					 * @hooked woocommerce_template_single_meta - 40
					 * @hooked woocommerce_template_single_sharing - 50
					 */
					//do_action( 'woocommerce_single_product_summary' );
				?>


			<?php
				/**
				 * woocommerce_after_single_product_summary hook.
				 *
				 * @hooked woocommerce_output_product_data_tabs - 10
				 * @hooked woocommerce_upsell_display - 15
				 * @hooked woocommerce_output_related_products - 20
				 */
				//do_action( 'woocommerce_after_single_product_summary' );
			?>

			<meta itemprop="url" content="<?php the_permalink(); ?>" />

		</div>
	</div>
</div>

<?php
get_template_part('left_menu');
?>
<?php
woocommerce_upsell_display();
?>

</div>


</div><!-- #product-<?php the_ID(); ?> -->


<?php do_action( 'woocommerce_after_single_product' ); ?>
