<!DOCTYPE html>
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="footer.css">
</head>
<body onload="labelPosition()">
<footer class="footer_menu margin-lr">
	<div>
		<ul><li><a href="#"><h4>More info</h4></a></li>
			<li><a href="#">About us</a></li>
			<li><a href="#">Terms & conditions</a></li>
			<li><a href="#">Guarantee</a></li>
			<li><a href="#">Delivery & goods return</a></li>
			<li><a href="#">Contacts</a></li>
			<li><a href="#">FAQ</a></li>
		</ul>
	</div>
	<div>
		<ul class="social">
			<li><a href="#"><h4>Follow us</h4></li>
			<li><a href="#"><div style="background:url('images/fb.png');margin-right:17px !important;)"></div></a><a href="#"><div style="background:url('images/skype.png');"></div></a></li>
			<li><a href="#"><div style="background:url('images/twitter.png');margin-right:20px !important;"></a></div><a href="#"><div style="background:url('images/l_in.png')"></div></a></li>
			<li><a href="#"><div style="background:url('images/pin.png');margin-right:19px !important;)"></div></a><a href="#"><div style="background:url('images/insta.png')"></div></a></li>
		</ul>
	</div>
	<div>
		<ul>
			<li><a href="#"><h4>Contact us</h4></a></li>
			<li><a href="#">info@armadiaz.com</a></li>
			<li><a href="#"><h4>How to pay</h4></a></li>
			<li><a href="#"><img src="images/pay.png"></a></li>
		</ul>
	</div>
	<div>
		<ul>
			<li><a href="#"><h4>Newsletter</h4></a></li>
			<li>
					<input type="text" placeholder="email"></input>
			</li>
			<li>
					<div id="sec_input">subscribe</div>
			</li>
		</ul>
	</div>
</footer>
</body>
<script>
    function labelPosition() {
        document.getElementById("name").style.position="absolute"; 
    }
</script>
