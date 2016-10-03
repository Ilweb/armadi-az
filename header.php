<!DOCTYPE html>
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script type="text/javascript" SRC="js/jquery-1.7.1.min.js"></script>
	
	<script type="text/javascript" SRC="js/main.js?ver=1"></script>
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
	<link href="css/theme/jquery-ui-1.8.18.custom.css" rel="stylesheet" type="text/css"/>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
	<link rel="stylesheet" href="home.css">
	<link href="lightbox.css" rel="stylesheet">
</head>
<body class="<?php echo $bodyClass; ?>">
<header>
<div>
	<div>
		<span>
			<img class="info" src="images/info.png">
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
			<button><a href="#">rus</a></button>
			<img class="search" src="images/search.png">
			<input id="first" type="search" placeholder="SEARCH">
				
		</span>
	</div>
</div>
<div><div class="signin_buttons"><span><a href="#">login</a></span><span><a href="#">register</a></span><span class="cart"><a href="#"><p>5</p><img src="images/cart.png"></a></span></div></div>
<div class="margin-lr loggo"><i class="fa fa-bars  fa-3x" aria-hidden="true"></i><div><img class="logo" src="images/logo.png"></div><div id="welcome"><a href="#"><p>WELCOME</p>
<p>Login to your Armadiaz.com<br/>
and your personal proposals</p></a></div></div>
<div id="sticky-anchor">
</div>
<div class="margin-lr menu firstt">
<ul>
<li><a href="#">home</a></li>
<li><a href="#">products</a></li>
<li><a href="#">brochure</a></li>
<li><a href="#">events</a></li>
<li><a href="#">articles</a></li>
<li><a href="#">contacts</a></li>
<li><a href="#">abouts us</a></li>
</ul>
</div>
</header>
<script type="text/javascript">	
jQuery(".loggo .fa").click(function()

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
<script>
$(document).ready(function() {
        $(".left_menu ul:first-of-type .fa").hide();

        $(".left_menu ul:first-of-type li").mouseover(function() {  // attaches click handler to links       
            // show clickSave element inside the clicked link
            var ele = $(".fa", this).show();
            // hide all other visible clickSave elements
            $(".left_menu ul:first-of-type .fa:visible").not(ele).hide(); 
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
<script type="text/javascript">	
jQuery("#recommendation").click(function()

	{
		jQuery(this).css("border-bottom","none").css("background","white");
	});

</script>
<script>
$(function() {
$('#recommendation').click(function() {
	$(this).css("background","white").css("border-bottom-color","white");
	$('#descr').css("background","#fff5e6").css("border-bottom-color","#d1c6bf");
	$('#rev').css("background","#fff5e6").css("border-bottom-color","#d1c6bf");
	$('.new_member_box_display').html('The text you are adding');
});
});
</script>
<script>
$(function() {
$('#rev').click(function() {
	$(this).css("background","white").css("border-bottom-color","white");	
	$('#descr').css("background","#fff5e6").css("border-bottom-color","#d1c6bf");
	$('#recommendation').css("background","#fff5e6").css("border-bottom-color","#d1c6bf");
	$('.new_member_box_display').html('Bore');
});
});
</script>
<script>
$(function() {
$('#descr').click(function() {
	$(this).css("background","white").css("border-bottom-color","white");
	$('#recommendation').css("background","#fff5e6").css("border-bottom-color","#d1c6bf");
	$('#rev').css("background","#fff5e6").css("border-bottom-color","#d1c6bf");
	$('.new_member_box_display').html('Herbal remedy that supports weight loss designed for people over the age of 12, who have a tendency to gain weight and who do not lead a healthy life style.During weight reduction therapy it is recommended that fruit and vegetables be consumed.');
});
});
</script>

<script>
function stickyHeader()
{
	if ($(window).scrollTop() > $("header").height()) {
        $('.menu').addClass('fixed');
		$('.cart').addClass('fixed');
    } else {
        $('.menu').removeClass('fixed');
		$('.cart').removeClass('fixed');
		$('#sticky-anchor').height(0);
    }
}

$(window).on('scroll', function (e) {

	stickyHeader();
	slideWheel();
});

function goToByScroll( id, correction)
{
	if (enabledScroll)
	{
		enabledScroll = false;
		$('html,body').animate({ 
			scrollTop: $(id).offset().top + correction
		}, 500, function() 
		{
			stickyHeader();
			enabledScroll = true;
		});
	}
}
</script>