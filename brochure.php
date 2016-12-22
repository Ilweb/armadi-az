

<div id="slider">

  <a  class="control_next"><i class="fa fa-angle-right"></i></a>
  <a  class="control_prev"><i class="fa fa-angle-left"></i></a>
   <div class="diagonal">
 
<p><?php pll_e('Promo line 1'); ?> </p>
</div>
  <ul>
  <li>
  	<img class="pageOne" src="<?php bloginfo('template_directory'); ?>/images/p2.png">
  </li>
  
        <?php
        $args = array(
            'post_type' => 'product',
			'posts_per_page' => -1,
        	'tax_query' => array(
                'relation' => 'AND',
                array(
                    'taxonomy' => 'product_cat',
                    'field' => 'name',
                    'terms' => pll__("Active brochure category")
                )
            ),
		);
		
        $loop = new WP_Query( $args );
        if ( $loop->have_posts() ) {
			$products = array();
		
            while ( $loop->have_posts() )
			{
				$loop->the_post(); 
				global $product;
				$page = $product->get_attribute("pageSlider");
				if ($page)
				{
					if (!isset($products[$page]))
					{
						$products[$page] = array();
					}
					$product->post = clone($post);
					$products[$page][] = clone($product);
				}
			}

			
			ksort($products);

			
            foreach ($products as $page => $prods)

			{
				echo '<li>';
				global $post;
				global $product;
				if (count($prods) == 1)
				{
					$product = $prods[0];
					$post = $product->post;
					setup_postdata( $product->post ); 
					$props = wc_get_product_attachment_props( get_post_thumbnail_id(), $post );
					?>

					<div class="img2">
						<a href="<?php echo get_permalink(); ?>">
						<div class="bigImg">
							<img  src="<?php echo esc_url( $props['url'] ); ?>" alt="<?php the_title(); ?>"/>
						</div>
						<div class="bigInfo">
							<h4><?php the_title(); ?> - <span><?php woocommerce_template_loop_price(); ?></span></a>
							<a href="<?php echo $product->add_to_cart_url(); ?>"><i class=" fa-shopping-cart " aria-hidden="true"></i></a></h4>
							<p class="listItem"><?php echo apply_filters( 'woocommerce_short_description', $post->post_excerpt ); ?></p>
						</div>
					</div>
					<?php
				}
				else
				{
					foreach ($prods as $key => $p)
					{
						$product = $p;
						$post = $product->post;
						setup_postdata( $product->post ); 
						?>

						<div class="img1"> 
					  
						   
							<a href="<?php echo get_permalink(); ?>">
							 <div class="conta">
							<?php woocommerce_template_loop_product_thumbnail(); ?>
							</div>
							<h4><?php the_title(); ?> - <span><?php woocommerce_template_loop_price(); ?></span></a>
							<a href="<?php echo $product->add_to_cart_url(); ?>"><i class=" fa-shopping-cart " aria-hidden="true"></i></a></h4>
							<p><?php echo apply_filters( 'woocommerce_short_description', $post->post_excerpt ); ?></p>
						</div>

						
						<?php
					}
				}
			
				echo '<div class="content">'.pll__("Active brochure category").'</div>';
				echo '</li>';
			}

        } 
		global $post;
        wp_reset_postdata();
		
        ?>
  </ul>  
</div>
 
<script>
    jQuery(document).ready(function ($) {


	var slideCount = $('#slider ul li').length;
	var slideWidth = $('#slider ul li').width();
	var slideHeight = $('#slider ul li').height();
	var sliderUlWidth = slideCount * slideWidth;
	
	$('#slider').css({ width: slideWidth, height: slideHeight });
	
	$('#slider ul').css({ width: sliderUlWidth, marginLeft: - slideWidth });
	
    $('#slider ul li:last-child').prependTo('#slider ul');

    function moveLeft() {
        $('#slider ul').animate({
            left: + slideWidth
        }, 200, function () {
            $('#slider ul li:last-child').prependTo('#slider ul');
            $('#slider ul').css('right', '');
        });
    };

    function moveRight() {
        $('#slider ul').animate({
            left: - slideWidth
        }, 200, function () {
            $('#slider ul li:first-child').appendTo('#slider ul');
            $('#slider ul').css('left', '');
        });
    };

    $('a.control_prev').click(function () {
        moveLeft();
    });

    $('a.control_next').click(function () {
        moveRight();
    });

});    


</script>


 

