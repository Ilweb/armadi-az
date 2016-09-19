
<?php 
$bodyClass = '';
require 'header.php';
?>
<div class="whole_products">
<?php 
require 'brochure.php';
?>
<div class="second-part">
<?php 
require 'left_menu.php';
?>
<?php 
require 'recommended.php';
?>
<div class="generals for_best">
	<div>Best sellers</div>
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
        $(".left_menu ul:first-of-type .fa").hide();

        $(".left_menu ul:first-of-type li").mouseover(function() {  // attaches click handler to links       
            // show clickSave element inside the clicked link
            var ele = $(".fa", this).show().css("float","right").css("margin-right","40px").css("margin-top","10px");
            // hide all other visible clickSave elements
            $(".left_menu ul:first-of-type .fa:visible").not(ele).hide(); 
        });
    }); 
</script>
<script>
$(document).ready(function() {
        $(".left_menu ul .fa").css("float","right").css("margin-right","90px").css("margin-top","5px");
    }); 
</script>