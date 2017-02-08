<?php
global $woocommerce;
?>
<!DOCTYPE HTML>

<html <?php language_attributes(); ?>>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo("charset") ?>">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/lightbox.css?v=1">

	
	<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

	<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
	<?php wp_head(); ?>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/home.css?v=4">
	
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-89263770-1', 'auto');
  ga('send', 'pageview');

</script>
</head>
<body <?php body_class(get_locale()); ?> >
<header>
	<div>
		<div>
			<span>
				<img class="info" src="<?php bloginfo('template_directory'); ?>/images/info.png">
					<div id="mquery">
						<a href="tel:+359 889 217 397"> +359 889 217 397</a>
						<a href="mailto:info@armadiaz.com">info@armadiaz.com</a>

					</div>
				<p class="supp"><?php pll_e('Customer Support'); ?></p>
			</span>
			<span>
				<p><?php pll_e('Phone'); ?><a href="callto:+359889217397"> +359 889 217 397</a></p>
			</span>
			<span>
				<p>e-mail: <a href="mailto:info@armadiaz.com">info@armadiaz.com</a></p>
			</span>
			<span class="lang">
				<a href="<?php echo pll_home_url('bg') ?>">bg</a>
				<a href="<?php echo pll_home_url('en') ?>">en</a>
				<form role="search" method="get" class="woocommerce-product-search" action="<?php echo esc_url( home_url( '/'  ) ); ?>" img class="search" src="<?php bloginfo('template_directory'); ?>/images/search.png">
					<input id="first" type="search" placeholder="<?php esc_attr_e( 'Search'); ?>"   value="<?php echo get_search_query(); ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label', 'woocommerce' ); ?>" />
					<input type="hidden" name="post_type" value="product" /> 
				</form>	
			</span>
		</div>
	</div>
<div>
<?php global $current_user;
      get_currentuserinfo();
?>
	<div>
	<?php if ( is_user_logged_in() ) { ?>
		<span><a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?> "><?php echo $current_user->user_login  ?></a></span>	
		<span><a href="<?php echo wp_logout_url( get_permalink( get_option('woocommerce_myaccount_page_id') ) ); ?> "><?php esc_attr_e( 'Logout', 'woocommerce' ); ?></a></span>
	<?php } else { ?>
		<span><a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?> "><?php esc_attr_e( 'Login', 'woocommerce' ); ?></a></span>	
		<span><a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>"><?php esc_attr_e( 'Register', 'woocommerce' ); ?></a></span>
	<?php } ?>
		<span><a href="<?php echo site_url().'/wishlist/view/'; ?>"><?php pll_e('Browse Wishlist'); ?></a></span>
		<span class="cartt"><a href="<?php echo $woocommerce->cart->get_cart_url(); ?>"><p><?php echo $woocommerce->cart->get_cart_contents_count( ); ?></p><img src="<?php bloginfo('template_directory'); ?>/images/cart.png"></a></span>
	</div>
</div>
<div class="margin-lr loggo">
		<i class="fa fa-bars  fa-3x" aria-hidden="true"></i>
		<div><a href="<?php echo home_url(); ?>">
			<img class="logo" src="<?php bloginfo('template_directory'); ?>/images/logo.png">
		</div>
			<?php if ( is_user_logged_in() ) { ?>
			<?php global $current_user; get_currentuserinfo(); ?>
		<div id="welcome">
			<h1><?php pll_e('Hi'); ?> <?php echo $current_user->user_login  ?></h1>
			<p><?php pll_e('Enjoy shopping with us!')?></p>
		</div>
	<?php } else {   ?>
		<div id= "welcome">
			<h1><?php pll_e('WELCOME'); ?> </h1> <a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?> "><?php pll_e('Login to your Armadiaz.com')?><br/><?php pll_e('and your personal proposals')?></a></p>
		</div>
	<?php } ?>
</div>
<div id="sticky-anchor">
	<?php 
	wp_nav_menu(array(
		'theme_location'=>"primary",
		'container_class'=>"margin-lr menu firstt",
	)); 
	?>
</div>
</header>
<script src=" <?php bloginfo('template_directory'); ?>/js/lightbox.js"></script>
<script>
	$(document).ready(function(){
	    $("button").click(function(){
	        $("p").toggle();
	    });
	});
</script>
<script type="text/javascript">	
	jQuery(".loggo .fa ").click(function()

		{
			jQuery(".firstt").fadeToggle(1000).css("position","absolute").css("top","85px")
		});

</script>
<script type="text/javascript">	
	jQuery(".search").click(function()

		{
			jQuery("#first").toggle(1000).css("position","absolute").css("top","18px").css("right","55px").css("background","#fff5e6").css("width","120px")
		});

</script>
<script>
	$(document).ready(function() {
	    // This will fire when document is ready:
	    $(window).resize(function() {
	        // This will fire each time the window is resized:
	        if($(window).width() >= 700) {
	            // if larger or equal
	            $('.firstt').css("position","relative").css("top","-30px");
	        } else {
	            // if smaller
	            $('.firstt').css("position","absolute").css("top","85px");
	        }
	    }).resize(); // This will simulate a resize to trigger the initial run.
	});
</script>
<script>
	jQuery(document).ready(function() {
	    // This will fire when document is ready:
	    jQuery(window).resize(function() {
	        // This will fire each time the window is resized:
	        if(jQuery(window).width() >= 580) {
	            // if larger or equal
	            jQuery("#first").css("position","relative").css("top","0px").css("width","247px").css("display","inline-block").css("right","0");
	        } else {
	            // if smaller
	            jQuery("#first").css("position","absolute").css("display","none").css("top","18px").css("right","5px").css("background","#fff5e6").css("width","120px").css("right","55px");;
	        }
	    }).resize(); // This will simulate a resize to trigger the initial run.
	});
</script>

<script>
	jQuery(document).ready(function() {
	        jQuery(".left_menu ul:first-of-type .fa").hide();

	        jQuery(".left_menu ul:first-of-type li").mouseover(function() {  // attaches click handler to links       
	            // show clickSave element inside the clicked link
	            var ele = jQuery(".fa", this).show();
	            // hide all other visible clickSave elements
	            jQuery(".left_menu ul:first-of-type .fa:visible").not(ele).hide(); 
	        });
	    }); 
</script>

<script type="text/javascript">
	var currentValue = 0;
	var add = function(valueToAdd){
	    currentValue += valueToAdd;
	    document.getElementById('number').innerHTML = currentValue;
	};
</script>


<script>
	function stickyHeader()
	{
		if ($(window).scrollTop() > ($("header").height() - 94)) {
	        $('#sticky-anchor .menu').addClass('fixed');
			$('.cartt').addClass('fixed');
	    } else {
	        $('#sticky-anchor .menu').removeClass('fixed');
			$('.cartt').removeClass('fixed');
	    }
	}

	$(window).on('scroll', function (e) {

		stickyHeader();
	});

	function goToByScroll( id, correction)
	{
		if (enabledScroll)
		{
			enabledScroll = false;
			$('html,body').animate({ 
				scrollTop: $(id).offset().top + correction
			}, 200, function() 
			{
				stickyHeader();
				enabledScroll = true;
			});
		}
	}
</script>

<script>
	$(document).ready(function(){
	    $(".info").click(function(){
	        $("#mquery").toggle().css("background-color","#000").css("position","absolute").css("top","51px");


	    });
	});
</script>


	
	