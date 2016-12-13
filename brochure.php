

<div id="slider">

  <a  class="control_next"><i class="fa fa-angle-right"></i></a>
  <a  class="control_prev"><i class="fa fa-angle-left"></i></a>
   <div class="diagonal">
 
<p><?php pll_e('Promo line 1'); ?> </p>
</div>
  <ul>
 

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
			$i = 0;

            while ( $loop->have_posts() ) : $loop->the_post(); $i++;
			global $product;
            echo $product->get_attribute("pageslider");

			if ($i % 4 == 1)
			{
				echo '<li>';
			}
                
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
			if ($i % 4 == 0)
			{
				echo '<div class="content">'.pll__("Active brochure category").'</div>';
				echo '</li>';
			}
            endwhile;
			if ($i % 4 != 0)
			{
				echo '<div class="content">'.pll__("Active brochure category").'</div>';
				echo '</li>';
			}
        } 
        wp_reset_postdata();


        ?>

<li>
    <div class="img2">
        <a href="<?php echo get_permalink(); ?>">
        <div class="bigImg">
            <img  src="<?php bloginfo('template_directory'); ?>/images/i.png" alt=""/>
        </div>
        <div class="bigInfo">
            <h4><?php the_title(); ?> - <span><?php woocommerce_template_loop_price(); ?></span></a>
            <a href="<?php echo $product->add_to_cart_url(); ?>"><i class=" fa-shopping-cart " aria-hidden="true"></i></a></h4>
            <p class="listItem">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <p><?php echo apply_filters( 'woocommerce_short_description', $post->post_excerpt ); ?></p>
        </div>
    </div>
</li>

            

  </ul>  
</div>





<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>




 
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


 

