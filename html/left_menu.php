<div class="sec_menu"><i class="fa fa-bars  fa-3x" aria-hidden="true"></i></div>
<div class="left_menu">
	<ul>
		<li class="category_main">Categories<i class="fa fa-list" style="display:inline-block !important;" aria-hidden="true"></i></li>
		<li class="other"><a href="#">Drinks</a></li>
		<li class="other"><a href="#">Process meats</a></li>
		<li class="other"><a href="#">Cans & edible</a></li>
		<li class="other"><a href="#">Sweets</a></li>
		<li class="other"><a href="#">Super food</a></li>
		<li class="other"><a href="#">Bio/organic</a></li>
		<li class="other"><a href="#">Traditional</a></li>
		<li class="other"><a href="#">Molecular gastronomy</a></li>
		<li class="other"><a href="#">Accessoaries</a></li>
		<li class="other"><a href="#">Others</a></li>
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

$('li.category_main').click(function() {
	if ($(window).width() <= 1024)
	{
		$(this).parent().parent().find('.other:visible').fadeOut();
		$(this).parent().find('.other').fadeIn();
	}
});

jQuery(".sec_menu").click(function()
{
	jQuery(".left_menu").fadeToggle(1000);
	jQuery(".best-of-the-best").fadeToggle(1000);
});

</script>