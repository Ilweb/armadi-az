
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
		<ul>
		<?php		
		echo '<li><h4>';
		pll_e('Info');
		echo '</h4></li>';
		
		wp_nav_menu(array(
			'theme_location'=>"info",
			'items_wrap'=>'%3$s',
			'container'=>""
		));

		?>
		</ul>
	</div>
	<div>
		<ul class="social">
			<?php
			echo '<li><h4>';
			pll_e('Follow Us');
			echo '</h4></li>';
			?>
			<li><a class="first_of" href="#"><div style="background:url('<?php bloginfo('template_directory'); ?>/images/fb.png')"></div></a><a href="#"><div style="background:url('<?php bloginfo('template_directory'); ?>/images/twitter.png')"></div></a><a href="#" class="first_of"><div style="background:url('<?php bloginfo('template_directory'); ?>/images/l_in.png')"></div></a><a href="#"><div style="background:url('<?php bloginfo('template_directory'); ?>/images/insta.png')"></div></a></li>
		</ul>
	</div>
	<div>
		<ul>
			<?php
			
			echo '<li><h4>';
			pll_e('Contact Us');
			echo '</h4></li>';
			
			wp_nav_menu(array(
				'theme_location'=>"contact us",
				'items_wrap'=>'%3$s',
				'container'=>""
			));

			?>
		</ul>
		<div style="text-align: center;">
			<img src="<?php bloginfo('template_directory'); ?>/images/VISA.png" style="height: 23px;"/>
			<img src="<?php bloginfo('template_directory'); ?>/images/vpay.png" style="height: 23px;"/>
			<img src="<?php bloginfo('template_directory'); ?>/images/mc_ms_accpt_h_023_gif.gif" style="height: 23px;"/>
			<br/>
			<img src="<?php bloginfo('template_directory'); ?>/images/vbyvisa_wht.png" style="height: 34px;"/>
			<img src="<?php bloginfo('template_directory'); ?>/images/sclogo_62x34.gif" style="height: 34px;"/>
		</div>
	</div>
	<div>
		<ul>
			<?php
			echo '<li><h4>';
			pll_e('Newsletter');
			echo '</h4></li>';
			?>
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
