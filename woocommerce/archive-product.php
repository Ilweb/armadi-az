<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header( 'shop' );
?>

<?php
		/**
		 * woocommerce_before_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
		 * @hooked woocommerce_breadcrumb - 20
		 */
		 
		//do_action( 'woocommerce_before_main_content' );
	?>
	
<?php


get_template_part('brochure');
?>

<div class="whole_products">
<div class="second-part">
<?php
get_template_part('left_menu');
?>

<div class="generals">

		<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>

			<h1 class="page-title"><?php woocommerce_page_title(); ?></h1>

		<?php endif; ?>
		
			<?php
				/**
				 * woocommerce_before_shop_loop hook.
				 *
				 * @hooked woocommerce_result_count - 20
				 * @hooked woocommerce_catalog_ordering - 30
				 */
				do_action( 'woocommerce_before_shop_loop' );
			?>

		<?php
			/**
			 * woocommerce_archive_description hook.
			 *
			 * @hooked woocommerce_taxonomy_archive_description - 10
			 * @hooked woocommerce_product_archive_description - 10
			 */
			/*do_action( 'woocommerce_archive_description' );*/
			
			global $wp_query;
			
			$category_name = $wp_query->query_vars['product_cat'];
			$category_object = get_term_by('slug', $category_name, 'product_cat');
			$category_id = $category_object->term_id;
			
			$subs = get_term_children($category_id, 'product_cat');
			$parents = get_terms( array(
				'taxonomy' => 'product_cat',
				'parent' => 0,
				'hide_empty' => false
			) );
			$categories = $wp_query->query_vars['tax_query'][0]['terms'];
		?>
		<div class="filters">
			<div>Filters:</div>
			<div class="filter_boxes">
				<form method="get" action="<?php echo get_permalink(); ?>">
				<div>
					<?php
					if (count($subs))
					{
						?><select name="c[]">
							<option value=""><?php pll_e('Subcategory'); ?></option>
							<?php
							foreach ($subs as $cat)
							{
								$term = get_term( $cat, 'product_cat' ); 
								echo '<option value="'.$cat.'"'.(in_array($cat, $categories) ? ' selected="selected"' : '').'>'.$term->name.'</option>';
							}
							?>
						</select><?php
					}
					foreach ($parents as $parent)
					{
						if (($parent->term_id != $category_id) && ($parent->term_id != $category_object->parent))
						{
							$subs = get_term_children($parent->term_id, 'product_cat');
							if (count($subs) > 1)
							{
								?><select name="c[]">
									<option value=""><?php echo $parent->name ?></option>
									<?php
									foreach ($subs as $cat)
									{
										$term = get_term( $cat, 'product_cat' ); 
										if ($term->parent == $parent->term_id)
										echo '<option value="'.$cat.'"'.(in_array($cat, $categories) ? ' selected="selected"' : '').'>'.$term->name.'</option>';
									}
									?>
								</select><?php
							}
						}
					}
					?>
				</div>
				</form>
			</div>
			<script type="text/javascript">
			jQuery(".filter_boxes form select").change(function()
			{
				jQuery(".filter_boxes form").submit();
			});
			</script>
		</div>	

		<?php if ( have_posts() ) : ?>

			<?php woocommerce_product_loop_start(); ?>

				<?php woocommerce_product_subcategories(); ?>

				<?php while ( have_posts() ) : the_post(); ?>

					<?php wc_get_template_part( 'content', 'product' ); ?>
			

				<?php endwhile; // end of the loop. ?>

			<?php woocommerce_product_loop_end(); ?>

			<?php
				/**
				 * woocommerce_after_shop_loop hook.
				 *
				 * @hooked woocommerce_pagination - 10
				 */
				do_action( 'woocommerce_after_shop_loop' );
			?>

		<?php elseif ( ! woocommerce_product_subcategories( array( 'before' => woocommerce_product_loop_start( false ), 'after' => woocommerce_product_loop_end( false ) ) ) ) : ?>

			<?php wc_get_template( 'loop/no-products-found.php' ); ?>

		<?php endif; ?>

	<?php
		/**
		 * woocommerce_after_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
		//do_action( 'woocommerce_after_main_content' );
	?>

	<?php
		/**
		 * woocommerce_sidebar hook.
		 *
		 * @hooked woocommerce_get_sidebar - 10
		 */
		//do_action( 'woocommerce_sidebar' );
?>

	</div>
	</div>
	</div>	

<?php get_footer( 'shop' ); ?>


<script type="text/javascript">
		$(document).ready(function(){
			window.scroll(0,420);
			
		});
</script>