<div class="sec_menu"><i class="fa fa-bars  fa-3x" aria-hidden="true"></i></div>
<div class="left_menu">
	<ul>
		<li class="category_main">Categories<i class="fa fa-list" style="display:inline-block !important;" aria-hidden="true"></i></li>
		<li class="other"><a href="#">Drinks</a><i class="fa fa-glass"  aria-hidden="true"></i></li>
		<li class="other"><a href="#">Process meats</a><i class="fa fa-cutlery" aria-hidden="true"></i></li>
		<li class="other"><a href="#">Cans & edible</a><i class="fa fa-database" aria-hidden="true"></i></li>
		<li class="other"><a href="#">Sweets</a><i class="fa fa-birthday-cake" aria-hidden="true"></i></li>
		<li class="other"><a href="#">Super food</a><i class="fa fa-cutlery" aria-hidden="true"></i></li>
		<li class="other"><a href="#">Bio/organic</a><i class="fa fa-envira" aria-hidden="true"></i></li>
		<li class="other"><a href="#">Traditional</a></li>
		<li class="other"><a href="#">Molecular gastronomy</a><i class="fa fa-link" aria-hidden="true"></i></li>
		<li class="other"><a href="#">Accessoaries</a><i class="fa fa-archive" aria-hidden="true"></i></li>
		<li class="other"><a href="#">Others</a><i class="fa fa-ellipsis-h" aria-hidden="true"></i></li>
	</ul>
	<ul>
		<li class="category_main">Countries<i class="fa fa-globe" style="display:inline-block;" aria-hidden="true"></i></li>
		<li class="other"><a href="#">France</a></li>
		<li class="other"><a href="#">Switzerland</a></li>
		<li class="other"><a href="#">Belgium</a></li>
		<li class="other"><a href="#">Italy</a></li>
		<li class="other"><a href="#">Spain</a></li>
		<li class="other"><a href="#">Hungary</a></li>
		<li class="other"><a href="#">Bulgaria</a></li>
	</ul>
	<ul>
		<li>Brands<i class="fa fa-diamond" aria-hidden="true"></i></li>
	</ul>
</div>
<script type="text/javascript">	
jQuery(".category_main").click(function()

	{
		jQuery(this).find("li.other").css("display","block")
	});

</script>
<script type="text/javascript">	
jQuery(".sec_menu").click(function()

	{
		jQuery(".left_menu").fadeToggle(1000)
	});

</script>