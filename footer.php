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
			<li><a class="first_of" href="#"><div style="background:url('images/fb.png')"></div></a><a href="#"><div style="background:url('images/skype.png');"></div></a><a href="#" class="first_of"><div style="background:url('images/twitter.png')"></div></a><a href="#"><div style="background:url('images/l_in.png')"></div></a><a href="#" class="first_of"><div style="background:url('images/pin.png')"></div></a><a href="#"><div style="background:url('images/insta.png')"></div></a></li>
			
			
		</ul>
	</div>
	<div>
		<ul>
			<li><a href="#"><h4>Contact us</h4></a></li>
			<li><a href="#">info@armadiaz.com</a></li>
			<li><a href="#"><h4>How to pay</h4></a></li>
			<li class="pay_for"><a href="#"><div style="background:url('images/american.png')"></div></a><a href="#"><div style="background:url('images/maestro.png')"></div></a><a href="#"><div style="background:url('images/visa.png')"></div></a><a href="#"><div style="background:url('images/pay.png')"></div></a><a href="#"><div style="background:url('images/master.png')"></div></a><a href="#"><div style="background:url('images/electron.png')"></div></a></li>
		</ul>
	</div>
	<div>
		<ul>
			<li><a href="#"><h4>Newsletter</h4></a></li>
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
<script>
    function labelPosition() {
        document.getElementById("name").style.position="absolute"; 
    }
</script>
