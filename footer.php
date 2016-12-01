
<!--<div class="margin-lr second ">
	<ul>
		<li><a href="#">Why to choose us</a></li>
		<li><a href="#">How to pay</a></li>
		<li><a href="#">For registrered</a></li>
		<li><a href="#">News</a></li>
	</ul>
</div>-->
<div class="margin-lr second">


	<?php
		wp_nav_menu(array(
		'theme_location'=>"footer"
	));
	?>
</div>
<footer class="footer_menu margin-lr">


	<div>





		<?php
$menu_name = 'info';

$locations = get_nav_menu_locations();
$menu_id = $locations[ $menu_name ] ;
wp_get_nav_menu_object($menu_id);


			wp_nav_menu(array(
			'theme_location'=>"info"
		));

		?>
	</div>
	<div>
		<ul class="social">
			<li><h4>Follow us</h4></li>
			<li><a class="first_of" href="#"><div style="background:url('<?php bloginfo('template_directory'); ?>/images/fb.png')"></div></a><a href="#"><div style="background:url('<?php bloginfo('template_directory'); ?>/images/skype.png');"></div></a><a href="#" class="first_of"><div style="background:url('<?php bloginfo('template_directory'); ?>/images/twitter.png')"></div></a><a href="#"><div style="background:url('<?php bloginfo('template_directory'); ?>/images/l_in.png')"></div></a><a href="#" class="first_of"><div style="background:url('<?php bloginfo('template_directory'); ?>/images/pin.png')"></div></a><a href="#"><div style="background:url('<?php bloginfo('template_directory'); ?>/images/insta.png')"></div></a></li>
		</ul>
	</div>
	<div>
<ul><li><h4>Contact us</h4></li>
	<?php
		wp_nav_menu(array(
		'theme_location'=>"contact us"
	));

	?>
	<li class="pay_for"><a href="#"><div style="background:url('../images/american.png')"></div></a><a href="#"><div style="background:url('../images/maestro.png')"></div></a><a href="#"><div style="background:url('../images/visa.png')"></div></a><a href="#"><div style="background:url('../images/pay.png')"></div></a><a href="#"><div style="background:url('../images/master.png')"></div></a><a href="#"><div style="background:url('../images/electron.png')"></div></a></li>
		
	</div>
	<div>
		<ul>
			<li><h4>Newsletter</h4></li>
			<li>
					<input type="text" placeholder="email"></input>
			</li>
			<li>
					<button id="sec_input"><a href="#">subscribe</a></button>
			</li>
		</ul>
	</div>
</footer>
</body>
