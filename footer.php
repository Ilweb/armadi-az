
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
		<div >
			<img src="<?php bloginfo('template_directory'); ?>/images/VISA.png" style="height: 23px; margin-right: 2px;"/>
			<img src="<?php bloginfo('template_directory'); ?>/images/vpay.png" style="height: 23px; margin-right: 2px;"/>
			<a href="http://www.mastercard.com/index.html"><img src="<?php bloginfo('template_directory'); ?>/images/mc_accpt_023_gif.gif" style="height: 23px; margin-right: 2px;"/></a>
			<a href="http://www.maestrocard.com/"><img src="<?php bloginfo('template_directory'); ?>/images/ms_accpt_023_gif.gif" style="height: 23px;"/></a>
			<br/><br/>
			<img src="<?php bloginfo('template_directory'); ?>/images/vbyvisa_wht.png" style="height: 34px; margin-right: 15px"/>
			<img src="<?php bloginfo('template_directory'); ?>/images/sclogo_62x34.gif" style="height: 34px;"/>
		</div>
	</div>
	<div>
		<form action="<?php echo home_url(); ?>/?na=s" method="post"  onsubmit="return newsletter_check(this)">
		<ul>
			<?php
			echo '<li><h4>';
			pll_e('Newsletter');
			echo '</h4></li>';
			?>
			<li>
					<input type="text" name="ne" placeholder="<?php _e( 'Email address', 'woocommerce' ); ?>"></input>
			</li>
			<li>
					<button id="sec_input" type="submit"><?php pll_e('Subscribe'); ?></button>
			</li>
		</ul>
		<form/>
	</div>
</footer>
<script type="text/javascript">
//<![CDATA[
if (typeof newsletter_check !== "function") {
	window.newsletter_check = function (f) {
		var re = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-]{1,})+\.)+([a-zA-Z0-9]{2,})+$/;
		if (!re.test(f.elements["ne"].value)) {
			alert("<?php pll_e('Invalid email address'); ?>");
			return false;
		}
		return true;
	}
}
//]]>
</script>
<?php wp_footer(); ?>
<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '306999689697990'); // Insert your pixel ID here.
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=306999689697990&ev=PageView&noscript=1"
/></noscript>
<!-- DO NOT MODIFY -->
<!-- End Facebook Pixel Code -->
</body>
