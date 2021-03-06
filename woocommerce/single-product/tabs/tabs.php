<?php
/**
 * Single Product tabs
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/tabs/tabs.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.4.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Filter tabs and allow third parties to add their own.
 *
 * Each tab is an array containing title, callback and priority.
 * @see woocommerce_default_product_tabs()
 */
$tabs = apply_filters( 'woocommerce_product_tabs', array() );

if ( ! empty( $tabs ) ) : ?>

	<div class="description">
		<ul class="tabs wc-tabs">
			<?php foreach ( $tabs as $key => $tab ) : ?>
				<li data-key="<?php echo esc_attr( $key ); ?>" class="<?php echo esc_attr( $key ); ?>_tab">
					<?php echo apply_filters( 'woocommerce_product_' . $key . '_tab_title', esc_html( $tab['title'] ), $key ); ?>
				</li>
			<?php endforeach; ?>
			
		</ul>
		
	</div>

	<?php foreach ( $tabs as $key => $tab ) : ?>
		
			<div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--<?php echo esc_attr( $key ); ?> panel entry-content wc-tab" id="tab-<?php echo esc_attr( $key ); ?>">
				<?php call_user_func( $tab['callback'], $key, $tab ); ?>
			</div>
		
		
		<?php endforeach; ?>
		

<?php endif; ?>


<script type="text/javascript">
jQuery(document).ready(function(){
	jQuery('.wc-tabs li').click(function(event) {  
		jQuery('.woocommerce-Tabs-panel').hide();
		jQuery("#tab-" + jQuery(this).data("key")).show();
		
		jQuery(".wc-tabs li").css("background", "#fff5e6").css("border-bottom-color","#d1c6bf");
		jQuery(this).css("background", "white").css("border-bottom-color","white");
	});
	
	jQuery('.wc-tabs li').first().click();
});
</script>