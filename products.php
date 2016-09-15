
<?php 
$bodyClass = '';
require 'header.php';
?>
<div class="whole_products">
<?php 
require 'brochure.php';
?>
<div class="second-part">
<div class="left_menu">
	<ul>
		<li>Categories</li>
		<li>Drinks</li>
		<li>Process meats</li>
		<li>Cans & edible</li>
		<li>Sweets</li>
		<li>Super food</li>
		<li>Bio/organic</li>
		<li>Traditional</li>
		<li>Molecular gastronomy</li>
		<li>Accessoaries</li>
		<li>Others</li>
	</ul>
	<ul>
		<li>Countries</li>
		<li>France</li>
		<li>Switzerland</li>
		<li>Belgium</li>
		<li>Italy</li>
		<li>Spain</li>
		<li>Hungary</li>
		<li>Bulgaria</li>
	</ul>
	<ul>
		<li>Brands</li>
	</ul>
</div>
<div class="generals">
	<div>Recommended products</div>
	<div class="recommended">
	<div>
		<img src="images/left.png" class="prev" onclick="plusSlides(-1)">
		<div class="items">
			<img src="images/recommended1.png">
			<div><span>#355</span>Herbal Tea Forte slimming</div>
			<div class="price">20$</div>
			<div class="choice">
				<button id="first_butt">Add to wish list</button>
				<button id="second_butt">Add to cart</button>
			</div>
		</div>
		<div class="items">
			<img src="images/recommended2.png">
			<div>
				<span>#355</span>Herbal Tea Forte slimming
			</div>
			<div class="price">20$</div>
		</div>
		<div class="items"><img src="images/recommended3.png"><div><span>#355</span>Herbal Tea Forte slimming</div><div class="price">20$</div></div>
		<div class="items"><img src="images/recommended4.png"><div><span>#355</span>Herbal Tea Forte slimming</div><div class="price">20$</div></div>
		<img id="right" src="images/left.png" class="next" onclick="plusSlides(1)">
	</div>
	</div>
</div>
<div class="generals for_best">
	<div>Recommended products</div>
	<div class="recommended">
	<div>
		<img src="images/left.png" class="prev" onclick="plusSlides(-1)">
		<div class="items">
			<img src="images/recommended1.png">
			<div><span>#355</span>Herbal Tea Forte slimming</div>
			<div class="price">20$</div>
			<div class="choice">
				<button id="first_butt">Add to wish list</button>
				<button id="second_butt">Add to cart</button>
			</div>
		</div>
		<div class="items">
			<img src="images/recommended2.png">
			<div>
				<span>#355</span>Herbal Tea Forte slimming
			</div>
			<div class="price">20$</div>
		</div>
		<div class="items"><img src="images/recommended3.png"><div><span>#355</span>Herbal Tea Forte slimming</div><div class="price">20$</div></div>
		<div class="items"><img src="images/recommended4.png"><div><span>#355</span>Herbal Tea Forte slimming</div><div class="price">20$</div></div>
		<img id="right" src="images/left.png" class="next" onclick="plusSlides(1)">
	</div>
	</div>
</div>
<div class="generals supply">
	<div>Recommended products</div>
	<div>
	<div style="background:url('images/zaabar.png')"></div>
	<div style="background:url('images/monte.png')"></div>
	<div style="background:url('images/planthouse.png')"></div>
	<div style="background:url('images/zaabar2.png')"></div>
	<div style="background:url('images/zaabar.png')"></div>
	<div style="background:url('images/zaabar.png')"></div>
	</div>
</div>	
</div>
</div>
<?php require 'footer.php';?>
