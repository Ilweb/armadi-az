<?php 
$bodyClass = '';
require 'header.php';
?>
<div class="whole_products" id="particle">
<div class="second-part choosen">

<div class="generals chosen_prod">
	<div class="product">
		<div class="whole_contain">
			<div class="way">	
				<div>Armadiaz</div>
				<span>></span>
				<div>Products</div>
				<span>></span>
				<div>Drinks</div>
				<span>></span>
				<div>Tea</div>
			</div>
			<div class="product_images">
					<div class="pic_detail"><img src="images/recommended1.png"></div>
					<div class="smaller_pics">
					<section>
						<a  class="example-image-link" href="images/recommended1.png" data-lightbox="example-set"><div><img class="example-image" src="images/recommended1.png" alt=""></div></a>
						<a  class="example-image-link" href="images/recommended1.png" data-lightbox="example-set"><div><img class="example-image" src="images/recommended1.png" alt=""></div></a>
					</section>
					</div>
			</div>
			<div class="explanation">
			<div>#256 Herbal Tea Forte slimming by Planthouse</div>
			<div id="price_inner">20$</div>
			<div>
			<fieldset class="rating">
				<input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
				<input type="radio" id="star4half" name="rating" value="4 and a half" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
				<input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
				<input type="radio" id="star3half" name="rating" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
				<input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
				<input type="radio" id="star2half" name="rating" value="2 and a half" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
				<input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
				<input type="radio" id="star1half" name="rating" value="1 and a half" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
				<input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
				<input type="radio" id="starhalf" name="rating" value="half" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
			</fieldset>
			</div>
			<div id="review_num">8 reviews</div>
			<table class="num-of-purchase">
			<tr>
				<th><a href="javascript:add(-1)">-</a></th>
				<th id="text"><span id="number">0</span></th>
				<th><a href="javascript:add(1)">+</a></th>
			</tr>
			</table>
			<div class="delivery">
				<img src="images/calendar-icon.png">
				<div>
					<div>DELIVERY</div><br>Delivery period, info about days of delivery
				</div>
			</div>
			<div class="choice">
				<button id="first_butt">Add to wish list</button>
				<button id="second_butt">Add to cart</button>
			</div>
			</div>
			<div class="description"><fieldset><legend id="descr">Description</legend><legend id="recommendation">Recommendations</legend><legend id="rev">Reviews(8)</legend><div> Herbal remedy that supports weight loss designed for people over the age of 12, who have a tendency to gain weight and who do not lead a healthy life style.During weight reduction therapy it is recommended that fruit and vegetables be consumed.
			</div>
			<div> Herbal remedy that supports weight loss designed for people over the age of 12, who have a tendency to gain weight and who do not lead a healthy life style.During weight reduction therapy it is recommended that fruit and vegetables be consumed.
			</div>
			</fieldset></div>
		</div>
	</div>
</div>
<?php 
require 'left_menu.php';
?>
<ul class="best-of-the-best">
	<li>Best sellers<i class="fa fa-usd" aria-hidden="true"></i></li>
</ul>

<?php 
require 'recommended.php';
?>
</div>
</div>
<?php require 'footer.php';?>
<script src="lightbox.js"></script>
<body>