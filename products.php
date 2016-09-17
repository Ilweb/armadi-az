
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
		<li><a href="#">Categories</a></li>
		<li><a href="#">Drinks</a></li>
		<li><a href="#">Process meats</a></li>
		<li><a href="#">Cans & edible</a></li>
		<li><a href="#">Sweets</a></li>
		<li><a href="#">Super food</a></li>
		<li><a href="#">Bio/organic</a></li>
		<li><a href="#">Traditional</a></li>
		<li><a href="#">Molecular gastronomy</a></li>
		<li><a href="#">Accessoaries</a></li>
		<li><a href="#">Others</a></li>
	</ul>
	<ul>
		<li><a href="#">Countries</a></li>
		<li><a href="#">France</a></li>
		<li><a href="#">Switzerland</a></li>
		<li><a href="#">Belgium</a></li>
		<li><a href="#">Italy</a></li>
		<li><a href="#">Spain</a></li>
		<li><a href="#">Hungary</a></li>
		<li><a href="#">Bulgaria</a></li>
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
			<div class="choice">
				<button id="first_butt">Add to wish list</button>
				<button id="second_butt">Add to cart</button>
			</div>
		</div>
		<div class="items">
		
			<img src="images/recommended3.png">
			<div><span>#355</span>Herbal Tea Forte slimming</div>
			<div class="price">20$</div>
			<div class="choice">
				<button id="first_butt">Add to wish list</button>
				<button id="second_butt">Add to cart</button>
			</div>
		</div>
		<div class="items">
			<img src="images/recommended4.png">
			<div><span>#355</span>Herbal Tea Forte slimming</div>
			<div class="price">20$</div>
			<div class="choice">
				<button id="first_butt">Add to wish list</button>
				<button id="second_butt">Add to cart</button>
			</div>
		</div>
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
			<div class="choice">
				<button id="first_butt">Add to wish list</button>
				<button id="second_butt">Add to cart</button>
			</div>
		</div>
		<div class="items">
			<img src="images/recommended3.png">
			<div><span>#355</span>Herbal Tea Forte slimming</div>
			<div class="price">20$</div>
			<div class="choice">
				<button id="first_butt">Add to wish list</button>
				<button id="second_butt">Add to cart</button>
			</div>
		</div>
		<div class="items">
			<img src="images/recommended4.png">
			<div><span>#355</span>Herbal Tea Forte slimming</div>
			<div class="price">20$</div>
			<div class="choice">
				<button id="first_butt">Add to wish list</button>
				<button id="second_butt">Add to cart</button>
			</div>
		</div>
		<img id="right" src="images/left.png" class="next" onclick="plusSlides(1)">
	</div>
	</div>
</div>
<div class="generals supply">
	<div>Recommended products</div>
	<div>
		<div class="chapter">
			<div>
				<img src="images/zaabar.png">
				<div><span>Zaabar</span></div>
			</div>
		</div>
		<div class="chapter">
			<div>
				<img src="images/monte.png">
				<div><span>Monte universales</span></div>
			</div>
		</div>
		<div class="chapter">
			<div>
				<img src="images/planthouse.png">
				<div><span>Planthouse</span></div>
			</div>
		</div>
		<div class="chapter">
			<div>
				<img src="images/zaabar.png">
				<div><span>Zaabar</span></div>
			</div>
		</div>
		<div class="chapter">
			<div>
				<img src="images/zaabar2.png">
				<div><span>Zaabar</span></div>
			</div>
		</div>
		<div class="chapter">
			<div>
				<img src="images/monte2.png">
				<div><span>Monte universales</span></div>
			</div>
		</div>
	</div>
</div>	
</div>
</div>
<?php require 'footer.php';?>

<script>
$(document).ready(function() {
        $(".choice").hide();

        $(".items").click(function() {  // attaches click handler to links       
            // show clickSave element inside the clicked link
            var ele = $(".choice", this).fadeToggle(500);
            // hide all other visible clickSave elements
            $(".choice:visible").not(ele).hide(); 
        });
    }); 
</script>