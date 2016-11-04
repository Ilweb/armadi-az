<?php
global $woocommerce;
?>
<!DOCTYPE HTML>

<html <?php language_attributes(); ?>>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo("charset") ?>">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/lightbox.css?v=1">
	<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
	<?php wp_head(); ?>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/home.css?v=2">
</head>
<body <?php body_class(get_locale()); ?> >
<header>
<div>
	<div>
		<span>
			<img class="info" src="<?php bloginfo('template_directory'); ?>/images/info.png">
			<p class="supp">Customer Support</p>
		</span>
		<span>
			<p>Phone: +359 889 217 397</p>
		</span>
		<span>
			<p>e-mail:info@armadiaz.com</p>
		</span>
		<span class="lang">
			<button><a href="#">bg</a></button>
			<button><a href="#">en</a></button>
			<button><a href="#">ru</a></button>
			<img class="search" src="<?php bloginfo('template_directory'); ?>/images/search.png">
			<input id="first" type="search" placeholder="SEARCH">
				
		</span>
	</div>
</div>
<div><div><span><a href="#">login</a></span><span><a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>">register</a></span><span class="cart"><a href="<?php echo $woocommerce->cart->get_cart_url(); ?>"><p><?php echo $woocommerce->cart->get_cart_contents_count( ); ?></p><img src="<?php bloginfo('template_directory'); ?>/images/cart.png"></a></span></div></div>

<div class="margin-lr loggo"><i class="fa fa-bars  fa-3x" aria-hidden="true"></i><div><a href="<?php echo home_url(); ?>"><img class="logo" src="<?php bloginfo('template_directory'); ?>/images/logo.png"></div><div id="welcome"><a href="#"><p>WELCOME</p>
<p>Login to your Armadiaz.com<br/>
and your personal proposals</p></a></div></div>

<?php 
wp_nav_menu(array(
	'theme_location'=>"primary",
	'container_class'=>"margin-lr menu firstt",
)); 
?>

</header>

<script type="text/javascript">	
jQuery(".fa").click(function()

	{
		jQuery(".firstt").fadeToggle(1000).css("position","absolute").css("top","85px")
	});

</script>
<script type="text/javascript">	
jQuery(".search").click(function()

	{
		jQuery("#first").fadeToggle(1000).css("position","absolute").css("top","18px").css("right","55px").css("background","#fff5e6").css("width","120px")
	});

</script>
<script>
$(document).ready(function() {
    // This will fire when document is ready:
    $(window).resize(function() {
        // This will fire each time the window is resized:
        if($(window).width() >= 700) {
            // if larger or equal
            $('.firstt').css("position","relative").css("top","0");
        } else {
            // if smaller
            $('.firstt').css("position","absolute").css("top","85px");
        }
    }).resize(); // This will simulate a resize to trigger the initial run.
});
</script>
<script>
$(document).ready(function() {
    // This will fire when document is ready:
    $(window).resize(function() {
        // This will fire each time the window is resized:
        if($(window).width() >= 580) {
            // if larger or equal
            jQuery("#first").css("position","relative").css("top","0px").css("width","247px").css("display","inline-block").css("right","0");
        } else {
            // if smaller
            jQuery("#first").css("position","absolute").css("display","none").css("top","18px").css("right","5px").css("background","#fff5e6").css("width","120px").css("right","55px");;
        }
    }).resize(); // This will simulate a resize to trigger the initial run.
});
</script>