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