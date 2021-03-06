<?php
/**
 * Bundled Product Image template
 *
 * Override this template by copying it to 'yourtheme/woocommerce/single-product/bundled-item-image.php'.
 *
 * On occasion, this template file may need to be updated and you (the theme developer) will need to copy the new files to your theme to maintain compatibility.
 * We try to do this as little as possible, but it does happen.
 * When this occurs the version of the template file will be bumped and the readme will list any important changes.
 *
 * @version 4.10.2
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>
<div class="conta1">
<div class="bundled_product_images"><?php

	$image_title = esc_attr( get_the_title( get_post_thumbnail_id( $post_id ) ) );
	$image_link  = get_permalink( $post_id  );
	$image       = get_the_post_thumbnail( $post_id, apply_filters( 'bundled_product_large_thumbnail_size', 'shop_catalog' ), array(
		'title' => $image_title
	) );

	echo apply_filters( 'woocommerce_bundled_product_image_html', sprintf( '<a href="%s" class="bundled_product_image zoom" title="%s" data-rel="prettyPhoto">%s</a>', $image_link, $image_title, $image ), $post_id );


?>
	</div>
</div>

